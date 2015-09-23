<?php

namespace Home\Model;
use Think\Model;

/**
 * 文档基础模型
 */
class WalletModel extends Model{


    public function addMoney($moeny,$uid){
        
        echo $uid;
        
        $map['uid'] = $uid;
        $row = $this->where($map)->find();
        
        if(empty($row['id'])){
            $data['uid'] = $uid;
            $data['money'] = think_encrypt($money);
            $result = $this->data($data)->add();
        }else{
            
            $map['uid'] = $uid;
            $data['money'] = think_encrypt(think_decrypt($row['money'])+$moeny);
            $result = $this->data($data)->where($map)->save();
            if($result !==false ){
                return true;
            }else{
                return false;
            }
        }
        
    }
    
    public function getMoney($uid=0){
        $map['uid'] = $uid;
        $row = $this->field('money')->where($map)->find();
        return think_decrypt($row['money']);
    }

    
    


}