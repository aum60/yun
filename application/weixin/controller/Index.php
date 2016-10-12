<?php
namespace app\weixin\controller;

use think\Controller;

class Index extends Controller
{

	//api接口
	public function api()
    {
		$wechatObj = new Api();
		$wechatObj->valid();
		
		exit;
		return $this->fetch();
    }
}
