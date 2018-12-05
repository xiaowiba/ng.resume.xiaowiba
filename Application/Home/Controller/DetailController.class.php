<?php
namespace Home\Controller;
use Think\Controller;

class DetailController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
        $uuid = $_COOKIE['ngrUuid'];

        if(!(isset($_COOKIE['ngrUuid']))){
            exit("<script>window.parent.location.href = '/404';</script>");
        }

        //获取当前数据信息
        $ccid = I('get.ccid');

        $res = D('Article')->getHomeArticleDetailData($ccid);

        $cname = $res[0]['cname'];
        $sort = $res[0]['sort'];

        $prev = $sort - 1;
        $next = $sort + 1;

        $resPrev = D('Article')->getAdminArticlePrevNext($uuid, $prev);

        $resNext = D('Article')->getAdminArticlePrevNext($uuid, $next);

        if($resPrev[0] === null){
            $prevName = '没有了';
            $prevCcid = 0;
        }else{
            $prevName = $resPrev[0]['cname'];
            $prevCcid = $resPrev[0]['ccid'];
        }

        if($resNext[0] === null){
            $nextName = '没有了';
            $nextCcid = 0;
        }else{
            $nextName = $resNext[0]['cname'];
            $nextCcid = $resNext[0]['ccid'];
        }

        $this->assign('ccid', $ccid);
        $this->assign('cname', $cname);

        $this->assign('prevName', $prevName);
        $this->assign('nextName', $nextName);
        $this->assign('prevCcid', $prevCcid);
        $this->assign('nextCcid', $nextCcid);

        //获取当前登录用户信息
        $user = D('User')->getUserData($uuid);

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