<?php
namespace Home\Controller;
use Think\Controller;

class DetailController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
        $ccid = I('get.ccid');

        $res = D('Article')->getHomeArticleDetailData($ccid);

        $cname = $res[0]['cname'];

        $this->assign('ccid', $ccid);
        $this->assign('cname', $cname);

        $user = D('User')->getUserData($_COOKIE['ngrUuid']);

        $username = $user['username'];

        $this->assign('username', $username);

        $this->display("Index/detail");
    }

    public function detail(){
        $ccid = I('post.ccid');

        $res = D('Article')->getHomeArticleDetailData($ccid);

        $cname = $res[0]['cname'];
        $duty = $res[0]['duty'];
        $stime = $res[0]['stime'];
        $etime = $res[0]['etime'];
        $duration = $res[0]['duration'];
        $sort = $res[0]['sort'];
        $content = $res[0]['content'];

        exit(json_encode(array(
            'code' => 200,
            'data' => array(
                'cname' => $cname,
                'duty' => $duty,
                'stime' => $stime,
                'etime' => $etime,
                'duration' => $duration,
                'sort' => $sort,
                'content' => $content,
            ),
            'info' => '获取数据')));
    }

}