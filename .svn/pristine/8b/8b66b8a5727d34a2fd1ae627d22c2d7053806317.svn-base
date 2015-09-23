<?php
namespace Admin\Model;
use Think\Model;

/**
 * 提现模型
 */
class ExchargeModel extends Model{

    
    public function getInfo($id){
        
      $map['id'] = $id;
      $row = $this->where($map)->find();
      return $row;  
      
    }
    
    public function setStatus(){
        
        $map['id'] = I('post.id');
        $data['status'] = I('post.status');
        $result = $this->data($data)->where($map)->save();
        if($result !==false ){
            return true;
        }else{
            return false;
        }
    }
    
    

    
    


}