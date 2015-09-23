<?php
namespace Home\Controller;
use Think\Controller;
use User\Api\UserApi;
class UserController extends HomeController {
    
    public function index(){
        
        
        $this->meta_title = '用户中心';
        $this->display();
    }
    
    /**
     * 注册方法
     */
    public function register(){
        if(!C('USER_ALLOW_REGISTER')){
            $this->error('注册已关闭');
        }
        
        if(IS_POST){
            
            $verify = I('verify');
            $username = I('username');
            $email = I('email');
            $mobile = I('mobile');
            $password = I('password');
            $repassword = I('repassword');
            
            /* 检测验证码 */
            if(!check_verify($verify)){
                $this->error('验证码输入错误！');
            }
            
            /* 检测密码 */
            if($password != $repassword){
                $this->error('密码和重复密码不一致！');
            }
            
            
            /* 调用注册接口注册用户 */
            $User = new UserApi;
            $uid = $User->register($username,$password,$email);
            if(0 < $uid){ //注册成功
                //TODO: 发送验证邮件
                $this->success('注册成功！',U('login'));
            } else { //注册失败，显示错误信息
                $this->error($this->showRegError($uid));
            }
            
        }else{
            if(is_login()){
                $this->redirect('Index/index');
            }else{
                $this->meta_title = '注册';
                $this->display();
            }
        }
    }
    
    /**
     * 登陆方法
     */
    public function login(){
        if(IS_POST){
            
            $username = I('username');
            $password = I('password');
            
            /* 调用UC登录接口登录 */
            $user = new UserApi;
            $uid = $user->login($username, $password);
            if(0 < $uid){ //UC登录成功
                /* 登录用户 */
                $Member = D('Member');
                if($Member->login($uid)){ //登录用户
                    //TODO:跳转到登录前页面
                    $this->success('登录成功！',U('Home/Index/index'));
                } else {
                    $this->error($Member->getError());
                }
            
            } else { //登录失败
                switch($uid) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                $this->error($error);
            }
            
        }else{
            if(is_login()){
                $this->redirect('Index/index');
            }else{
                $this->meta_title = '登陆';
                $this->display();
            }
        }
    }
    
    /**
     * 我的资料
     */
    public function edit(){
        
        $uid = is_login();
        $user = new UserApi;
        $Member = D('Member');
        
        if(IS_POST){
            
            /* UC信息更新 */
            $data['email'] = I('post.email');
            $data['mobile'] = I('post.mobile');
            $result_uc = $user->updateInfo2($uid,$data);
            
            /* Member表信息更新 */
            $data['truename'] = I('post.truename');
            $data['sex'] = I('post.sex');
            $data['qq'] = I('post.qq');
            $result = $Member->updateUserInfo($uid,$data);
            
            if($result&&$result_uc){
                $this->success('修改成功',U('User/index'));
            }else{
                $this->error('修改失败');
            }
            
        }else{
            
            /* 调用UC获取用户信息 */
            $info_uc = $user->info($uid);
            /* 实例化Member模型获取用户信息 */
            $info = $Member->getUserInfo($uid);
            
            $this->assign('info_uc',$info_uc);
            $this->assign('info',$info);
            
        }
        
        $this->meta_title = '我的资料';
        $this->display();
        
    }
    /**
     * 意见反馈
     */
    public function feedback(){
        
        if(IS_POST){
            $FeedBack = D('FeedBack');
            $result = $FeedBack->addInfo();
            if($result){
                $this->success('增加成功',U('User/index'));                
            }else{
                $this->error('增加失败');
            }
        }
        
        $this->meta_title = '意见反馈';
        $this->display();
    }
    
    public function show(){
        $Document = D('Document');
        $info = $Document->detail(I('id'));
        
        $this->assign('info',$info);
        $this->display();
        
    }
    
    /**
     * 获取验证码
     */
    public function verify(){
        $verify = new \Think\Verify();
        $verify->entry(2);
    }
    
    /* 退出登录 */
    public function logout(){
        if(is_login()){
            D('Member')->logout();
            $this->success('退出成功！', U('User/login'));
        } else {
            $this->redirect('User/login');
        }
    }
    
    /**
     * 获取用户注册错误信息
     * @param  integer $code 错误编码
     * @return string        错误信息
     */
    private function showRegError($code = 0){
        switch ($code) {
            case -1:  $error = '用户名长度必须在16个字符以内！'; break;
            case -2:  $error = '用户名被禁止注册！'; break;
            case -3:  $error = '用户名被占用！'; break;
            case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
            case -5:  $error = '邮箱格式不正确！'; break;
            case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
            case -7:  $error = '邮箱被禁止注册！'; break;
            case -8:  $error = '邮箱被占用！'; break;
            case -9:  $error = '手机格式不正确！'; break;
            case -10: $error = '手机被禁止注册！'; break;
            case -11: $error = '手机号被占用！'; break;
            default:  $error = '未知错误';
        }
        return $error;
    }
    
}