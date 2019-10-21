<?php
/**
 * 成功案例service
 * User: abc
 * Date: 2019/10/21
 * Time: 19:00
 */
namespace app\v1\service;

use app\common\model\Admin;
use app\common\model\Cases;
use app\common\model\Casedetail;
use think\Session;
use plugin\Tree;
use plugin\Crypt;
use think\Cache;
use think\Config;

class Caseservice
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
     * @DESC：获取成功案例父类列表
     * @author: jason
     * @date: 2019-10-21 07:43:14
     */
    public function getparentlist($params)
    {
        $where = [];
        //每页显示的数量
        $page_size = !empty($params['ps']) ? $params['ps'] : 20;
        //当前页
        $current_page = (!empty($params['page']) && intval($params['page']) > 0) ? $params['page'] : 1;
        //分页起始值
        $start = $page_size * ($current_page - 1);

        if(isset($params['title']) && !empty($params['title'])){
            //将中文逗号替换成英文逗号
            if(strpos($params['title'],'，')){
                $params['title'] = str_replace('，',',',$params['title']);
            }
            //将空格替换成英文逗号
            $params['title'] = preg_replace('/\s{1,}/',' ',$params['title']);
            $params['title'] = str_replace(' ',',',$params['title']);
            $params['title'] = explode(',',$params['title']);

            $params['title'] = array_filter($params['title'],function ($params){
                return !empty($params);
            });
            $caseArr = array_map(function($par){
                return '%'.$par.'%';
            },$params['title']);

            $where['title'] = ['LIKE',$caseArr,'OR'];
        }

        //分页url参数
        $config = [
            'query' => request()->param(),
        ];
        $caseInfo = Cases::where($where)
            ->limit($start,$page_size)
            ->order('id', 'desc')
            ->paginate($page_size, false, $config);
        $page = $caseInfo->render();

        $return_data = [
            'list' => $caseInfo->toArray(),
            'page' => $page,
        ];

        return $return_data;
    }
}
