<?php
namespace Common\Model;
use Think\Model;

class ArticleModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('article');
    }

    /**
     * @return mixed
     */
    public function getHomeArticleData(){
        if(isset($_COOKIE['ngrUuid'])){
            $res = $this->_db->where('uuid = "'.$_COOKIE['ngrUuid'].'"')->field('ccid,cname,duty,stime,etime,duration')->order('sort ASC')->select();
        }else{
            $res = $this->_db->where('1=1')->field('ccid,cname,duty,stime,etime,duration')->order('sort ASC')->select();
        }

        return $res;
    }

    /**
     * @param $page
     * @param $pageSize
     * @return mixed
     */
    public function getAdminArticleData($page, $pageSize){
        $offset = ($page-1)*$pageSize;
        $res = $this->_db->where('ngr_article.uuid = "'.$_COOKIE['ngrUuid'].'"')
            ->field('ngr_article.ccid, ngr_user.realname, ngr_article.cname, ngr_article.duty, ngr_article.stime, ngr_article.etime, ngr_article.duration, ngr_article.sort')
            ->join('ngr_user ON ngr_article.uuid = ngr_user.uuid')
            ->order('ngr_article.sort ASC')
            ->limit($offset, $pageSize)
            ->select();

        //$res = $this->_db->getLastSql();
        return $res;
    }

    /**
     * @param $ccid
     * @return mixed
     */
    public function getAdminArticleDetailData($ccid){
        $res = $this->_db->where('ccid = "'.$ccid.'"')->field('ccid,cname,duty,stime,etime,duration,sort,content,markdown')->select();
        return $res;
    }

    /**
     * @param $ccid
     * @return mixed
     */
    public function getHomeArticleDetailData($ccid){
        $res = $this->_db->where('ccid = "'.$ccid.'"')->field('ccid,cname,duty,stime,etime,duration,sort,content,markdown')->select();
        return $res;
    }

    /**
     * @return mixed
     */
    public function getAdminArticleCountData(){
        $res = $this->_db->where('1=1')->count();
        return $res;
    }

    /**
     * @return mixed
     */
    public function getAdminArticleMaxCountData(){
        $res = $this->_db->where('1=1')->field('sort')->order('sort DESC')->limit(1)->select();
        return $res;
    }

    /**
     * @param $ccid
     * @param $cname
     * @param $duty
     * @param $stime
     * @param $etime
     * @param $duration
     * @param $sort
     * @param $content
     * @param $markdown
     * @return mixed
     */
    public function addAdminArticleData($ccid, $cname, $duty, $stime, $etime, $duration, $sort, $content, $markdown){
        $data['ccid'] = $ccid;
        $data['uuid'] = $_COOKIE['ngrUuid'];
        $data['cname'] = $cname;
        $data['duty'] = $duty;
        $data['stime'] = $stime;
        $data['etime'] = $etime;
        $data['duration'] = $duration;
        $data['sort'] = $sort;
        $data['content'] = $content;
        $data['markdown'] = $markdown;
        $res = $this->_db->add($data);
        return $res;
    }

    /**
     * @param $ccid
     * @return mixed
     */
    public function deleteAdminArticleData($ccid){
        $res = $this->_db->where('ccid = "'.$ccid.'"')->delete();
        return $res;
    }

    /**
     * @param $ccid
     * @param $cname
     * @param $duty
     * @param $stime
     * @param $etime
     * @param $duration
     * @param $sort
     * @param $content
     * @param $markdown
     * @return bool
     */
    public function updateAdminArticleData($ccid, $cname, $duty, $stime, $etime, $duration, $sort, $content, $markdown){
        $data['cname'] = $cname;
        $data['duty'] = $duty;
        $data['stime'] = $stime;
        $data['etime'] = $etime;
        $data['duration'] = $duration;
        $data['sort'] = $sort;
        $data['content'] = $content;
        $data['markdown'] = $markdown;
        $res = $this->_db->where('ccid = "'.$ccid.'"')->save($data);
        return $res;
    }

    /**
     * @param $ccid
     * @param $sort
     * @return bool
     */
    public function updateAdminArticleSort($ccid, $sort){
        $data['sort'] = $sort;
        $res = $this->_db->where('ccid = "'.$ccid.'"')->save($data);
        return $res;
    }

}