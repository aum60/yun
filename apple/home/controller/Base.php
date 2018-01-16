<?php
namespace app\home\controller;

use think\Controller;

class Base extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->assign("v",APPLEConf('CONF.Version')."_".APPLEConf('CONF.PCStyleId'));
    }

    protected function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        $style = APPLEConf('CONF.homeStyle')?APPLEConf('CONF.homeStyle'):'default';
        $replace['__STYLE__'] = str_replace('/index.php','',\think\Request::instance()->root()).'/apple/home/view/'.APPLEConf('CONF.homeStyle');
        return $this->view->fetch($style."/".$template, $vars, $replace, $config);
    }

    /**
     * 上传图片
     */
    public function uploadPic(){
        return APPUploadPic(0);
    }
    /**
     * 编辑器上传文件
     */
    public function editorUpload(){
        return APPEditUpload(0);
    }

    /**
     * 获取验证码
     */
    public function getVerify(){
        APPVerify();
    }
}
