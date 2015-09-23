<?php

namespace Admin\Controller;

/**
 * 支付控制器
 * @author lussen <lussen@xingluxin.cn>
 */
class PayController extends AdminController {

    /**
     * 充值列表
     */
    public function recharge(){
        
        
        if(isset($_GET['status'])){
          if(I('get.status')==1){
              $map['isdone'] = 1;
          }else{
              $map['isdone'] = 0;
          }
        }
        if ( isset($_GET['keyword']) ) {
            $map['pay_order']= array('like',array("%".I('get.keyword')."%"));
        }
        if ( isset($_GET['time-start']) ) {
            $map['create_time'][] = array('egt',strtotime(I('time-start')));
        }
        if ( isset($_GET['time-end']) ) {
            $map['create_time'][] = array('elt',24*60*60 + strtotime(I('time-end')));
        }
        if ( isset($_GET['username']) ) {
            $map['uid'] = M('Member')->where(array('username'=>I('username')))->getField('uid');
        }
        
        
        $list = $this->lists('Pay', $map,'create_time DESC');
        $this->assign('_list', $list);
        
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->meta_title = '充值列表';
        $this->display();
    }
    
    /**
     *提现列表
     */
    public function excharge(){
        
        if(isset($_GET['status'])){
            $map['status'] = I('get.status');
        }
        if ( isset($_GET['keyword']) ) {
            $map['pay_order']= array('like',array("%".I('get.keyword')."%"));
        }
        if ( isset($_GET['time-start']) ) {
            $map['create_time'][] = array('egt',strtotime(I('time-start')));
        }
        if ( isset($_GET['time-end']) ) {
            $map['create_time'][] = array('elt',24*60*60 + strtotime(I('time-end')));
        }
        if ( isset($_GET['username']) ) {
            $map['uid'] = M('Member')->where(array('username'=>I('username')))->getField('uid');
        }
        
        
        $list = $this->lists('Excharge', $map,'create_time DESC');
        $this->assign('_list', $list);
        
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->meta_title = '提现列表';
        $this->display();
    }
    
    /**
     * 提现详情
     */
    public function excharge_show(){
        
        if(IS_POST){
            $Excharge = D('Excharge');
            $result = $Excharge->setStatus();
            if($result){
                $this->success('更新成功',Cookie('__forward__'));
            }else{
                $this->error($Excharge->getError());
            }
            
        }else{
            $Excharge = D('Excharge');
            $row = $Excharge -> getInfo(I('id'));
            $this->assign('row',$row);
        }
        
        
        
        $this->meta_title = '提现列表';
        $this->display();
    }
    
    /**
     * 设置一条或者多条数据的状态
     * @author lussen <lussen@xingluxin.cn>
     */
    public function setStatus($model='Pay'){
        
        return parent::setStatus($model);
    }
    
}
