<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 9:46
 */
namespace app\v1\controller\humans;
use app\common\controller\AuthController;
use app\common\Totalsservice;
use think\Config;

class Totals extends AuthController{

    public function index(){

        //$total = '';
        return $this->fetch();
    }
}