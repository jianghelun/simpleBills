<?php
namespace app\index\controller;
use think\Session;
use think\Url;
use think\Controller;
use think\Loader;
use app\index\model\Users;

class Pub extends Controller
{
    /**
     * 登录页面
     */
    public function login(){
        if ($this->request->isPost()){
            $postData = $this->request->post();
            $usersObj = Loader::model('Users');
            $userData = $usersObj->userDetail($postData['username']);
            //比对密码
            if ($postData['password'] == $userData['password']){
                unset($userData['password']);
                //写入信息
                Session::set('userData',$userData);
                $this->success('登录成功','Index/index');
            }else{
                $this->error('密码错误，请重新输入');
            }
        }
        return $this->fetch();
    }
    
    /**
     * 退出登录
     */
    public function login_out(){
        Session::delete('userData');
        $this->success('退出登录成功','login');
    }
    
}
