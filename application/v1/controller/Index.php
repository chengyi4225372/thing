<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/7/24
 * Time: 17:04
 */
namespace app\v1\controller;
//use think\Controller;
use app\common\controller\AuthController;
use app\v1\service\Home;
use app\common\model\Admin;
class Index extends AuthController
{
    /**
     * @DESC：后台首页
     * @author: jason
     * @date: 2019-07-24 05:05:08
     */
    public function index()
    {
        $userId = Cookie('userid');
        //用户信息
        $userInfo = Admin::where(['id' => $userId])->find()->toArray();
//        $data = Home::instance()->getData($userId);
//        echo '<pre>';print_r($data);exit;

        $this->assign('title','首页');
        $this->assign('userInfo',$userInfo);
        return $this->fetch();
    }
}