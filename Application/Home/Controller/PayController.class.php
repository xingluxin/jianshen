<?php
namespace Home\Controller;
use Think\Controller;
use User\Api\UserApi;
use Org\Pay\UnionPay;
use Org\Pay\AliPay;
class PayController extends HomeController {
    
    public function index(){
        
        
    }
    
    /**
     * 我的钱包
     */
    public function wallet(){
        
        $uid = is_login(); 
        
        $this->meta_title = '我的钱包';
        $this->display();
    }
    
    /**
     * 充值&提现记录
     * @param $cat 分类，1充值记录，2取现记录
     */
    public function getList(){
        
        $cat = I('cat');
        
        $map['uid'] = is_login();
        if($cat==1){    //充值
            $map['pay_item'] = "recharge";  
            $model = 'Pay';
            $this->meta_title = '充值记录';
            
        }
        if($cat==2){    //提现
            
            $model = 'Excharge';
            $this->meta_title = '提现记录';
        }
        
        
        /** 调用HOME控制器中的lists方法获取集合与分页**/
        $list = $this->lists($model,$map,'create_time DESC');
        $count = M('Pay')->where($map)->count();    
        
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('list');
        
    }
    
    /**
     * 充值方法
     */
    public function recharge(){
        
        if(IS_POST){
            
            $Pay = D('pay');
            $result = $Pay->creatPay();   //创建订单
            
            if($result!==false){
                $this->redirect('Pay/select',array('site_order'=>$result)); //返回订单编号，并传入选择付款方式页面
            }else{
                $this->error('创建订单失败，请稍后重试');
            }
        }
        
        $this->meta_title = '充值';
        $this->display();
    }
    
    /**
     * 取现方法
     */
    public function excharge(){
        
        if(IS_POST){
            
            $Excharge = D('Excharge');
            $result = $Excharge->createExcharge();
            if($result){
                $this->success('申请成功',U('Pay/getList',array('cat'=>2)));
            }else{
                $this->error($Excharge->getError());
            }
            
        }
        
        $this->meta_title = '提现';
        $this->display();
    }
    
    /**
     * 选择付款方式
     */
    public function select(){
        
        $Pay = D('pay');
        
        if(IS_POST){
        
            $Pay = D('pay');
            $pay_mode = I('post.pay_mode');
            $site_order = I('post.site_order');
            $result = $Pay->updatePayModel($pay_mode,$site_order);  //更新订单中的付款方式
            /*根据付款方式执行不同方法*/
            if($result){
                switch ($pay_mode){
                    case 'unionPay':
                        $this->unionpay($site_order);
                        break;
                    case 'aliPay':
                        $this->aliPay($site_order);
                        break;
                    default:
                        $this->error('付款方式选择错误');
                        break;
                }     
                           
              
            }else{
                $this->error($Pay->getError());
            }
        
        }else{
            
            $row = $Pay->getInfo(I('get.site_order'));
            $this->assign('row',$row);          
        }
        
        $this->meta_title = '选择付款方式';
        $this->display();
        
    }
    
    public function unionPay($site_order=0){
        
            $Pay = D('pay');
            $row = $Pay->getInfo($site_order);
            $Uniopay = new UnionPay(); //实例化银联支付操作类
            $Uniopay->txnAmt = $row['pay_money'];   //交易金额，必填
            $Uniopay->orderId = $row['site_order']; //订单号，选填
            $Uniopay->pay();
    
    }
    
    
    public function aliPay($site_order){
    
        $Pay = D('pay');
        $row = $Pay->getInfo($site_order);
        
        $title = C('PAY_RECHARGE_TITLE');
        $body = C('PAY_RECHARGE_BODY');
        
    
        $notify_url = "http://127.0.0.1/jianshen/Home/PayBack/AliPayBack";
        $return_url = "http://127.0.0.1/jianshen/Home/PayBack/AliPayBack";
    
    
    
        $Alipay = new AliPay(); //实例化银联支付操作类
        $Alipay->WIDout_trade_no = $row['site_order'];    //订单号
        $Alipay->total_fee = $row['pay_money'];     //订单金额
        $Alipay->subject = $title;     //订单标题
        $Alipay->body = $body;     //订单描述
        $Alipay->show_url = "http://127.0.0.1";     //商品展示地址
        $this->notify_url = $notify_url;
        $this->return_url = $return_url;
        
        $Alipay->pay();
    }
    
    
    
    
}