<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 9:46
 */
namespace app\v1\controller\humans;
use app\common\controller\AuthController;
use app\v1\service\Totalsservice;
use think\Config;

class Totals extends AuthController{

    public function index(){

        $totals = Totalsservice::instance()->countpeople();
        $this->assign('totals',$totals);
        return $this->fetch();
    }
}