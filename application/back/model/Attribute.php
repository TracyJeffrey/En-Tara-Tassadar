<?php
/**
 * Created by PhpStorm.
 * User: LiXiang
 * Date: 2018/01/25
 * Time: 10:16
 */

namespace app\back\model;

use think\Model;

class Attribute extends Model
{
    //
    /**
     * 获取对应的属性分组
     */
    public function attributeGroup()
    {
        // 多个属性属于一个属性分组，M：1的关系
        return $this->belongsTo('AttributeGroup');
    }
}
