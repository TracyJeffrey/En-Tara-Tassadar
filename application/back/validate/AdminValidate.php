<?php
/**
 * Created by PhpStorm.
 * User: Kang
 * Date: 2018/01/17
 * Time: 10:24
 */

namespace app\back\validate;

use think\Validate;

class AdminValidate extends Validate
{
    // 规则数组
    protected $rule = [
        ## 令牌校验
        '__token__' => 'require|token',
        'password' => 'require',
        'password_confirm' => 'require|confirm:password'
        # 自定义规则
    ];

    //自定义错误提示
    protected $message = [
      'password_confirm.confirm' => '两次密码输入不一致',
    ];

    // 字段名称翻译
    protected $field = [
        'id' => 'ID',
        'username' => '用户名',
        'password' => '密码',
        'sort' => '排序',
        'create_time' => '创建时间',
        'update_time' => '修改时间',

    ];

    protected $scene = [
        'update' => ['__TOKEN__'],
        'setPassword' => ['__token__', 'password', 'password_confirm'],
    ];
}