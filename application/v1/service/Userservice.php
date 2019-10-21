<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/10/21
 * Time: 8:37
 */
namespace app\v1\service;
use app\common\model\Admin;
use think\Session;
use plugin\Tree;
use plugin\Crypt;
use think\Cache;
use think\Config;
/**
 * Class Userservice
 * @package app\v1\service
 */
class Userservice
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
     * @DESC：用户列表
     * @author: jason
     * @date: 2019-10-21 08:39:08
     */
    public function getList($params)
    {

        //每页显示的数量
        $page_size = !empty($params['ps']) ? $params['ps'] : 20;
        //当前页
        $current_page = (!empty($params['page']) && intval($params['page']) > 0) ? $params['page'] : 1;
        //分页起始值
        $start = $page_size * ($current_page - 1);

        $where = [];

        if(isset($params['username']) && !empty($params['username'])){
            //将中文逗号替换成英文逗号
            if(strpos($params['username'],'，')){
                $params['username'] = str_replace('，',',',$params['username']);
            }
            //将空格替换成英文逗号
            $params['username'] = preg_replace('/\s{1,}/',' ',$params['username']);
            $params['username'] = str_replace(' ',',',$params['username']);
            $params['username'] = explode(',',$params['username']);

            $params['username'] = array_filter($params['username'],function ($params){
                return !empty($params);
            });
            $userArr = array_map(function($par){
                return '%'.$par.'%';
            },$params['username']);

            $where['username'] = ['LIKE',$userArr,'OR'];
        }


        //分页url参数
        $config = [
            'query' => request()->param(),
        ];
        $userInfo = Admin::where($where)
            ->limit($start,$page_size)
            ->order('id', 'desc')
            ->paginate($page_size, false, $config);
        $page = $userInfo->render();

        $return_data = [
            'list' => $userInfo->toArray(),
            'page' => $page,
        ];

        return $return_data;
    }
}