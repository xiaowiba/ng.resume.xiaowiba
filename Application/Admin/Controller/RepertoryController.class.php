<?php
namespace Admin\Controller;
use Think\Controller;

class RepertoryController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $count = D('Article')->getAdminArticleCountData();

        $this->assign('count', $count);

        $this->display('Index/repertory');
    }

    public function getdata(){
        $page = I('post.page') ? I('post.page') : 1;
        $pageSize = I('post.pageSize') ? I('post.pageSize') : 5;

        $count = D('Article')->getAdminArticleCountData();

        $res = D('Article')->getAdminArticleData($page, $pageSize);

        exit(json_encode(array('code' => 200, 'data' => $res, 'count' => $count, 'info' => 'success')));
    }

    public function delete(){
        $ccid = I('post.ccid');

        if(noAccess() !== 1){
            exit(noAccess());
        }

        $res = D('Article')->deleteAdminArticleData($ccid);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '删除成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '删除失败')));
        }

    }

    public function updatesort(){
        $ccid = I('post.ccid');
        $sort = I('post.sort');

        $res = D('Article')->updateAdminArticleSort($ccid, $sort);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '修改成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '修改失败')));
        }
    }

}