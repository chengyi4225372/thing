<?php

namespace app\home\controller;
use  think\Controller;

class Login extends  Controller{

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

    public function login(){

        return $this->fetch();
    }

    public  function register(){
        return $this->fetch();
    }
}