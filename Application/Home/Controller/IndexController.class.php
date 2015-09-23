<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends HomeController {
    
    public function index(){
        
        $Document = D('Document');
        $list_jiankang = $Document -> getList(54);
        
        $this->assign('list_jiankang',$list_jiankang);
        $this->meta_title = '首页';
        $this->display();
    }
    
    /**
     * 资讯页
     */
    public function advisory(){
        
        $Document = D('Document');
        $row = $Document->detail(35);
        
        $this->meta_title = '咨询';
        $this->assign('row',$row);
        $this->display();
    }
    
    public function introduction(){
        
        $Document = D('Document');
        $list_p = $Document->getList(59);
        $list_t = $Document->getList(58);
        
        $this->assign('list_t',$list_t);
        $this->assign('list_p',$list_p);
        $this->display();
    }
    
}