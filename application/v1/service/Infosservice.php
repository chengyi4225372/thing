<?php
namespace app\v1\service;
use app\common\model\Info;
use think\Session;
use plugin\Tree;
use plugin\Crypt;
use think\Cache;
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
           $list = Info::instance()->order(['create_time'=>'desc'])->paginate(15);
       }

        if(!empty($param) && isset($param)){
            $list = Info::instance()->where(['title'=>['like','%'.$param.'%']])->order(['create_time'=>'desc'])->paginate(15);
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

    public function getId($id){
        $info = Info::instance()->where(['id'=>$id])->find();
        return $info;
    }

}