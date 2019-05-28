<?php
/**
 * Created by PhpStorm.
 * User: LiXiang
 * Date: 2018/1/20
 * Time: 17:39
 */

namespace app\back\controller;


use think\Controller;

class SiteController extends Controller
{
 public function indexAction(){
     return $this->fetch();
 }
}