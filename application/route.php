<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/
use think\Route;
# api 接口

Route::get('member-info', 'api/member/info');
Route::post('member-add', 'api/member/add');

Route::get('regions', 'api/region/list');

# 会员

Route::rule('html/register', 'index/member/register', 'GET|POST');
Route::rule('html/login', 'index/member/login', 'GET|POST');
Route::post('html/logout', 'index/member/logout');
Route::post('html/checkout', 'index/member/checkout');

