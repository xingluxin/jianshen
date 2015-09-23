<?php
namespace Home\Controller;
use Think\Controller;
class DocumentController extends HomeController {
    
   /**
    * 文章列表
    */ 
    public function index(){
        
        $map['status'] = 1;
        $map['category_id'] = I('cate_id'); 
        
        /** 调用HOME控制器中的lists方法获取集合与分页**/
        $list = $this->lists('Document',$map,'create_time DESC');
        $this->assign('list',$list);
        $this->display();
    }
    
    
    /**
     * 文章详情前置方法
     */
    public function _before_detail(){
        
        /** 判断是否禁止访问  **/
        if(!checkStaus('Document',I('id'))){
            $this->error('禁止访问');
        }
        
        /** 增加点击量 **/
        addHits('Document',I('id'));
        
    }
    
    /**
     * 文章详情
     */
    public function detail(){
        
        $Document = D('Document');
        $row = $Document->detail(I('id'));
        
        $this->assign('row',$row);
        $this->meta_title = $row['title'];
        $this->display();
    }
    
}