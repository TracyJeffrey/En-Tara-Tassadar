<?php
/**
 * Created by PhpStorm.
 * User: Kang
 * Date: 2018/01/25
 * Time: 10:16
 */

namespace app\back\validate;

use think\Validate;

class AttributeValidate extends Validate
{
    // 规则数组
    protected $rule = [
        ## 令牌校验
        '__token__' => 'require|token',
        # 自定义规则
    ];

    // 字段名称翻译
    protected $field = [
        'id' => 'ID',
        'title' => '属性',
        'attribute_group_id' => '属性组',
        'sort' => '排序',
        'create_time' => '创建时间',
        'update_time' => '修改时间',

    ];
}