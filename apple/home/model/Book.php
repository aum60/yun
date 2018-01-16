<?php
/**
 * Created by PhpStorm.
 * User: Tenger
 * Date: 2018/1/9
 * Time: 22:05
 */

namespace app\home\model;
use think\Db;

class Book {

    public function booklist(){
        $datas = $this->getgoods();

        $result = [];

        foreach($datas as $key => $val){
            $result[$key]['price'] = $val['shopPrice'];
            $result[$key]['name'] = $val['goodsName'];

            //替换img中的相对路径为绝对路径
            $result[$key]['desc'] = preg_replace('#<img(.+?)src="([^"]+?)"([^>]*?)>#',"<img$1src=\"http://n.cn$2\"$3>",$val['goodsDesc']);
            ;

            $result[$key]['time'] = $val['createTime'];
        }


        return $result;
    }

    public function getgoods(){
        return Db::name('goods')->limit(15)->select();
    }
}