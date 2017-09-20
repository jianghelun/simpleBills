<?php
namespace app\index\controller;
use think\Session;
use think\Url;
use think\Controller;
use think\View;
use think\Config;
use think\Request;
use think\response\Redirect;
use think\Loader;

class Check extends Controller
{
    
    /**
     * @var View 视图类实例
     */
    protected $view;
    /**
     * @var Request Request实例
     */
    protected $request;
    
    protected $userData;
    
    public function __construct(){
        
        if (null === $this->view) {
            $this->view    = View::instance(Config::get('template'), Config::get('view_replace_str'));
        }
        
        if (null === $this->request) {
            $this->request = Request::instance();
        }
        
        
        //登录检测代码
        if (!Session::get('userData')){
            $this->error('请登录账号','Pub/login');exit;
            $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6b66b317c7f9f618&redirect_uri=".$param['redirect_uri']."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
            header("Location: {$url}");exit;
        }else {
            $this->userData = Session::get('userData');
        }
    }
    
}
