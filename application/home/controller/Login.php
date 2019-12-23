<?php

namespace app\home\controller;

use app\common\controller\BaseController;
use app\common\controller\UserController;
use app\common\model\Loginlog;
use  think\Controller;
use think\Cookie;
use think\Cache;
use think\Config;

class Login extends BaseController
{
    public function login()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = intval($_GET['id']);
        } else {
            $id = '0';
        }
        if (isset($_GET['type']) && !empty($_GET['type'])) {
            $type = intval($_GET['type']);
        } else {
            $type = '0';
        }
        $this->assign('web_type', $type);
        $this->assign('data_id', $id);
        return $this->fetch();
    }

    public function register()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = intval($_GET['id']);
        } else {
            $id = '';
        }
        $this->assign('data_id', $id);
        return $this->fetch();
    }


    /**
     * @DESC：保存token、用户、电话到cookie里面
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetoken()
    {
        //允许跨域
        header("Access-Control-Allow-Origin:*");
        if ($this->request->isPost() && $this->request->isAjax()) {
            if (empty($_POST)) {
                return json(['status' => false, 'message' => '请确认用户或密码是否正确']);
            }
            $mobile = $_POST['mobile'];
            $token = $_POST['token'];
            $userName = $_POST['userName'];
            $userType = $_POST['userType'];
            Cookie::set('mobile', $mobile);
            Cookie::set('token', $token);
            Cookie::set('userName', $userName);
            Cookie::set('userType', $userType);
            Cache::set($mobile, $mobile);
            return json(['status' => true, 'message' => '登录成功']);
        } else {
            return json(['status' => false, 'message' => '请确认用户或密码是否正确']);
        }
    }

    /**
     * @DESC：保存token、用户、电话到缓存里面
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetokens()
    {
        //允许跨域
        header("Access-Control-Allow-Origin:*");
        $loginlogModel = new Loginlog();
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $userType = isset($_POST['userType']) ? $_POST['userType'] : '';
        $where = [];
        if (!empty($mobile)) {
            $add = [];
            $add['mobile'] = $mobile;
            $add['token'] = $token;
            $add['userType'] = $userType;
            $add['add_time'] = time();
            $where['mobile'] = $mobile;
            $info = $loginlogModel::instance()->where($where)->find();
            if (count($info) > 0) {
                $loginlogModel::instance()->where($where['mobile'])->delete();
                $loginlogModel::instance()->insert($add);
            } else {
                $loginlogModel::instance()->insert($add);
            }
        }
        return json(['status' => 200, 'message' => 'success']);
    }


    /**
     * @DESC：前台退出登录
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-10-31 10:38:54
     */
    public function logout()
    {
        header("Access-Control-Allow-Origin:*");
        $website_url = Config::get('curl.website');
        $hzs_url = Config::get('curl.hzs');
        Cookie::set('mobile', '');
        Cookie::set('token', '');
        Cookie::set('userType', '');
        Cookie::set('is_empty','');
        //官网退出
        $res = curl_get($website_url . '/home/login/apilogout');
        $res2 = curl_get($hzs_url . '/home/login/apilogout');
        return json(['status' => 200, 'message' => 'success']);
    }

    /**
     * @DESC：其他页面退出那么当前这个页面也要退出
     * @author: jason
     * @date: 2019-11-14 04:14:53
     */
    public function apilogout()
    {
        $userController = new UserController();
        header("Access-Control-Allow-Origin:*");
        Cookie::set('mobile', '');
        Cookie::set('token', '');
        Cookie::set('userType', '');
        Cookie::set('is_empty','');
        return json(['status' => 200, 'message' => 'success']);
    }




    /**
     * @DESC：测试单点登录
     * @author: jason
     * @date: 2019-12-20 04:05:35
     */
    public function savetokens3()
    {
        Cookie::set('mobile', '');
        Cookie::set('token', '');
        Cookie::set('userType', '');
        Cookie::set('is_empty', '');
    }


    /**
     * @DESC：测试单点登录001
     * @author: jason
     * @date: 2019-12-21 01:51:34
     */
    public function index1()
    {
//        $token = Cookie::get('mobile');
//        $token = Cookie::get('token');
//        $userName = Cookie::get('userName');
//        $userType = Cookie::get('userType');//c 个人 b 企业
        $mobile = Cookie::get('mobile');
        if(empty($mobile)){
            $url = Config::get('curl.website').'/home/login/hlg_local';

            echo "<script>location.href='".$url."'</script>";exit;
        }
    }

    /**
     * @DESC：测试单点登录002
     * @author: jason
     * @date: 2019-12-21 01:56:50
     */
    public function index2()
    {
        if(isset($_GET['line']) && isset($_GET['userType']) && isset($_GET['ttttt']) && $_GET['location'] == 'yes'){
            Cookie::set('mobile', $_GET['line']);
            Cookie::set('userType', $_GET['userType']);
            Cookie::set('token', $_GET['ttttt']);
            Cookie::set('is_empty', $_GET['is_empty']);
        }
        $mobile = Cookie::get('mobile');
        $is_empty = Cookie::get('is_empty');

        //如果是第一次进惠灵工首页要先跳到慧企云页面获取用户的信息
        if(empty($mobile) && empty($is_empty)){
            $url = Config::get('curl.website').'/home/login/hlg_local';

            echo "<script>location.href='".$url."'</script>";
        }
        return $this->fetch();
    }

    /**
     * @DESC：测试单点登录003
     * @author: jason
     * @date: 2019-12-21 02:23:17
     */
    public function index3()
    {
        $url = Config::get('curl.hlg').'/home/index/index';

        echo "<script>location.href='".$url."'</script>";
    }

}