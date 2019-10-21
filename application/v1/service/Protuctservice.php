<?php
namespace app\v1\service;
use app\common\model\Protuct;
use think\Session;
use plugin\Tree;
use plugin\Crypt;
use think\Cache;
use think\Config;
/**
 * Class Userservice
 * @package app\v1\service
 */
class Protuctservice
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
    public function getList(){
       $list = Protuct::instance()->where(['del_time'=>0])->order(['id'=>'desc'])->paginate(15);
       return $list;
    }


    /**
     * 添加数据
     */
     public function protuctAdd($param){
         $ret = Protuct::instance()->save($param);
          return  $ret;
     }

}