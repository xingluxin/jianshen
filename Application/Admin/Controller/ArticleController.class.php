<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends AdminController {
    
    private $cate_id        =   null; //文档分类id
    
    /**
     * 内容首页
     */
    public function index($cate_id = null, $model_id = null, $position = null,$group_id=null){
        
        $this->getMenu();
        
        if($cate_id===null){
            $cate_id = $this->cate_id;
        }
        $this->meta_title = '管理首页';
        
        if(isset($_GET['cate_id'])){
            $map['category_id']    =   I('cate_id');
        }
        
        if(isset($_GET['title'])){
            $map['title']  = array('like', '%'.(string)I('title').'%');
        }
        if(isset($_GET['status'])){
             $map['status']    =   array(array('eq',1),array('eq',0),'or');
        }else{
            $status = null;
            $map['status'] = array('in', '0,1,2');
        }
        if ( isset($_GET['time-start']) ) {
            $map['update_time'][] = array('egt',strtotime(I('time-start')));
        }
        if ( isset($_GET['time-end']) ) {
            $map['update_time'][] = array('elt',24*60*60 + strtotime(I('time-end')));
        }
        if ( isset($_GET['nickname']) ) {
            $map['uid'] = M('Member')->where(array('nickname'=>I('nickname')))->getField('uid');
        }
        
       
        
        $position = I('position');
        if(I('position')!=""){
            $map['position']    =   array('LIKE','%'.$position.'%');
        }
       
        $list = $this->lists('Document', $map,'orderid DESC,update_time DESC','category_id,id,title,update_time,hits,status');
        $this->assign('_list', $list);
       
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->assign('position',$position);
        $this->display();
    }
    
    public function add(){
        //获取左边菜单
        $this->getMenu();
        
        $position = C('DOCUMENT_POSITION');
        $this->assign('position',$position);
        
        
        $this->meta_title = '新增';
        $this->display();
    }
    
    /**
     * 文档编辑页面初始化
     * @author huajie <banhuajie@163.com>
     */
    public function edit(){
        //获取左边菜单
        $this->getMenu();
        
        $position = C('DOCUMENT_POSITION');
        $this->assign('position',$position);
        
        $id     =   I('get.id','');
        if(empty($id)){
            $this->error('参数不能为空！');
        }
    
        // 获取详细数据
        $Document = D('Document');
        $data = $Document->detail($id);
        if(!$data){
            $this->error($Document->getError());
        }
    
        if($data['pid']){
            // 获取上级文档
            $article        =   $Document->field('id,title,type')->find($data['pid']);
            $this->assign('article',$article);
        }
        
        $this->assign('data', $data);
        $this->meta_title   =   '编辑文档';
        $this->display();
    }
    
    
    /**
     * 更新一条数据
     * @author huajie <banhuajie@163.com>
     */
    public function update(){
        $document   =   D('Document');
        $res = $document->update();
        if(!$res){
            $this->error($document->getError());
        }else{
            $this->success($res['id']?'更新成功':'新增成功', Cookie('__forward__'));
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
    
    /**
     * 设置一条或者多条数据的状态
     * @author huajie <banhuajie@163.com>
     */
    public function setStatus($model='Document'){
        return parent::setStatus('Document');
    }
    
    /**
     * 回收站列表
     * @author huajie <banhuajie@163.com>
     */
    public function recycle(){
        //获取左边菜单
        $this->getMenu();
    
        $map['status']  =   -1;
        
        $list = $this->lists(M('Document'),$map,'update_time desc');
    
        //处理列表数据
        if(is_array($list)){
            foreach ($list as $k=>&$v){
                $v['username']      =   get_nickname($v['uid']);
            }
        }
    
        $this->assign('list', $list);
        $this->meta_title       =   '回收站';
        $this->display();
    }
    
    /**
     * 还原被删除的数据
     * @author huajie <banhuajie@163.com>
     */
    public function permit(){
        /*参数过滤*/
        $ids = I('param.ids');
        if(empty($ids)){
            $this->error('请选择要操作的数据');
        }
    
        /*拼接参数并修改状态*/
        $Model  =   'Document';
        $map    =   array();
        if(is_array($ids)){
            $map['id'] = array('in', $ids);
        }elseif (is_numeric($ids)){
            $map['id'] = $ids;
        }
        $this->restore($Model,$map);
    }
    
    /**
     * 清空回收站
     * @author huajie <banhuajie@163.com>
     */
    public function clear(){
        $res = D('Document')->remove();
        if($res !== false){
            $this->success('清空回收站成功！');
        }else{
            $this->error('清空回收站失败！');
        }
    }
    
    /**
     * 移动文档
     * @author huajie <banhuajie@163.com>
     */
    public function move() {
        if(empty($_POST['ids'])) {
            $this->error('请选择要移动的文档！');
        }
        session('moveArticle', $_POST['ids']);
        session('copyArticle', null);
        $this->success('请选择要移动到的分类！');
    }
    
    /**
     * 拷贝文档
     * @author huajie <banhuajie@163.com>
     */
    public function copy() {
        if(empty($_POST['ids'])) {
            $this->error('请选择要复制的文档！');
        }
        session('copyArticle', $_POST['ids']);
        session('moveArticle', null);
        $this->success('请选择要复制到的分类！');
    }
    
    /**
     * 粘贴文档
     * @author huajie <banhuajie@163.com>
     */
    public function paste() {
        $moveList = session('moveArticle');
        $copyList = session('copyArticle');
        if(empty($moveList) && empty($copyList)) {
            $this->error('没有选择文档！');
        }
        if(!isset($_POST['cate_id'])) {
            $this->error('请选择要粘贴到的分类！');
        }
        $cate_id = I('post.cate_id');   //当前分类
        $pid = I('post.pid', 0);        //当前父类数据id
    
        if(!empty($moveList)) {// 移动    TODO:检查name重复
            foreach ($moveList as $key=>$value){
                $Model              =   M('Document');
                $map['id']          =   $value;
                $data['category_id']=   $cate_id;
                $data['pid']        =   $pid;
                //获取root
                if($pid == 0){
                    $data['root'] = 0;
                }else{
                    $p_root = $Model->getFieldById($pid, 'root');
                    $data['root'] = $p_root == 0 ? $pid : $p_root;
                }
                $res = $Model->where($map)->save($data);
            }
            session('moveArticle', null);
            if(false !== $res){
                $this->success('文档移动成功！');
            }else{
                $this->error('文档移动失败！');
            }
        }elseif(!empty($copyList)){ // 复制
            foreach ($copyList as $key=>$value){
                $Model  =   M('Document');
                $data   =   $Model->find($value);
                unset($data['id']);
                unset($data['name']);
                $data['category_id']    =   $cate_id;
                $data['pid']            =   $pid;
                $data['create_time']    =   NOW_TIME;
                $data['update_time']    =   NOW_TIME;
                //获取root
                if($pid == 0){
                    $data['root'] = 0;
                }else{
                    $p_root = $Model->getFieldById($pid, 'root');
                    $data['root'] = $p_root == 0 ? $pid : $p_root;
                }
    
                $result   =  $Model->add($data);
                
            }
            session('copyArticle', null);
            if($result){
                $this->success('文档复制成功！');
            }else{
                $this->error('文档复制失败！');
            }
        }
    }
   
    /**
     * 文档排序
     * @author huajie <banhuajie@163.com>
     */
    public function sort(){
        if(IS_GET){
            //获取左边菜单
            $this->getMenu();
    
            $ids        =   I('get.ids');
            $cate_id    =   I('get.cate_id');
            $pid        =   I('get.pid');
    
            //获取排序的数据
            $map['status'] = array('gt',-1);
            if(!empty($ids)){
                $map['id'] = array('in',$ids);
            }else{
                if($cate_id !== ''){
                    $map['category_id'] = $cate_id;
                }
                if($pid !== ''){
                    $map['pid'] = $pid;
                }
            }
            $list = M('Document')->where($map)->field('id,title')->order('orderid DESC,id DESC')->select();
    
            $this->assign('list', $list);
            $this->meta_title = '文档排序';
            $this->display();
        }elseif (IS_POST){
            $ids = I('post.ids');
            $ids = array_reverse(explode(',', $ids));
            foreach ($ids as $key=>$value){
                $res = M('Document')->where(array('id'=>$value))->setField('orderid', $key+1);
            }
            if($res !== false){
                $this->success('排序成功！');
            }else{
                $this->error('排序失败！');
            }
        }else{
            $this->error('非法请求！');
        }
    }
    
    
    
}