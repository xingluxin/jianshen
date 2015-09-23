<?php
//后台支付成功回调页
namespace Home\Controller;
use Think\Controller;
import("secureUtil",dirname(__FILE__),".php");
class PayBackController extends Controller {
    
    //银联支付成功回调方法
    public function UnionPayBack(){

        $Uniopay = new \Org\Pay\UnionPay(); //实例化银联支付操作类
        if($Uniopay->Check($_POST)){    //验证
            echo "成功";
        }else{
            echo "失败";
        }
    }
    
    public function AliPayBack(){
        
        $Alipay = new \Org\Pay\AliPay(); //实例化支付宝操作类
        if($Alipay->Check($_GET)){    //验证
            
            $site_order = I('get.out_trade_no'); //站内订单ID
            $pay_order = I('get.trade_no');     //支付宝订单号
            $moeny = I('get.total_fee');        //实际支付金额
           
            
            $Pay = D('Pay');
            $row = $Pay->getInfo($site_order,false);
            $uid = $row['uid'];                 //支付用户ID
            
            $isdone = $row['isdone'];
            
            if($isdone=='1'){
                exit;
            }
            
            
            if($row['pay_money']!=$moeny){
                //当实际支付金额与数据库总金额不符时，执行退款方法，该笔订单取消
                //功能暂无
            
            }
            
            $this->finishPay($pay_order, $site_order);  //完成数据库中订单状态
            
            if($result){
                //数据库是否更新成功，不成功则执行退款操作
                //功能暂无
            
            }
            
            /** 判断操作类型，执行相关操作 */
             
            if($row['pay_item']=='recharge'){    //充值功能
                 
                 
                $Wallet = D('Wallet');
                $Wallet->addMoney($moeny,$uid);
                 
            }

           
            
            
            echo "成功";
        }else{
            
            echo "失败";
        }
        
    }
    
    
    
    public function finishPay($pay_order,$site_order){
        
        $Pay = D('Pay');
        $result = $Pay->finishPay($pay_order,$site_order); //更改该笔订单在数据库中的状态
        
    }
    
    public function creatKey($length){
        
        $key = MD5(time()+rand());
       
        return strtoupper(substr($key,8,16));
    }
    
   
}