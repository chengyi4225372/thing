<?php
namespace app\v1\controller\keys;
use app\common\controller\AuthController;
use think\Config;
use app\common\model\Keys;
use app\v1\service\Keywordsservice;
use think\Cookie;

class Keywords extends  AuthController
{

 /** 关键字列表**/   
public function index(){
   if($this->request->isGet()){
     $keywors = input('get.keyword','','trim');
     $keywors = $keywors?$keywors:'';
     $list    = Keywordsservice::instance()->getlist($keywors);
    
     $this->assign('list',$list);
     return $this->fetch();
   }  
    return false;
}

/** 添加关键字  **/
public function add(){
   if($this->request->isGet()){
       return $this->fetch();
   }

   if($this->request->isPost()){
       $data['title'] = input('post.title','','trim');
       $data['sort']  = input('post.sort','','int');
       $data['operator']  = cookie('username');
       $data['create_time']  = time();
   
       $ret  = Keywordsservice::instance()->keysadd($data);
       
       if($ret !== false){
         return json(['code'=>200,'msg'=>'添加成功']);
        }else {
          return json(['code'=>400,'msg'=>'添加失败']);
       }
       
      }
    
     return false;
}

/** 编辑关键字**/
public function edit(){
   if($this->request->isGet()){
      $id = input('get.mid','','int');
      if(empty($id) || !isset($id) || is_null($id) || $id <= 0){
        return false;
      }

      $info = Keywordsservice::instance()->getkeysinfo($id);
      $this->assign('info',$info);
      return $this->fetch();
   }

   if($this->request->isPost()){
       $id = input('post.mid','','int');
       $data['title'] = input('post.title','','trim');
       $data['sort']  = input('post.sort','','int');
       $data['operator'] = cookie('username');

       $ret = Keywordsservice::instance()->keysedit($id,$data);

       if($ret !== false){
         return json(['code'=>200,'msg'=>'编辑成功']);
       }else{
         return json(['code'=>400,'msg'=>'编辑失败']);
       }
   }

   return false;
}

/**删除关键字 **/
public function del(){
    if($this->request->isPost()){
         $id  = input('post.mid','','int');
         if(empty($id) || is_null($id) || !isset($id) ||$id  <= 0){
           return false;
         } 

         $res = Keywordsservice::instance()->savekeysstatus($id);

         if($res !== false){
           return json(['code'=>200,'msg'=>'删除成功']);
         }else{
           return json(['code'=>400,'msg'=>'删除失败']);
         }
    }
    return false;
}


/**
 * 排序
 * 
 */
 public function savesort(){
    if($this->request->isPost()){
        $id   = input('post.mid','','int');
        $sort = input('post.sort','','int');

        if(empty($id) || is_null($id) || !isset($id) || $id <= 0){
          return false;
        }

        $ret = Keywordsservice::instance()->changesort($id,$sort);

        if($ret !== false){
           return json(['code'=>200,'msg'=>'排序成功']);
        }else {
           return json(['code'=>400,'msg'=>'排序失败']);
        } 
    } 

    return false;
 }


}
