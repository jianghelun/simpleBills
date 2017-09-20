<?php
namespace app\index\model;
use think\Model;

class Users extends Model
{
    /**
     * 查找用户信息
     */
    public function userDetail($username){
        $where['username'] = $username;
        return $this->where($where)->find();
    }
    
}
