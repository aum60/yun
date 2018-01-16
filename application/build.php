<?php

return [
    /** 生成应用公共文件**/
    '__file__' => ['common.php'],

    /**  定义demo模块的自动生成 （按照实际定义的文件名生成）**/

    'index'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
        'controller' => ['Index', 'Test', 'User','Message'],
        'model'      => ['User', 'Message'],
        'view'       => ['index/index','index/message','index/user'],
    ],

    /** 其他更多的模块定义**/
];
