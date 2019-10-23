<?php
namespace app\home\controller;

use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Systems;

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

            //有关电话号码、邮箱、地址
            $siteInfo = Systems::instance()->getOneSite();

            //近期成功案例

//            $caseInfo = Caseservice::instance()->getallparent();
//            $arr = [];
//            foreach ($caseInfo as $key => $val) {
//
//                if($val['is_show'] == 2){
//                    $arr['id'] = $val['id'];
//                    $arr['title'] = $val['title'];
//                    $arr['title2'] = $val['title2'];
//                    $arr['title3'] = $val['title3'];
//                    $arr['desc'] = $val['desc'];
//                    $arr['desc2'] = $val['desc2'];
//                    $arr['desc3'] = $val['desc3'];
//                    $arr['desc4'] = $val['desc4'];
//                    $arr['desc5'] = $val['desc5'];
//                    $arr['desc6'] = $val['desc6'];
//                    $arr['desc7'] = $val['desc7'];
//                    $arr['pic'] = $val['pic'];
//                    $arr['url'] = $val['url'];
//                    $arr['status'] = $val['status'];
//                    $arr['is_show'] = $val['is_show'];
//                    unset($caseInfo[$key]);
//                    break;
//                }
//            }
//
//            $this->assign('case_list', $caseInfo);

            $this->assign('site_info',$siteInfo);
            $this->assign('slideshow', $slideshow);
            $this->assign('biao', $biao);
            $this->assign('shang', $shang);
            return $this->fetch();
        }
        return false;
    }
}