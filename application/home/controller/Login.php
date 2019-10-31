<?php

namespace app\home\controller;
use app\common\controller\BaseController;
use  think\Controller;
use think\Cookie;
class Login extends  BaseController{


    public function login(){

        return $this->fetch();
    }

    public  function register(){
        return $this->fetch();
    }


    /**
     * @DESC：保存token、用户、电话到cookie里面
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetoken()
    {
        if($this->request->isPost() && $this->request->isAjax()){
            if(empty($_POST)){
                return json(['status' => false,'message' => '请确认用户或密码是否正确']);
            }
            $mobile = $_POST['mobile'];
            $token = $_POST['token'];
            $userName = $_POST['userName'];
            $userType = $_POST['userType'];
            Cookie::set('mobile',$mobile);
            Cookie::set('token',$token);
            Cookie::set('userName',$userName);
            Cookie::set('userType',$userType);
            return json(['status' => true,'message' => '登录成功']);
        }else{
            return json(['status' => false,'message' => '请确认用户或密码是否正确']);
        }
    }

    /**
     * @DESC：前台退出登录
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-10-31 10:38:54
     */
    public function logout(){
        if($this->request->isAjax() && $this->request->isPost()){
            Cookie::clear('mobile');
            Cookie::clear('token');
            Cookie::clear('userName');
            Cookie::clear('userType');
            return json(['status' => true,'message' => '退出登录成功']);
        }else{
            return json(['status' => false,'message' => '退出登录失败']);
        }
    }
}