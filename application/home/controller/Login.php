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
        return json(['status' => 200, 'message' => 'success']);
    }


    /**
     * @DESC：测试单点登录
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetokens2()
    {
        session_start();
        //允许跨域
        header("Access-Control-Allow-Origin:*");
        $loginlogModel = new Loginlog();
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $userType = isset($_POST['userType']) ? $_POST['userType'] : '';
        $session_id = isset($_POST['session_id']) ? $_POST['session_id'] : '';
        $where = [];
        if (!empty($mobile)) {
            $add = [];
            $add['mobile'] = $mobile;
            $add['token'] = $token;
            $add['userType'] = $userType;
            $add['cookieid'] = $session_id;
            $add['add_time'] = time();
            $where['cookieid'] = $session_id;
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
     * @DESC：测试单点登录
     * @author: jason
     * @date: 2019-12-20 04:05:35
     */
    public function savetokens3()
    {
        $url = Config::get('curl.website');
        $mobile = Cookie::get('mobile');
        $token = Cookie::get('token');
        $userType = Cookie::get('userType');
        if(empty($mobile)){
            $res = curl_get($url);
            echo '<pre>';print_r($res);exit;
        }
    }
}