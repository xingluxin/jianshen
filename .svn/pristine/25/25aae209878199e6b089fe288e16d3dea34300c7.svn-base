<?php
namespace Admin\Controller;
use Think\Controller;
use Org\File;
class IndexController extends AdminController {
    
    /**
     * 后台首页
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index(){
        
        $info['user']		=	M('Member')->count();
        $info['document']	=	M('Document')->count();
        $info['category']	=	M('Category')->count();
        $this->assign('info',$info);
        
        $this->meta_title = '管理首页';
        $this->display();
    }
    
    /**
     * 清除缓存
     * @author jry <598821125@qq.com>
     */
    public function rmdirr($dirname = RUNTIME_PATH){
        $file = new File();
        $result = $file->del_dir($dirname);
        if($result){
            $this->success("缓存清理成功");
        }else{
            $this->error("缓存清理失败");
        }
    }
    
}