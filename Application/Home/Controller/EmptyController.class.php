<?php
namespace Home\Controller;
use Think\Controller;

class EmptyController extends CommonController{
    public function index(){
        $this->display('Index/404');
    }

    function _empty(){
        header("HTTP/1.0 404 Not Found");
        $this->display('Index/404');
    }

}