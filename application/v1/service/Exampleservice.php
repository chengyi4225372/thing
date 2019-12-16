<?php

namespace app\v1\service;
use app\common\model\Example;
use think\Cache;
use think\Config;
use think\Cookie;

class Exampleservice
{
    /**静态对象 **/
    protected static $instance = null;

    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-07-26 10:00:16
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 列表页
     * @title
     */
     public function getalllist($title){

        if(!empty($title) || isset($title) || !is_null($title)){

            $w = [
                 'status'=>1,
                 'title|describes|content'=>['like','%'.$title.'%'],
            ];

        }

         $list = Example::instance()->where($w)->order(['sort'=>'desc','create_time'=>'desc'])->paginate(15);

         return $list?$list:'';
     }

     /**
      * 添加
      * @data
      */
     public function addsetdata($data){
          if(empty($data) || is_array($data) == false){
              return false;
          }

          $ret = Example::instance()->data($data)->save();

          if($ret !== false){
              return true;
           }else {
              return false;
          }
     }

    /**
     * 获取当前单条数据信息
     */
     public function getoneinfo($id){
          if(empty($id) || !isset($id) || is_null($id) || $id<= 0){
              return false;
          }

          $w = ['id'=>$id,'status'=>1];

          $ret = Example::instance()->where($w)->find();

          return  $ret?$ret:'';
      }

     /**
      * 编辑
      * @id
      * @data
      */
     public function editiddata($id,$data){
         if(empty($id) || !isset($id) || is_null($id) || $id<= 0){
             return false;
         }

         if(empty($data)){
             return false;
         }

         $w  = ['id'=>$id,'status'=>1];

         $ret = Example::instance()->where($w)->data($data)->update();

         if($ret !== false){
             return true;
         }else {
             return false;
         }

     }

     /**
      * 删除
      * @id
      */
     public function delone($id){

       if(empty($id) || !isset($id) || is_null($id) || $id<= 0){
           return false;
       }

       $ret  = Example::instance()->where(['id'=>$id])->data(['status'=>0])->update();

       if($ret !== false){
           return true;
       }else {
           return false;
       }

     }

     /**
      * 修改排序
      * @id
      * @sort
      */
      public function changeidsort($id,$sort){

           if(empty($id) || !isset($id) || is_null($id) || $id <= 0){
               return false;
           }

           $w = ['id'=>$id,'status'=>1];
           $ret = Example::instance()->where($w)->data(['sort'=>$sort])->update();

           if($ret !== false){
               return true;
           }else {
               return false;
           }
      }
}