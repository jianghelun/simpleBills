<?php
namespace app\index\controller;
use think\Loader;
use think\Session;

class Index extends Check
{
    /**
     * 首页
     * @return string
     */
    public function index()
    {
        $categoryObj = Loader::model('Category');
        $categoryList = $categoryObj->categoryList();
        $this->view->assign('categoryList',$categoryList);
        return $this->view->fetch();
    }
    
    /**
     * 新增记账
     */
    public function add(){
        $postData = $this->request->post();
        $billsObj = Loader::model('Bills');
        $userData = Session::get('userData');
        $res = $billsObj->add($userData->id,$postData['type_id'],$postData['money']);
        if ($res){
            $this->success('账单添加成功');
        }else{
            $this->error('账单添加失败');
        }
    }
    
    /**
     * 用户记账列表
     */
    public function bills_list(){
        $billsObj = Loader::model('Bills');
        $billsList = $billsObj->billsList($this->userData['id']);
        if ($this->userData['id'] == 1){
            $sumData = $billsObj->billsSum();
            $this->view->assign('sumData',$sumData);
        }
//         var_dump($billsList);exit;
        $this->view->assign('list',$billsList);
        return $this->view->fetch();
    }
}
