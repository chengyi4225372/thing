<?php

namespace app\home\controller;
use  think\Controller;

class Login extends  Controller{

    public function login(){

        return $this->fetch();
    }

    public  function register(){
        return $this->fetch();
    }
}