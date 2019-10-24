<?php
namespace app\v1\controller\work;
use app\common\controller\AuthController;
use think\Config;
use app\common\model\Work;
use app\v1\service\Workservice;

class Works extends  AuthController
{

    public function index()
    {
     if($this->request->isGet()){

         return $this->fetch();
       }
     return false;
    }

    /**
     * 添加
     */
    public function add()
    {
        if($this->request->isGet()){

        }

        if($this->request->isPost()){

        }
    }

    /**
     * 编辑
     */
    public function edit(){

        if($this->request->isGet()){
            $id = input('get.id','','int');

            if(empty($id) || !isset($id)|| $id < 0){
                return false;
            }
            // todo 待完成
            $info = '';
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){

        }

    }


    /**
     * @return bool
     * 删除
     */
    public function del(){

        if($this->request->isGet()){

        }
        return false;
    }

}