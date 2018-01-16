<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../apple/');

//定义配置项目录
define('CONF_PATH', APP_PATH .'common/conf/');

//定义公共方法目录
define('APP_COMM', APP_PATH .'common/common/');

//定义前端目录
define('APP_HOME_COMM', APP_PATH .'home/common/');

//定义后端目录
define('APP_ADMIN_COMM', APP_PATH .'admin/common/');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
