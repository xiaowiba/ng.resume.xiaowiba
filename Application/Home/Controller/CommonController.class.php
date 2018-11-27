<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function __construct() {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct();

        $this->authAction();
    }

    /**
     * 检测查看状态
     */
    public function authAction() {
        $configData = D('Config')->getConfigData();
        $configAccess = $configData['access'];

        if ($configAccess === '0' && !(isset($_COOKIE['ngrUuid']))) {
            exit("<script>window.parent.location.href = '/404';</script>");
        }
    }

}