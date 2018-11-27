<?php
namespace Admin\Controller;
use Think\Controller;

class ConfigController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $configData = D('Config')->getConfigData();
        $configAccess = $configData['access'];

        $this->assign('configAccess', $configAccess);

        $this->display('Index/config');
    }

    public function save(){
        $access = I('post.access');

        if(noAccess() !== 1){
            exit(noAccess());
        }

        if($access === ''){
            exit(json_encode(array('code' => -1, 'info' => '数据为空')));
        }

        $res = D('Config')->saveConfigData($access);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '保存成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '保存失败')));
        }

    }

}