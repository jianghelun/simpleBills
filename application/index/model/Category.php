<?php
namespace app\index\model;
use think\Model;

class Category extends Model
{
    
    /**
     * 返回所有分类
     * @return unknown
     */
    public function categoryList(){
        return $this->select();
    }
    
}
