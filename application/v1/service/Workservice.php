<?php
namespace app\v1\service;
use app\common\model\Work;
use think\Session;
use think\Cache;
use think\Config;

class Workservice
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
     *获取资讯列表
     */
    public function getNewList(){
        $where = ['del_time'=>0];
        $list  = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->paginate(15);
        return $$list;
    }


    /**
     * 通过id 获取信息
     */
    public function getIdInfo($id){

    }

}