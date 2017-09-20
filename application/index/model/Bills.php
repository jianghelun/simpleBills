<?php
namespace app\index\model;
use think\Model;

class Bills extends Model
{
    /**
     * 新增记账
     * @param int $user_id
     * @param int $type_id
     * @param decimal $money
     * @return 成功返回自增id
     */
    public function add($user_id,$type_id,$money){
        $data = [
            'user_id'=>$user_id,
            'type_id'=>$type_id,
            'money'=>$money,
            'create_at'=>date('Y-m-d H:i:s'),
            'update_at'=>date('Y-m-d H:i:s'),
        ];
        return $this->save($data);
    }
    
    /**
     * 返回账单列表 非管理员只能查看非管理员账单
     * @param int $user_id
     * @return mixed
     */
    public function billsList($user_id){
        if ($user_id == 1){
            $where = 1;
        }elseif ($user_id != 1){
            $where['b.id'] = ['>',1];
        }
        $res = $this->field('a.user_id,a.type_id,a.create_at,b.nickname,a.money,c.typename')->alias('a')->force('PRIMARY')->join('__USERS__ b','a.user_id = b.id')->join('__CATEGORY__ c','a.type_id = c.id')->where($where)->order('a.id desc')->paginate(10);
//         echo $this->getLastSql();exit;
        return $res;
    }
    
    /**
     * 账单数据统计
     * @return unknown
     */
    public function billsSum(){
        $data['money'] = $this->where(['id'=>['>',0]])->sum('money');//总收入
        $data['addSum'] = $this->where(['id'=>['>',0],'money'=>['>',0]])->sum('money');//收入
        $data['subSum'] = $this->where(['id'=>['>',0],'money'=>['<',0]])->sum('money');//支出
        return $data;
    }
    
}
