<?php
/**
 * Created by PhpStorm.
 * User: LiXiang
 * Date: 2018/2/27
 * Time: 16:05
 */

namespace app\api\model;
use think\Model;
use traits\model\SoftDelete;

class Product extends Model
{
    use SoftDelete;

}