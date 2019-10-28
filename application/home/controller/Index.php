<?php
namespace app\home\controller;

use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Systems;
use app\v1\service\Caseservice;

class Index extends Controller
{

    /**
     * @DESC：初始化
     * @author: jason
     * @date: 2019-10-28 04:24:30
     */
    public function _initialize(){
        $SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
        $is_nginx = stripos($SOFTWARE,'nginx');
        if($is_nginx !== false){
            $is_nginx = '';
        }else{
            $is_nginx = '/index.php';
        }
        $this->assign('is_nginx',$is_nginx);
    }

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

            $caseInfo = Caseservice::instance()->getallparent();
            $pic = array_column($caseInfo,'pic');
            $pic2 = array_column($caseInfo,'pic2');
            $this->assign('pic1',json_encode($pic));
            $this->assign('pic2',json_encode($pic2));
            $this->assign('count',count($caseInfo));
            $this->assign('case_list', $caseInfo);


            $this->assign('site_info',$siteInfo);

            $this->assign('slideshow', $slideshow);
            $this->assign('biao', $biao);
            $this->assign('shang', $shang);
            return $this->fetch();
        }
        return false;
    }

    /**
     * @DESC：ajax获取案例图片
     * @author: jason
     * @date: 2019-10-28 10:27:42
     */
    public function ajaximage(){
        if($this->request->isAjax() && $this->request->isPost() && $_POST['data'] == 'getdata'){
            $caseInfo = Caseservice::instance()->getallparent();
            $pic_arr = [];
            $pic2_arr = [];
            foreach($caseInfo as $key => $value){
                $pic_arr[$key]['pic1'] = $value['pic'];
                $pic_arr[$key]['is_show'] = $value['is_show'];
                $pic2_arr[$key]['pic2'] = $value['pic2'];
                $pic2_arr[$key]['is_show'] = $value['is_show'];
                $pic2_arr[$key]['is_pic1'] = $value['pic'];
            }
            return json(['pic1' => $pic_arr,'pic2' => $pic2_arr]);
        }
    }
}