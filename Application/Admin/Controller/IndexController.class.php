<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $uuid = $_COOKIE['ngrUuid'];

        $res = D('User')->getUserData($uuid);

        $username = $res['username'];

        $this->assign('username', $username);

        $this->display('Index/index');
    }

}