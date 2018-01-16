<?php
/**
 * Created by PhpStorm.
 * User: Tenger
 * Date: 2018/1/11
 * Time: 17:32
 */

namespace app\index\model;
use think\Model;
use think\Db;

class Base extends Model{
    /**
     * 获取空模型
     */
    public function getEModel($tables){
        $rs =  Db::query('show columns FROM `'.config('database.prefix').$tables."`");
        $obj = [];
        if($rs){
            foreach($rs as $key => $v) {
                $obj[$v['Field']] = $v['Default'];
                if($v['Key'] == 'PRI')$obj[$v['Field']] = 0;
            }
        }
        return $obj;
    }
}