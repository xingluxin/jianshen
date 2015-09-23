<?php

namespace Home\Model;
use Think\Model;
use User\Api\UserApi;

/**
 * 文档基础模型
 */
class FeedBackModel extends Model{

    /* 用户模型自动完成 */
    protected $_auto = array(
        array('create_ip', 'get_client_ip', self::MODEL_INSERT, 'function', 1),
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('status', 0, self::MODEL_INSERT),
    );

    /**
     * 增加用户反馈
     * @return boolean
     */
    public function addInfo(){
        $data = $this->create();
        $data['uid'] = is_login();
        $result = $this->data($data)->add();
        if($result!==false){
            return true;
        }else{
            return false;
        }
    }
    
    

}
