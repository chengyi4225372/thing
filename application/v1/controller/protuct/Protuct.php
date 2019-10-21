<?php
namespace app\v1\controller\protuct;
use app\common\controller\AuthController;
use think\Config;

class Protuct extends AuthController
{

   public function index(){

      if($this->request->isGet()){

          return $this->fetch();
      }

      if($this->request->isPost()){
          echo 222;
      }

   }

   public function add(){

     if($this->request->isGet()){
         return $this->fetch();
     }

   }


   public function del(){

   }
}