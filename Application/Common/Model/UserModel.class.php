<?php
namespace Common\Model;
use Think\Model;

class UserModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('user');
    }

    /**
     * @param $uuid
     * @return mixed
     */
    public function getUserData($uuid){
        $res = $this->_db->where('uuid = "'.$uuid.'"')->find();
        return $res;
    }

    /**
     * @param $username
     * @param $pwd
     * @return mixed
     */
    public function getLoginData($username, $pwd){
        $res = $this->_db->where('username = "'.$username.'" AND pwd = "'.$pwd.'"')->select();
        return $res;
    }

    /**
     * @param $uuid
     * @param $loginIp
     * @param $loginTime
     * @param $loginCount
     * @return bool
     */
    public function updateLoginData($uuid, $loginIp, $loginTime, $loginCount){
        $data['loginip'] = $loginIp;
        $data['logintime'] = $loginTime;
        $data['logincount'] = $loginCount;
        $res = $this->_db->where('uuid = "'.$uuid.'"')->save($data);
        return $res;
    }

    /**
     * @param $uuid
     * @param $realname
     * @param $sex
     * @param $birthday
     * @param $age
     * @param $workinglife
     * @param $education
     * @param $school
     * @param $duties
     * @param $political
     * @param $english
     * @param $phone
     * @param $qq
     * @param $wechat
     * @param $github
     * @param $email
     * @param $blog
     * @param $skill
     * @return bool
     */
    public function updateUserData($uuid, $realname, $sex, $birthday, $age, $workinglife, $education, $school, $duties, $political, $english, $phone, $qq, $wechat, $github, $email, $blog, $skill){
        $data['realname'] = $realname;
        $data['sex'] = $sex;
        $data['birthday'] = $birthday;
        $data['age'] = $age;
        $data['workinglife'] = $workinglife;
        $data['education'] = $education;
        $data['school'] = $school;
        $data['duties'] = $duties;
        $data['political'] = $political;
        $data['english'] = $english;
        $data['phone'] = $phone;
        $data['qq'] = $qq;
        $data['wechat'] = $wechat;
        $data['github'] = $github;
        $data['email'] = $email;
        $data['blog'] = $blog;
        $data['skill'] = $skill;
        $res = $this->_db->where('uuid = "'.$uuid.'"')->save($data);
        return $res;
    }

    /**
     * @param $uuid
     * @param $pwd
     * @return bool
     */
    public function updateUserPwd($uuid, $pwd){
        $data['pwd'] = $pwd;
        $res = $this->_db->where('uuid = "'.$uuid.'"')->save($data);
        return $res;
    }

}