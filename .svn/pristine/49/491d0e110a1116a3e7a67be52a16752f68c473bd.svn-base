<?php

namespace Admin\Model;
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
    );

    public function setStatus($id=0){
        
        $map['id'] = $id;
        $data['status'] = 1;
        $result = $this->where($map)->data($data)->save();
        if($reult !== false){
            return true;
        }else{
            return false;
        }
    }    
    
    public function delInfo($id=0){
        $map['id'] = $id;
        $result = $this->where($map)->delete();
        if($result !== false){
            return true;
        }else{
            return false;
        }
        
    }
    

}
