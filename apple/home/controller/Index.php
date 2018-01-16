<?php
namespace app\home\controller;
use app\home\model\Book as M;

class Index extends Base
{
    /**
     * Notes:默认首页控制器
     * User: tenger
     * Date: $DATE$
     * Time: $TIME$
     * @return string
     */
    public function index()
    {
        $model = new M();
        $datas = $model->booklist();

        $this->assign('datas',$datas);

        return $this->fetch('index/index');
    }
}
