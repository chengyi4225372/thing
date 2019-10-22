<?php
namespace app\home\controller;
use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;

class Homes extends Controller
{
    public function index(){

        if($this->request->isGet()){

            //慧享产品
            $array = array('status'=>'1');
            $protuct = Protuctservice::instance()->normal($array);
            $this->assign('protuct',$protuct);

            //招标 招商信息
            $biao   = Infosservice::instance()->biao(['pid'=>1]);
            $shang  = Infosservice::instance()->shang(['pid'=>2]);
            $this->assign('biao',$biao);
            $this->assign('shang',$shang);
            return $this->fetch();
        }
    }
}