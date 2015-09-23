<?php
namespace Home\Model;
use Think\Model;

/**
 * 提现模型
 */
class ExchargeModel extends Model{

    
    /**
     * 创建表单
     * @return boolean
     */
    public function createExcharge(){
        
        $data = $this->create();
        
        if($data['way']==1){    //判断提现方式    1为银行卡提现
            $data['account'] = I('post.account2');  //提现方式为银行卡，账号获取account2参数
        }else{
            $data['account'] = I('post.account');  //提现方式为第三方支付，账号获取account参数
        }
        
        $site_order = time_format(time(),'YmdHis').rand(100,999);
        $data['uid'] = is_login();
        $data['create_time'] = time();
        $data['status'] = 0;
        $data['site_order'] = $site_order;
        
        $result = $this->data($data)->add();
        
        if($reuslt !== false){
            return true;
        }else{
            return false;
        }
        
    }
    
    

    
    


}