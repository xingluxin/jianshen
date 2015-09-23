<?php

/**
 * 检测验证码
 * @param  integer $id 验证码ID
 * @return boolean     检测结果
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function check_verify($code, $id = 2){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}


/**
 * 获取用户余额
 * @param  $uid 用户ID
 * @return 用户余额
 */
function getMoney($uid){
    
    $Wallet = D('Wallet');
    $money = $Wallet->getMoney($uid);
    return $money;
}

/**
 * 
 * @param  $model 所在模型
 * @param  $id 文章ID
 * @return boolean
 */
function checkStaus($model,$id){
    
    $map['id'] = $id;
    $row = M($model)->where($where)->find();
    if($row['status']==='1'){
        return true;
    }else{
        return false;
    }
    
}

/**
 * 获取点击量
 * @param string $model 所在模型
 * @param int $id 文章ID
 * @return boolean
 */
function addHits($model,$id){
    
    $map['id'] = $id;
    $result = M($model)->where($map)->setInc('hits');
    if($result !== false ){
        return true;
    }else{
        return false;
    }
}

function getCateName($cate_id){
    
    $map['category_id'] = $cate_id;
    $row = M('category')->field('title')->find($cate_id);
    return $row['title'];
    
}

