<?php
namespace app\home\controller;

use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Systems;
use app\v1\service\Caseservice;

class Index extends Controller
{
    public function index()
    {

        if ($this->request->isGet()) {

            //慧享产品
            $array = array('status' => '1');
            $protuct = Protuctservice::instance()->normal($array);
            $this->assign('protuct', $protuct);

            //招标 招商信息
            $biao = Infosservice::instance()->biao(['pid' => 1]);
            $shang = Infosservice::instance()->shang(['pid' => 2]);

            //轮播
            $slideshow = Systems::instance()->getOneshow();

            //近期成功案例
            $caseInfo = Caseservice::instance()->getallparent();
            $this->assign('case_list', $caseInfo);
            $this->assign('slideshow', $slideshow);
            $this->assign('biao', $biao);
            $this->assign('shang', $shang);
            return $this->fetch();
        }
        return false;
    }
}