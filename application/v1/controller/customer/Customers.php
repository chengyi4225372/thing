<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/12/9
 * Time: 10:33
 */
namespace app\v1\controller\customer;
use app\common\controller\AuthController;
use think\Config;
use app\v1\service\Customerservice;

/**\
 * @desc:首页轮播图的类
 * Class Customers
 * @package app\v1\controller\work
 */
class Customers extends AuthController
{
    /**
     * @DESC：惠灵工的首页轮播图列表
     * @return mixed
     * @author: jason
     * @date: 2019-12-09 10:49:41
     */
    public function index()
    {
        $status = Config::get('site.lunbo');
        $params = [];
        $params['searchField'] = !empty($searchField) ? $searchField : '';
        $params['searchValue'] = !empty($searchValue) ? $searchValue : '';

        $reutrn_data = Customerservice::instance()->getslideshow($params);

        $params['status'] = !empty($params['status']) ? $params['status'] : '';
        $this->assign('data',$reutrn_data);
        $this->assign('params',$params);
        $this->assign('status',$status);
        $this->assign('title','首页轮播图');
        return $this->fetch();
    }

    /**
     * @DESC：添加轮播图
     * @return mixed
     * @author: jason
     * @date: 2019-12-09 02:02:13
     */
    public function add()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $res = Customerservice::instance()->addcustomer($_POST);
            if($res == false){
                return json(['status' => 400,'msg' => '操作失败']);
            }
            return json(['status' => 200,'msg' => '操作成功']);
        }
        $status = Config::get('site.lunbo');
        $this->assign('status',$status);
        return $this->fetch();
    }

    /**
     * @DESC：编辑惠灵工轮播图
     * @return mixed|\think\response\Json|void
     * @author: jason
     * @date: 2019-12-09 04:15:56
     */
    public function edit()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $res = Customerservice::instance()->editcustomer($_POST);
            if($res == false){
                return json(['status' => 400,'msg' => '操作失败']);
            }
            return json(['status' => 200,'msg' => '操作成功']);
        }
        $id = $_GET['id'];

        if(empty($id)){
            return;
        }

        //根据ID查询一条数据
        $return_data = Customerservice::instance()->getOneCustomer(['id' => $id]);

        $status = Config::get('site.lunbo');
        $this->assign('status',$status);
        $this->assign('data',$return_data);
        return $this->fetch();
    }

    /**
     * @DESC：启用或禁用轮播图
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-12-09 01:59:31
     */
    public function changesort()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $return_data = Customerservice::instance()->changesort($_POST);
            if($return_data == false){
                return json(['status' => 400,'msg' => '请确认操作是否正确']);
            }
            return json(['status' => 200,'msg' => '排序成功']);
        }
    }

    /**
     * @DESC：上传轮播图
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-12-09 02:30:35
     */
    public function uploadimg()
    {
        $return_data = Customerservice::instance()->uploadimg($_FILES['file']);
        return $return_data;
    }
}