<?php
namespace app\index\controller;
use app\index\controller\User as User_CON;
use app\index\controller\Message as Mes_CON;
use app\index\model\Message;

class Index extends Base
{
    public function index()
    {
        $user = new User_CON();
        $u_datas = $user->getUserInfo();
        $message = new Mes_CON();
        $m_datas = $message->getMessageInfo();

        dump($u_datas);
        dump($m_datas);
    }
}
