<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
// 定义index模块的自动生成
    'home' => [
        '__dir__' => ['behavior', 'controller', 'model', 'view','widget'],
        'controller' => ['Index', 'Test'],
        'model' => [],
        'view' => ['index/index','list/index','about/index','index/map'],
    ],
    'admin' => [
        '__dir__' => ['behavior', 'controller', 'model', 'view','widget'],
        'controller' => ['Index', 'Test', ],
        'model' => [],
        'view' => ['index/index'],
    ],
    'common' => [
        '__dir__' => ['behavior', 'controller', 'model', 'view','widget'],
        'controller' => ['Index', 'Test', ],
        'model' => [],
        'view' => ['index/index'],
    ],
];