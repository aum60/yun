<?php
namespace app\index\controller;

use app\index\model\Message as M;

class Message extends Base
{
    public function getMessageInfo(){
        $model = new M();
        $datas = $model->getAllMessage();
        return $datas;
    }
}