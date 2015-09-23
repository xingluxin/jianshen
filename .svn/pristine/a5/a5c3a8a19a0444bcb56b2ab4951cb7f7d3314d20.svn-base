<?php
namespace Home\Model;
use Think\Model;

/**
 * 支付信息模型
 */
class PayModel extends Model{

    /**
     * @param 创建订单
     * @return 加密后的站内订单编号
     * @author lussen <lussen@xingluxin.cn>
     */
    public function creatPay(){
        
        $site_order = time_format(time(),'YmdHis').rand(100,999);
        
        $data['uid'] = is_login();
        $data['pay_money'] = I('post.money');
        $data['pay_item'] = I('post.pay_item');
        $data['site_order'] =$site_order;
        $data['isdone'] = 0;
        $data['create_time'] = time();
        
        $result = $this->data($data)->add();
        
        if($result !==false){
             
            return think_encrypt($site_order);
        }else{
            return false;
        }
        
    }
    
    /**
     * 更新支付方式
     * @param  $pay_mode 支付方式
     * @param  $site_order 站内订单编号
     * @return boolean 是否更新成功
     * @author lussen <lussen@xingluxin.cn>
     */
    public function updatePayModel($pay_mode="",$site_order=""){
        
        if(empty($pay_mode)||empty($site_order)){
            return false;
        }else{
            $data['pay_mode'] = $pay_mode;
            $map['site_order'] = think_decrypt($site_order);
            $result = $this->data($data)->where($map)->save();
            if($result !==false){
                return true;
            }else{
                return false;
            }
            
        }
        
    }
    
    /**
     * 完成支付
     * @param  $pay_order 第三方支付平台订单号
     * @param  $site_order 站内订单号
     * @return boolean 是否完更新
     * @author lussen <lussen@xingluxin.cn>
     */
    public function finishPay($pay_order,$site_order){
        
        $data['finish_time'] = NOW_TIME;
        $data['pay_order'] = $pay_order;
        $data['isdone'] = 1;
        $map['site_order'] = $site_order;
        
        $result = $this->data($data)->where($map)->save();
        
        if($rsult !== false){
            return true;
        }else{
            return false;
        }
        
    }
    
    /**
     * 根据站内订单号获取单条支付信息
     * @param  $site_order 站内订单号
     * @param  $isEncrypt 传入的站内订单号是否是已加密的，默认加密
     * @return 指定订单数组
     * @author lussen <lussen@xingluxin.cn>
     */
    public function getInfo($site_order=0,$isEncrypt=true){
        
        if($isEncrypt){
            $map['site_order'] = think_decrypt($site_order);
        }else{
            $map['site_order'] = $site_order;
        }
       
        $row = $this->where($map)->find();
        return $row;
        
    }
    
    /**
     * 根据用户id获取支付信息集合
     * @param  $uid 用户ID
     * @return 该用户ID的支付信息集合
     * @author lussen <lussen@xingluxin.cn> 
     */
    public function getList($uid=0){
        $map['uid'] = $uid;
        $result = $this->where($map)->order('create_time DESC')->select();
        return $result;
        
    }

    
    


}