<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/10/21
 * Time: 8:31
 */
namespace app\v1\controller\users;
use app\common\controller\AuthController;
use app\v1\service\Userservice;
use think\Config;
/**
 * Class user
 * @package app\v1\controller\users
 */
class user extends AuthController
{
    /**
     * @DESC：用户列表
     * @author: jason
     * @date: 2019-10-21 08:34:23
     */
    public function index()
    {
        $status = Config::get('user.status');

        $list = Userservice::instance()->getList($_GET);
        $this->assign('status',$status);
        $this->assign('data_list',$list['list']['data']);
        return $this->fetch();
    }

    /**
     * @DESC：添加用户
     * @author: jason
     * @date: 2019-10-21 09:32:30
     */
    public function adduser()
    {
        return $this->fetch();
    }
}