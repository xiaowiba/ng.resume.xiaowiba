<?php
namespace Admin\Controller;
use Think\Controller;

class DetailController extends CommonController {

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $ccid = I('get.ccid');

        $this->assign('ccid', $ccid);

        $this->display('Index/detail');
    }

    public function detail(){
        $ccid = I('post.ccid');

        $res = D('Article')->getAdminArticleDetailData($ccid);

        $cname = $res[0]['cname'];
        $duty = $res[0]['duty'];
        $stime = $res[0]['stime'];
        $etime = $res[0]['etime'];
        $duration = $res[0]['duration'];
        $sort = $res[0]['sort'];
        $content = $res[0]['content'];
        $markdown = $res[0]['markdown'];

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
                'markdown' => $markdown
            ),
            'info' => '获取数据')));
    }

    public function update(){
        $ccid = I('post.ccid');
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

        $res = D('Article')->updateAdminArticleData($ccid, $cname, $duty, $stime, $etime, $duration, $sort, $content, $markdown);

        if($res === 1){
            exit(json_encode(array('code' => 200, 'info' => '保存成功')));
        }else{
            exit(json_encode(array('code' => -1, 'info' => '保存失败')));
        }

    }

}