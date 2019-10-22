<?php
/**
 * 案例管理.
 * User: abc
 * Date: 2019/7/25
 * Time: 14:06
 */
namespace app\v1\controller\systematic;
use app\common\controller\AuthController;
use app\v1\service\Caseservice;
use think\Config;
class Cases extends AuthController
{
    /**
     * @DESC：成功案例首页
     * @author: jason
     * @date: 2019-10-21 07:01:33
     */
    public function index()
    {
        $params = $_GET;
        $return_data = Caseservice::instance()->getparentlist($params);
//        echo '<pre>';print_r($return_data);exit;
        $status = Config::get('site.case');
        $this->assign('status',$status);
        $this->assign('data',$return_data);
        return $this->fetch();
    }

    /**
     * @DESC：添加主案例
     * @return mixed
     * @author: jason
     * @date: 2019-10-21 08:30:58
     */
    public function addcase()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            return Caseservice::instance()->addcase($_POST);
        }
        $status = Config::get('site.case');
        $this->assign('status',$status);
        return $this->fetch();
    }

    /**
     * @DESC：编辑主案例
     * @author: jason
     * @date: 2019-10-21 09:19:18
     */
    public function editcase()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $data = Caseservice::instance()->editcase($_POST);
            return $data;
        }
        $id = $_GET['id'];
        $return_data = Caseservice::instance()->getcaselist($id);

        $status = Config::get('site.case');
        $this->assign('data',$return_data);
        $this->assign('status',$status);
        return $this->fetch();
    }

    /**
     * @DESC：成功案例详情页面
     * @author: jason
     * @date: 2019-10-21 08:03:05
     */
    public function casedetail()
    {
        $params = $_GET;
        $return_data = Caseservice::instance()->getAllDetail($params);
//        echo '<pre>';print_r($return_data);exit;
        $status = Config::get('site.case');
        if(!isset($params['status'])){
            $params['status'] = '';
        }
        $all_parent = Caseservice::instance()->getallparent();
        $pid_title = array_column($all_parent,'title','id');
        $this->assign('parent',$pid_title);
        $this->assign('data',$return_data);
        $this->assign('params',$params);
        $this->assign('status',$status);
        return $this->fetch();
    }

    /**
     * @DESC：添加案例详情页
     * @author: jason
     * @date: 2019-10-21 09:49:46
     */
    public function adddetail()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $return_data = Caseservice::instance()->adddetail($_POST);
            return $return_data;
        }

        //查询所有的主案例
        $all_parent = Caseservice::instance()->getallparent();
        $pid_title = array_column($all_parent,'title','id');
        $status = Config::get('site.case');
        $this->assign('status',$status);
        $this->assign('parent',$pid_title);
        return $this->fetch();
    }

    /**
     * @DESC：编辑详情
     * @author: jason
     * @date: 2019-10-22 10:26:55
     */
    public function editdetail()
    {
        if($this->request->isPost() && $this->request->isAjax()){
            $return_data = Caseservice::instance()->editdetail($_POST);
            return $return_data;
        }
        $id = $_GET['id'];
        $return_data = Caseservice::instance()->getCaseDetail($id);
        $status = Config::get('site.case');
        $all_parent = Caseservice::instance()->getallparent();
        $pid_title = array_column($all_parent,'title','id');
        $this->assign('parent',$pid_title);
        $this->assign('status',$status);
        $this->assign('data',$return_data);
        return $this->fetch();
    }
}