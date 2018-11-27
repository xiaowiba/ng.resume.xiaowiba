<?php
namespace Admin\Controller;
use Think\Controller;

class WriteController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $count = D('Article')->getAdminArticleMaxCountData();

        $this->assign('count', $count[0]['sort']);

        $this->display('Index/write');
    }

    public function add(){
        $ccid = md5(time().C('MD5_PRE'));
        $cname = I('post.cname');
        $duty = I('post.duty');
        $stime = I('post.stime');
        $etime = I('post.etime');
        $duration = I('post.duration');
        $sort = I('post.sort');
        $content = I('post.content', '', false);
        $markdown = I('post.markdown', '', false);

        if(noAccess() !== 1){
            exit(noAccess());
        }

        $res = D('Article')->addAdminArticleData($ccid, $cname, $duty, $stime, $etime, $duration, $sort, $content, $markdown);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '发布成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '发布失败')));
        }
    }

}