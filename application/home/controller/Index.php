<?php
namespace app\home\controller;
use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Systems;
<<<<<<< HEAD:application/home/controller/Homes.php
use app\v1\service\Caseservice;
class Homes extends Controller
=======
class Index extends Controller
>>>>>>> e7e201add2e2669969cb83e73eaefe3b1c351493:application/home/controller/Index.php
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

            //轮播
            $slideshow = Systems::instance()->getOneshow();

            //近期成功案例
            $caseInfo = Caseservice::instance()->getallparent();

//            echo '<pre>';print_r($caseInfo);exit;
            $this->assign('case_list',$caseInfo);
            $this->assign('slideshow',$slideshow);
            $this->assign('biao',$biao);
            $this->assign('shang',$shang);
            return $this->fetch();
        }
        return false;
    }
}