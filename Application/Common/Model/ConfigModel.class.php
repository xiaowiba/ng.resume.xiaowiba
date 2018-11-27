<?php
namespace Common\Model;
use Think\Model;

class ConfigModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('config');
    }

    /**
     * @return mixed
     */
    public function getConfigData(){
        $res = $this->_db->where('1=1')->find();
        return $res;
    }

    /**
     * @param $access
     * @return bool
     */
    public function saveConfigData($access){
        $data['access'] = $access;
        $res = $this->_db->where('1=1')->save($data);
        return $res;
    }

}
