<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $uuid = $_COOKIE['ngrUuid'];

        $res = D('User')->getUserData($uuid);

        $username = $res['username'];
        $pwd = $res['pwd'];
        $realname = $res['realname'];
        $sex = $res['sex'];
        $birthday = $res['birthday'];
        $age = $res['age'];
        $workinglife = $res['workinglife'];
        $education = $res['education'];
        $school = $res['school'];
        $major = $res['major'];
        $duties = $res['duties'];
        $political = $res['political'];
        $english = $res['english'];
        $phone = $res['phone'];
        $qq = $res['qq'];
        $wechat = $res['wechat'];
        $github = $res['github'];
        $email = $res['email'];
        $blog = $res['blog'];
        $skill = $res['skill'];

        $this->assign('uuid', $uuid);
        $this->assign('username', $username);
        $this->assign('pwd', $pwd);
        $this->assign('realname', $realname);
        $this->assign('sex', $sex);
        $this->assign('birthday', $birthday);
        $this->assign('age', $age);
        $this->assign('workinglife', $workinglife);
        $this->assign('education', $education);
        $this->assign('school', $school);
        $this->assign('major', $major);
        $this->assign('duties', $duties);
        $this->assign('political', $political);
        $this->assign('english', $english);
        $this->assign('phone', $phone);
        $this->assign('qq', $qq);
        $this->assign('wechat', $wechat);
        $this->assign('github', $github);
        $this->assign('email', $email);
        $this->assign('blog', $blog);
        $this->assign('skill', $skill);

        $this->display('Index/user');
    }

    public function save(){
        $uuid = I('post.uuid');
        $realname = I('post.realname');
        $sex = I('post.sex');
        $birthday = I('post.birthday');
        $age = I('post.age');
        $workinglife = I('post.workinglife');
        $education = I('post.education');
        $school = I('post.school');
        $duties = I('post.duties');
        $political = I('post.political');
        $english = I('post.english');
        $phone = I('post.phone');
        $qq = I('post.qq');
        $wechat = I('post.wechat');
        $github = I('post.github');
        $email = I('post.email');
        $blog = I('post.blog');
        $skill = I('post.skill');

        if(noAccess() !== 1){
            exit(noAccess());
        }

        $res = D('User')->updateUserData($uuid, $realname, $sex, $birthday, $age, $workinglife, $education, $school, $duties, $political, $english, $phone, $qq, $wechat, $github, $email, $blog, $skill );

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '更新成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '更新失败')));
        }

    }

    public function savepwd(){
        $uuid = I('post.uuid');
        $pwd0 = I('post.pwd0');
        $pwd1 = md5(I('post.pwd1'));

        if(noAccess() !== 1){
            exit(noAccess());
        }

        $res = D('User')->updateUserPwd($uuid, $pwd1);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '更新成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '更新失败')));
        }
    }

}