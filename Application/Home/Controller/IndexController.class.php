<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends CommonController {

    public function index(){
        $configData = D('Config')->getConfigData();
        $configAccess = $configData['access'];

        //登陆的优先级最高
        if(isset($_COOKIE['ngrUuid'])){
            $configAccess = 2;
            $uuid = $_COOKIE['ngrUuid'];
        }else{
            $uuid = 'U0001';
        }

        if($configAccess == 2){
            $configAccessTwo = 2;
        }else{
            $configAccessTwo = 9;
        }

        $userData = D('User')->getUserData($uuid);
        $realName = conceal($userData['realname'], 2);
        $sex = conceal($userData['sex'], $configAccessTwo);
        $birthday = conceal($userData['birthday'], $configAccess);
        $education = conceal($userData['education'], $configAccessTwo);
        $school = conceal($userData['school'], $configAccess);
        $major = conceal($userData['major'], $configAccess);
        $duties = conceal($userData['duties'], $configAccess);
        $political = conceal($userData['political'], $configAccessTwo);
        $workingLife = conceal((($userData['workinglife']).'年工作经验'), $configAccess);
        $phone = conceal($userData['phone'], $configAccess);
        $qq = conceal($userData['qq'], $configAccess);
        $wechat = conceal($userData['wechat'], $configAccess);
        $github = conceal($userData['github'], $configAccess);
        $email = conceal($userData['email'], $configAccess);
        $blog = conceal($userData['blog'], $configAccess);
        $skill = conceal($userData['skill'], 2);

        $indexArticleData = D('Article')->getHomeArticleData();

        $this->assign('configAccess', $configAccess);

        $this->assign('realName', $realName);
        $this->assign('sex', $sex);
        $this->assign('birthday', $birthday);
        $this->assign('education', $education);
        $this->assign('school', $school);
        $this->assign('major', $major);
        $this->assign('duties', $duties);
        $this->assign('political', $political);
        $this->assign('workingLife', $workingLife);
        $this->assign('phone', $phone);
        $this->assign('qq', $qq);
        $this->assign('wechat', $wechat);
        $this->assign('github', $github);
        $this->assign('email', $email);
        $this->assign('blog', $blog);
        $this->assign('skill', $skill);

        $this->assign('indexArticleData', $indexArticleData);

        $this->display("Index/index");
    }

}