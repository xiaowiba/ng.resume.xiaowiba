<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function __construct() {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct();

        $this->ifloginAction();

    }

    /**
     * 检测是否登录
     */
    public function ifloginAction() {
        if (!(isset($_COOKIE['ngrUuid']) )) {
            //$this->redirect('login/index');
            exit("<script>window.parent.location.href = '/admin/login/index';</script>");
        }
    }

    /**
     * 权限判断
     */
    public function authority(){

    }

}