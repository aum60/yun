<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $names = "赵,w,孙,w,w,吴,w,王,w,陈,w,周,w,沈,w,杨,朱,秦,w,许,何,吕,w,张,孔,w,李,w,金,w,陶,姜,w,韩,郑";

        $arr = explode(',', $names);
        shuffle($arr);
        $arr = array_slice($arr, 1, 20);

        foreach($arr as $key => $val){
            if($val === 'w'){
                $arr[$key] = '<li><span>欢迎</span><span class="name">w**</span><span>加入德道国际!</span></li>';
            }else{
                $arr[$key] = '<li><span>恭喜</span><span class="name">'. $val .'**</span><span>成为正式会员</span></li>';
            }
        }

        $this->assign('list',$arr);

		return $this->fetch();
    }

}
