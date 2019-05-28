<?php
/**
 * Created by PhpStorm.
 * User: LiXiang
 * Date: 2018/01/17
 * Time: 10:24
 */

namespace app\back\model;

use think\Model;

class Admin extends Model
{
    // 自动完成
    protected $insert = ['password'];

    /**
     * 密码加密自动完成
     */
    protected function setPasswordAttr($value){
        return md5($value);
    }
}
