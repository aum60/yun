<?php
namespace app\index\controller;
use app\index\model\User as M;

class User extends Base
{
    public function getUserInfo(){

        $user = new M();
        $datas = $user->getAllUser();
        return $datas;
    }
}