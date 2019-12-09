<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/12/9
 * Time: 10:33
 */
namespace app\v1\controller\work;
use app\common\controller\AuthController;
use think\Config;

/**\
 * @desc:首页轮播图的类
 * Class Customers
 * @package app\v1\controller\work
 */
class Customers extends AuthController
{
    /**
     * @DESC：首页
     * @return mixed
     * @author: jason
     * @date: 2019-12-09 10:49:41
     */
    public function index()
    {
        return $this->fetch();
    }
}