<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class LoginController extends Controller {

    public function index(){
        if (!(isset($_COOKIE['ngrUuid']) )) {
            $this->display('Index/login');
        }else{
            echo "<script>window.parent.location.href='/admin/index/index';</script>";
            exit;
        }

    }

    public function login() {
        $username = I('post.username');
        $pwd = md5(I('post.pwd'));

        if($username === '' || $pwd === ''){
            exit(json_encode(array('code' => -1, 'info' => '用户名或密码为空')));
        }

        $loginIp = nowip();
        $loginTime = time();

        $res = D('User')->getLoginData($username, $pwd);

        if($res[0] === null){
            exit(json_encode(array('code' => -1, 'info' => '用户名或密码错误')));
        }else{
            $uuid = $res[0]['uuid'];
            $loginCount = intval($res[0]['logincount']) + 1;

            D('User')->updateLoginData($uuid, $loginIp, $loginTime, $loginCount);

            //setcookie('ngrUuid', C('MD5_PRE').md5($res[0]['uuid']), time()+3600, '/');
            setcookie('ngrUuid', $res[0]['uuid'], time()+3600*12, '/');

            exit(json_encode(array('code' => 200, 'info' => 'success')));
        }

        //$this->redirect('index/index');

    }

    public function loginout() {
        setcookie('ngrUuid', '', time(), "/");
        $this->redirect('login/index');

    }

}