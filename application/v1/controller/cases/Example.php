<?php
namespace app\v1\controller\cases;

use app\common\controller\AuthController;
use think\Config;
use app\v1\service\Exampleservice;
use think\Cookie;

/**
 * Class Cases
 * @package app\v1\controller\case
 * 客户案例 控制器
 */
class Example extends AuthController
{
  /***
   * 客户案例 列表页
   * @list
   */
    public function index(){
      if($this->request->isGet()){
          $title  = input('get.title','','trim');
          $titles = $title?$title:'';
          $list   = Exampleservice::instance()->getalllist($titles);
          $this->assign('list',$list);
          return $this->fetch();
      }
      return false;
   }

   /**
    * 添加
    * @data
    **/
    public function add(){
       if($this->request->isGet()){
           return $this->fetch();
       }

       if($this->request->isPost()){
          $data['title'] = input('post.title','','trim');
          $data['sort']  = input('post.sort','','int');
          $data['describes']  = input('post.describes','','trim');
          $data['imgs']  = input('post.imgs','','trim');
          $data['content']  = input('post.content','','trim');
          $data['create_time'] = time();
          $data['addUser'] = Cookie('username');
          if(empty($data) && !is_array($data)){
              return false;
          }

          $ret = Exampleservice::instance()->addsetdata($data);

          if($ret !== false){
             return json(['code'=>200,'msg'=>'添加成功']);
           }else{
             return json(['code'=>400,'msg'=>'添加失败']);
           }
       }

       return false;
    }

    /**
     * 编辑
     * @id
     * @data
     */
    public function edit(){

      if($this->request->isGet()){
         $id  =  input('get.id','','int');

         if(empty($id) || !isset($id) || is_null($id)|| $id <= 0){
             return false;
         }

         $info = Exampleservice::instance()->getoneinfo($id);
         $this->assign('info',$info);
         return $this->fetch();
      }

      if($this->request->isPost()){
          $data['title'] = input('post.title','','trim');
          $data['sort']  = input('post.sort','','int');
          $data['describes']  = input('post.describes','','trim');
          $data['imgs']  = input('post.imgs','','trim');
          $data['content']  = input('post.content','','trim');
          $data['create_time'] = time();
          $data['addUser'] = Cookie('username');
          $id = input('post.id','','int');

          if(empty($id) || !isset($id) || is_null($id) || $id <= 0){
              return false;
          }

          if(empty($data)){
              return false;
          }

          $ret = Exampleservice::instance()->editiddata($id,$data);

          if($ret !== false){
              return json(['code'=>200,'msg'=>'编辑成功']);
          }else {
              return json(['code'=>400,'msg'=>'编辑失败']);
          }
      }

      return false;
    }

   /**
    * 删除
    * @id
    **/
    public function  dels(){
      if($this->request->isGet()){
          $id  = input('get.id','','int');

          if(empty($id)|| !isset($id) || is_null($id) || $id <= 0){
              return false;
          }

          $ret = Exampleservice::instance()->delone($id);

          if($ret !== false){
              return  json(['code'=>200,'msg'=>'删除成功']);
          }else {
              return  json(['code'=>400,'msg'=>'删除失败']);
          }

      }
   }

   /**
    * 修改排序
    */
    public function changesort(){
        if($this->request->isPost()){
            $id   = input('post.id','','int');
            $sort = input('post.sort','','int');

            if(empty($id) || !isset($id)|| is_null($id) || $id<= 0){
                return false;
            }

            $res = Exampleservice::instance()->changeidsort($id,$sort);

            if($res !== false){
                return json(['code'=>200,'msg'=>'排序成功']);
            }else {
                return json(['code'=>400,'msg'=>'排序失败']);
            }
        }
        return false;
    }

    /**
     * 上传图片
     *
     **/
    public function uploadimg(){
        // 获取上传文件
        $file =$this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH.'public/uploads/imgs/example/';

        if(!is_dir($path)){
            mkdir($path,0755);
        }

        $info = $file->move($path,false,true);
        if($info){
            $mes = $info->getSaveName();
            $mes = str_replace("\\",'/',$mes);
            return json(['code'=>'200','msg'=>'上传成功','path'=>'/uploads/imgs/example/'.$mes]);
        }else{
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code'=>'400','msg'=>$mes]);
        }
    }

}