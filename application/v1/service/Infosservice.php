<?php
namespace app\v1\service;
use app\common\model\Info;
use plugin\Tree;
use plugin\Crypt;
use think\Config;

class Infosservice
{
    // 静态对象
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
     * 获取所有产品
     */
    public function getList($param){
       if(empty($param)){
           $list = Info::instance()->where(['status'=>1])->order(['create_time'=>'desc'])->paginate(15);
       }

        if(!empty($param) && isset($param)){
            $list = Info::instance()->where(['title'=>['like','%'.$param.'%'],['status'=>1]])->order(['create_time'=>'desc'])->paginate(15);
        }

       return $list;
    }

    //添加
    public function saves($param){
        $ret = Info::instance()->save($param);
        return $ret;
    }

   //更新
    public function updateId($arr,$id){
        if(empty($id)){
            return false;
        }
        $rest = Info::instance()->where('id',$id)->update($arr);
        return $rest;
    }

    /**
     * @param $id
     * @return mixed
     * 通过id 获取信息
     */
    public function getId($id){
        $info = Info::instance()->where(['id'=>$id])->find();
        return $info;
    }

    /**
     * 招标信息
     *  array('pid'=>1)
     */
    public function biao($array){
        $array['status'] =1;
        $arr = Info::instance()->where($array)->order('create_time desc')->limit(0,2)->select();
        return $arr;
    }

    /**
     * 招标信息
     *  array('pid'=>2)
     */
    public function shang($array){
        $array['status'] =1;
        $arr = Info::instance()->where($array)->order('create_time desc')->limit(0,2)->select();
        return $arr;
    }

    /**
     * id string
     * 删除功能
     */
    public function dels($arr,$id){
        $ret = Info::instance()->where(['id'=>$id])->update($arr);
        return $ret;
    }

}