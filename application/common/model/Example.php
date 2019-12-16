<?php
namespace app\common\model;

use think\Model;

class Example extends Model
{
    //静态对象
    protected static $readInstance = null;
    //表名
    protected $table='h_hlg_example';

    /**
     * @DESC：单例
     * @return Slideshow|null
     * @author: jason
     * @date: 2019-10-21 05:28:03
     */
    public static function instance()
    {
        if(!self::$readInstance) self::$readInstance = new self('', '', '');
        return self::$readInstance;
    }
}