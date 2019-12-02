<?php
namespace app\v1\service;
use app\common\model\Work;
use app\common\model\News;
use app\common\model\Cases;
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
     * title string
     *获取资讯列表
     */
    public function getNewList($title){
        if(!empty($title) && isset($title)){
            $where['title'] = ['like','%'.$title.'%'];
        }
        $where['status'] = ['EQ',1];

        $list  = News::instance()->where($where)->order(['id'=>'desc','update_time'=>'desc'])->paginate(8);
        $lists = $list->toArray();
        $page = $list->render();
        $return_data = [
            'list' => $lists,
            'page' => $page
        ];
        return  $return_data;
    }

    /**
     * 前台获取最高的3条信息
     */
    public function three(){
        $where = ['del_time'=>0];
        $data = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->limit(3)->select();
        return $data;
    }


    /**
     * array array
     *
     * 添加 数据
     */
    public function setAddArray($array){
        $ret = News::instance()->data($array)->save();
        return $ret;
    }


    /**
     * 通过id 更新
     * array array
     * id    string
     *return bool
     */
    public function  updateByArray($array,$id){
        $w = ['id'=>$id];

        if(empty($id) || $id <=0){
            return false;
        }

        if(empty($array)){
            return  false;
        }

        $ret =  News::instance()->where($w)->update($array);
        return $ret;
    }


    /**
     * 通过id 获取信息
     */
    public function getIdInfo($id){

        if(empty($id) || $id <=0){
            return false;
        }
       $w    = ['id'=>$id];
       $info = News::instance()->where($w)->find()->toArray();
       return $info;
    }

    /**
     * 删除 del
     * id string
     * return bool
     */
    public function setDel($id){
        if(empty($id) || $id <=0){
            return false;
        }

        $w   = ['id'=>$id];
        $c   = ['status'=>2];
        $ret = Work::instance()->where($w)->update($c);
        return $ret;
    }

    /**
     *设置排序
     * id  string
     * sort string|int
     * return bool
     */
    public  function toSetsort($id,$sort){
        if(empty($id) || !isset($id)){
            return false;
        }

        if(empty($sort) || $sort <= 0){
            $sort = 0;
        }

        $w   = ['id'=>$id];
        $arr = ['sort'=>$sort];

        $ret = Work::instance()->where($w)->update($arr);

        if($ret !== false){
            return true;
        }else{
            return false;
        }

    }


    /**
     * 上一篇
     * id string
     * return array|null
     */
    public function getTop($id){
       if(empty($id) || !isset($id)){
           return false;
       }
       $where = [
           'id'=>['<',$id],
            'del_time'=>0
       ];

       $info = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->find();

       if(empty($info)){
           return  $info ='';
       }else{
           return  $info;
       }

    }

    /**
     * 下一篇
     * id string
     * return array|null
     */
    public function getNext($id){
        if(empty($id) || !isset($id)){
            return false;
        }

        $where = [
            'id'=>['>',$id],
            'del_time'=>0
        ];
        $info = Work::instance()->where($where)->order(['sort'=>'asc','create_time'=>'desc'])->find();

        if(empty($info)){
            return  $info ='';
        }else{
            return  $info;
        }
    }

    /**
     * $keyword string
     *
     * return string|int
     */
    public function getCount($title){
        if(empty($title) || !isset($title)){

            $where = ['del_time'=>0];
        }else {

            $where =[
                'del_time'=>0,
                'title|keyword'=>['like','%'.$title.'%'],
            ];
        }

        $count  = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->count('id');
        return  $count;
    }


    /**
     * 前台新闻列表 接口
     * title string
     * page  string | int
     * return array|null
     */
    public function  Getinfolist($title,$page){
        if(empty($title) || !isset($title)){

            $where = ['del_time'=>0];
        }else {

            $where =[
                'del_time'=>0,
                'title|keyword'=>['like','%'.$title.'%'],
            ];
        }

        $next = 10;
        if(empty($page)){
          $page = 0;
        }else {
            $page= $next * $page;
        }

        $list  = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->limit($page,$next)->select();
        return  $list;
    }


    /**
     * 获取有效数据总条数
     */
     public function getWorkCount(){
         $count = Work::instance()->where(['del_time'=>0])->count();
         return $count;
     }

    /**
     * @DESC：查询惠灵工的成功案例
     * @param $params
     * @return array
     * @author: jason
     * @date: 2019-12-02 03:58:49
     */
    public function getCaseInfo($params)
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
        $where['status'] = 1;
        //分页url参数
        $config = [
            'query' => request()->param(),
        ];
        $caseInfo = Cases::instance()->where($where)
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

    /**
     * @DESC：查询一条数据
     * @author: jason
     * @date: 2019-12-02 04:14:59
     */
    public function getOneData($params)
    {

        if(empty($params)){
            return false;
        }
        $where = [];
        $where['status'] = 1;
        $where['id'] = $params['id'];
        $return_data = Cases::instance()->where($where)->find();
        return $return_data;
    }

    /**
     * @DESC：添加惠灵工的成功案例
     * @author: jason
     * @date: 2019-12-02 03:13:06
     */
    public function addcase($params)
    {
        $add = [];
        $add['title'] = $params['title'];
        $add['content'] = $params['content'];
        $add['pic'] = $params['pic'];
        $add['status'] = 1;
        $add['add_time'] = time();
        $add['update_time'] = time();
        $res = Cases::instance()->insert($add);
        if($res === false){
            return false;
        }
        return true;
    }

    /**
     * @DESC：编辑惠灵工的成功案例
     * @author: jason
     * @date: 2019-12-02 04:31:30
     */
    public function editcase($params)
    {
        $add = [];
        $add['title'] = $params['title'];
        $add['content'] = $params['content'];
        $add['pic'] = $params['pic'];
        $add['update_time'] = time();
        $res = Cases::instance()->where(['id' => $params['id']])->update($add);
        if($res === false){
            return false;
        }
        return true;
    }

    /**
     * @DESC：删除惠灵工成功案例
     * @author: jason
     * @date: 2019-12-02 04:55:38
     */
    public function delcase($params)
    {
        $res = Cases::instance()->where(['id' => $params['id']])->update(['status' => 2]);
        if($res === false){
            return false;
        }
        return true;
    }
}