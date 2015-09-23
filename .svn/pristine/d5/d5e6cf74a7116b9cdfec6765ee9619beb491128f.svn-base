<?php
namespace Admin\Controller;
use Think\Controller;
class FeedBackController extends AdminController {
    
    public function index(){
        
        $this->getMenu();
        
        if( isset($_GET['content'])){
            $map['content']  = array('like', '%'.(string)I('content').'%');
        }
        if ( isset($_GET['time-start']) ) {
            $map['create_time'][] = array('egt',strtotime(I('time-start')));
        }
        if ( isset($_GET['time-end']) ) {
            $map['create_time'][] = array('elt',24*60*60 + strtotime(I('time-end')));
        }
        if ( isset($_GET['nickname']) ) {
            $map['uid'] = M('Member')->where(array('nickname'=>I('nickname')))->getField('uid');
        }
        
        $list = $this->lists('FeedBack', $map,'create_time DESC');
        
        $this->assign('_list',$list);
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->meta_title = '意见反馈';
        $this->display();
    }
    
    
//     public function setStatus(){
//         $id = I('id');
//         $D = D('FeedBack');
//         $result = $D->setStatus($id);
//         if($result){
//             $this->success('修改成功',cookie('__forward__'));
//         }else{
//             $this->error($D->getError());
//         }
        
//     }

    /**
     * 设置一条或者多条数据的状态
     * @author huajie <banhuajie@163.com>
     */
    public function setStatus($model='FeedBack'){
        return parent::setStatus('FeedBack');
    }
    
    public function delInfo(){
        $id = I('id');
        $D = D('FeedBack');
        $result = $D->delInfo($id);
        if($result){
            $this->success('删除成功',cookie('__forward__'));
        }else{
            $this->error($D->getError());
        }
    }
    
    /**
     * 显示左边菜单，进行权限控制
     * @author huajie <banhuajie@163.com>
     */
    protected function getMenu(){
    
        $cate       =   M('Category')->where(array('status'=>1))->field('id,title,pid,allow_publish')->order('pid,sort')->select();
    
        $cate           =   list_to_tree($cate);    //生成分类树
    
        //获取分类id
        $cate_id        =   I('param.cate_id');
        $this->cate_id  =   $cate_id;
    
        //是否展开分类
        $hide_cate = false;
        if(ACTION_NAME != 'recycle' && ACTION_NAME != 'draftbox' && ACTION_NAME != 'mydocument'){
            $hide_cate  =   true;
        }
    
        //生成每个分类的url
        foreach ($cate as $key=>&$value){
            $value['url']   =   'Article/index?cate_id='.$value['id'];
            if($cate_id == $value['id'] && $hide_cate){
                $value['current'] = true;
            }else{
                $value['current'] = false;
            }
            if(!empty($value['_child'])){
                $is_child = false;
                foreach ($value['_child'] as $ka=>&$va){
                    $va['url']      =   'Article/index?cate_id='.$va['id'];
                    if(!empty($va['_child'])){
                        foreach ($va['_child'] as $k=>&$v){
                            $v['url']   =   'Article/index?cate_id='.$v['id'];
                            $v['pid']   =   $va['id'];
                            $is_child = $v['id'] == $cate_id ? true : false;
                        }
                    }
                    //展开子分类的父分类
                    if($va['id'] == $cate_id || $is_child){
                        $is_child = false;
                        if($hide_cate){
                            $value['current']   =   true;
                            $va['current']      =   true;
                        }else{
                            $value['current']   =   false;
                            $va['current']      =   false;
                        }
                    }else{
                        $va['current']      =   false;
                    }
                }
            }
        }
        //dump($cate);
        $this->assign('nodes',      $cate);
        $this->assign('cate_id',    $this->cate_id);
    
        //获取面包屑信息
        $nav = get_parent_category($cate_id);
        $this->assign('rightNav',   $nav);
    
    }
    
    
    
}