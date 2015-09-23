<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: huajie <banhuajie@163.com>
// +----------------------------------------------------------------------

namespace Admin\Model;
use Think\Model;
use Admin\Model\AuthGroupModel;

/**
 * 文档基础模型
 */
class DocumentModel extends Model{

    /* 自动验证规则 */
    protected $_validate = array(
        array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('title', '1,80', '标题长度不能超过80个字符', self::MUST_VALIDATE, 'length', self::MODEL_BOTH),
        array('description', '1,140', '简介长度不能超过140个字符', self::VALUE_VALIDATE, 'length', self::MODEL_BOTH),
        array('category_id', 'require', '分类不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
        array('category_id', 'require', '分类不能为空', self::EXISTS_VALIDATE , 'regex', self::MODEL_UPDATE),
    );

    /* 自动完成规则 */
    protected $_auto = array(
        array('uid', 'is_login', self::MODEL_INSERT, 'function'),
        array('title', 'htmlspecialchars', self::MODEL_BOTH, 'function'),
        array('description', 'htmlspecialchars', self::MODEL_BOTH, 'function'),
        array('hits', 'getHits', self::MODEL_INSERT,'callback'),
        array('create_time', 'getCreateTime', self::MODEL_BOTH,'callback'),
        array('update_time', 'getCreateTime', self::MODEL_BOTH,'callback'),
    );

    /**
     * 获取详情页数据
     * @param  integer $id 文档ID
     * @return array       详细数据
     */
    public function detail($id){
        /* 获取基础数据 */
        $info = $this->field(true)->find($id);
        if(!(is_array($info) || 1 !== $info['status'])){
            $this->error = '文档被禁用或已删除！';
            return false;
        }
        
        return $info;
    }
    
    public function getList(){
        
    }

    /**
     * 新增或更新一个文档
     * @param array  $data 手动传入的数据
     * @return boolean fasle 失败 ， int  成功 返回完整的数据
     * @author huajie <banhuajie@163.com>
     */
    public function update($data = null){
       
        /* 获取数据对象 */
        $data = $this->token(false)->create($data);
        $data['file_id'] = think_decrypt($data['file_id']);
        
        //推荐位
        if(is_array($data['position']))
        {
            $data['position'] = arr2str($data['position']);
        }
        
        //组图
        if(is_array($data['pics_id']))
        {
            $data['pics_id'] = arr2str($data['pics_id']);
        }
        
        //附件
        $data['file_id'] = think_decrypt($data['file_id']);
        
        if(empty($data)){
            return false;
        }

        /* 添加或新增基础内容 */
        if(empty($data['id'])){ //新增数据
            $id = $this->data($data)->add(); //添加基础内容
            if(!$id){
                $this->error = '新增基础内容出错！';
                return false;
            }
        } else { //更新数据
            $status = $this->data($data)->save(); //更新基础内容
            if(false === $status){
                $this->error = '更新基础内容出错！';
                return false;
            }
        }

        //内容添加或更新完成
        return $data;
    }
    
    
    /**
     * 创建时间不写则取当前时间
     * @return int 时间戳
     * @author huajie <banhuajie@163.com>
     */
    protected function getHits(){
        $hits    =   I('post.hits');
        return $hits==null?"0":$hits;
    }


    /**
     * 创建时间不写则取当前时间
     * @return int 时间戳
     * @author huajie <banhuajie@163.com>
     */
    protected function getCreateTime(){
        $create_time    =   I('post.create_time');
        return $create_time?strtotime($create_time):NOW_TIME;
    }




    /**
     * 生成推荐位的值
     * @return number 推荐位
     * @author huajie <banhuajie@163.com>
     */
    protected function getPosition(){
        $position = I('post.position');
        if(!is_array($position)){
            return 0;
        }else{
            $pos = 0;
            foreach ($position as $key=>$value){
                $pos += $value;		//将各个推荐位的值相加
            }
            return $pos;
        }
    }


    /**
     * 删除状态为-1的数据（包含扩展模型）
     * @return true 删除成功， false 删除失败
     * @author huajie <banhuajie@163.com>
     */
    public function remove(){
        //查询假删除的基础数据
        $res = $this->where('status = -1')->delete();

        return $res;
    }

    /**
     * 获取链接id
     * @return int 链接对应的id
     * @author huajie <banhuajie@163.com>
     */
    protected function getLink(){
        $link = I('post.link_id');
        if(empty($link)){
            return 0;
        } else if(is_numeric($link)){
            return $link;
        }
        $res = D('Url')->update(array('url'=>$link));
        return $res['id'];
    }

    /**
     * 保存为草稿
     * @return array 完整的数据， false 保存出错
     * @author huajie <banhuajie@163.com>
     */
    public function autoSave(){
        $post = I('post.');

        /* 检查文档类型是否符合要求 */
        $res = $this->checkDocumentType( I('type',2), I('pid') );
        if(!$res['status']){
            $this->error = $res['info'];
            return false;
        }

        //触发自动保存的字段
        $save_list = array('name','title','description','position','link_id','cover_id','deadline','create_time','content');
        foreach ($save_list as $value){
            if(!empty($post[$value])){
                $if_save = true;
                break;
            }
        }

        if(!$if_save){
            $this->error = '您未填写任何内容';
            return false;
        }

        //重置自动验证
        $this->_validate = array(
            array('name', '/^[a-zA-Z]\w{0,39}$/', '文档标识不合法', self::VALUE_VALIDATE, 'regex', self::MODEL_BOTH),
            array('name', '', '标识已经存在', self::VALUE_VALIDATE, 'unique', self::MODEL_BOTH),
            array('title', '1,80', '标题长度不能超过80个字符', self::VALUE_VALIDATE, 'length', self::MODEL_BOTH),
            array('description', '1,140', '简介长度不能超过140个字符', self::VALUE_VALIDATE, 'length', self::MODEL_BOTH),
            array('category_id', 'require', '分类不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
            array('category_id', 'check_category', '该分类不允许发布内容', self::EXISTS_VALIDATE , 'function', self::MODEL_UPDATE),
            array('category_id,type', 'check_category', '内容类型不正确', self::MUST_VALIDATE, 'function', self::MODEL_INSERT),
            array('model_id,pid,category_id', 'check_catgory_model', '该分类没有绑定当前模型', self::MUST_VALIDATE , 'function', self::MODEL_INSERT),
            array('deadline', '/^\d{4,4}-\d{1,2}-\d{1,2}(\s\d{1,2}:\d{1,2}(:\d{1,2})?)?$/', '日期格式不合法,请使用"年-月-日 时:分"格式,全部为数字', self::VALUE_VALIDATE  , 'regex', self::MODEL_BOTH),
            array('create_time', '/^\d{4,4}-\d{1,2}-\d{1,2}(\s\d{1,2}:\d{1,2}(:\d{1,2})?)?$/', '日期格式不合法,请使用"年-月-日 时:分"格式,全部为数字', self::VALUE_VALIDATE  , 'regex', self::MODEL_BOTH),
        );
        $this->_auto[] = array('status', '3', self::MODEL_BOTH);

        if(!($data = $this->create())){
            return false;
        }

        /* 添加或新增基础内容 */
        if(empty($data['id'])){ //新增数据
            $id = $this->add(); //添加基础内容
            if(!$id){
                $this->error = '新增基础内容出错！';
                return false;
            }
            $data['id'] = $id;
        } else { //更新数据
            $status = $this->save(); //更新基础内容
            if(false === $status){
                $this->error = '更新基础内容出错！';
                return false;
            }
        }

        /* 添加或新增扩展内容 */
        $logic = $this->logic($data['model_id']);
        if(!$logic->autoSave($id)){
            if(isset($id)){ //新增失败，删除基础数据
                $this->delete($id);
            }
            $this->error = $logic->getError();
            return false;
        }

        //内容添加或更新完成
        return $data;
    }
    
    


}