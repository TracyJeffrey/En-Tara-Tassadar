<?php
/**
 * Created by PhpStorm.
 * User: LiXiang
 * Date: 2018/2/26
 * Time: 15:54
 */

namespace app\back\controller;


use think\Controller;

class PageController extends Controller
{

    /*
     * 生成首页静态化
     */
    public function indexAction(){

        $this->assign('telephone', appConfig('shop-telephone'));
        $this->assign('shop_title', appConfig('shop-title'));
        # 渲染前台首页模板
        $content = $this->fetch('index@site/index');
        # 生成静态文件
        file_put_contents(ROOT_PATH . 'public/html/index.html', $content);

        return $this->redirect('site/index');
    }
}