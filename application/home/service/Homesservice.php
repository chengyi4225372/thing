<?php
namespace app\home\service;

use think\Cache;
use think\Config;

class Homesservice
{
    protected static $instance = null;
    protected $_reids = null;

    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-08-05 03:48:37
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}