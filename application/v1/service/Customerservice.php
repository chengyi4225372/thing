<?php
namespace app\v1\service;
use app\common\model\Customer;
use think\Cache;
use think\Config;
use think\Cookie;

class Customerservice
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
     * @DESC：惠灵工的首页轮播图列表
     * @return array
     * @author: jason
     * @date: 2019-12-09 11:20:03
     */
    public function getslideshow()
    {
        $where = [];
        //按字段类型搜索
        if (!empty($params['searchField']) && !empty($params['searchValue'])) {
            $searchValue = preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)/", ',', trim($params['searchValue']));
            $searchValue = explode(',', $searchValue);

            $searchValue = array_filter($searchValue, function ($par) {
                return !empty($par);
            });
            switch ($params['searchField']) {
                case 1:
                    $good = array_map(function ($param) {
                        return '%' . $param . '%';
                    }, $searchValue);
                    $where['title'] = array('like', $good, 'or');
                    break;
                case 2:
                    $good = array_map(function ($param) {
                        return '%' . $param . '%';
                    }, $searchValue);
                    $where['content'] = array('like', $good, 'or');
                    break;
            }
        }
        if(!empty($params['status'])){
            $where['status'] = $params['status'];
        }
        $return = Customer::order('sort desc,id desc')->where($where)->paginate(20);
        return $return;
    }


    /**
     * @DESC：启用或禁用轮播图
     * @param $params
     * @return bool
     * @author: jason
     * @date: 2019-12-09 05:32:31
     */
    public function changestatus($params)
    {
        if(empty($params)){
            return false;
        }
        $save = [];
        $save['status'] = $params['status'];
        $where = [];
        $where['id'] = $params['id'];
        $res = Customer::instance()->where($where)->update($save);
        if($res === false){
            return false;
        }
        return true;
    }

    /**
     * @DESC：排序
     * @param $params
     * @return bool
     * @author: jason
     * @date: 2019-12-09 02:00:21
     */
    public function changesort($params)
    {
        if(empty($params)){
            return false;
        }
        $save = [];
        $save['sort'] = $params['sort'];
        $where = [];
        $where['id'] = $params['id'];
        $res = Customer::instance()->where($where)->update($save);
        if($res === false){
            return false;
        }
        return true;
    }


    /**
     * @DESC：添加轮播图
     * @param $params
     * @return bool
     * @author: jason
     * @date: 2019-12-09 03:00:19
     */
    public function addcustomer($params)
    {
        if(empty($params)){
            return false;
        }
        if(empty($params['title']) || empty($params['content']) || empty($params['pic']) || empty($params['url']) || empty($params['status'])){
            return false;
        }
        $add = [];
        $add['title'] = $params['title'];
        $add['content'] = $params['content'];
        $add['pic'] = $params['pic'];
        $add['url'] = $params['url'];
        $add['status'] = $params['status'];
        $add['sort'] = !empty($params['sort']) ? $params['sort'] : 1;
        $add['add_time'] = time();
        $add['add_user'] = Cookie('username');
        $res = Customer::instance()->insert($add);
        if($res === false){
            return false;
        }
        return true;
    }


    /**
     * @DESC：编辑惠灵工轮播图
     * @param $params
     * @return bool
     * @author: jason
     * @date: 2019-12-09 04:16:19
     */
    public function editcustomer($params)
    {
        if(empty($params)){
            return false;
        }
        if(empty($params['id']) || empty($params['title']) || empty($params['content']) || empty($params['pic']) || empty($params['url']) || empty($params['status'])){
            return false;
        }
        $add = [];
        $where = [];
        $where['id'] = $params['id'];

        $add['title'] = $params['title'];
        $add['content'] = $params['content'];
        $add['pic'] = $params['pic'];
        $add['url'] = $params['url'];
        $add['status'] = $params['status'];
        $add['sort'] = !empty($params['sort']) ? $params['sort'] : 1;
        $res = Customer::instance()->where($where)->update($add);
        if($res === false){
            return false;
        }
        return true;
    }

    /**
     * @DESC：根据ID查询出一条轮播数据
     * @param $params
     * @return array|bool|false|\PDOStatement|string|\think\Model
     * @author: jason
     * @date: 2019-12-09 03:41:12
     */
    public function getOneCustomer($params)
    {
        $id = !empty($params['id']) ? $params['id'] : '';

        if(empty($id)){
            return false;
        }

        $where['id'] = $id;
        $return_data = Customer::instance()->where($where)->find();
        return $return_data;
    }

    /**
     * @DESC：上传轮播图
     * @author: jason
     * @date: 2019-10-21 03:31:26
     */
    public function uploadimg($file)
    {
        //要有上传的数据
        if(empty($file)){
            return json(['code' => 400,'msg' => '上传失败']);
        }
        $res = $this->upload($file);
        return json($res);
    }

    /**
     * @DESC：图片上传
     * @author: jason
     * @date: 2019-10-21 04:14:21
     */
    public function upload($file)
    {
        $imgDir = dirname(THINK_PATH).'/public';
        $rand = rand(1,999);
        $lastDir = '/uploads/images/hlg/'.date('YmdH').$rand.'/';
        $imgSmallDir = $imgDir . $lastDir;
        if (!is_dir($lastDir)) {
            @mkdir($imgDir,0777,true);
        }
        if (!is_dir($imgSmallDir)) {
            @mkdir($imgSmallDir,0777,true);
        }
        $name = $file['name'];

        $filename = $file['name'];
        $error = $file['error'];

        $fileimg = strtolower(substr(strrchr($filename, "."), 1));
        //文件类型
        $typeArr = array('jpg', 'gif', 'png', 'jpeg');
        if(!in_array($fileimg,$typeArr)){
            $arr = array(
                'code' => 400,
                'msg' => "图片类型必须是【'jpg', 'gif', 'png', 'jpeg'】!",
                'path' => []
            );
            return $arr;
        }
        $tem_name = $file['tmp_name'];
        move_uploaded_file($tem_name,$imgSmallDir.$name);

        switch($error){
            case 0 :
                $arr = array(
                    'code' => 200,
                    'msg' => '文件上传成功!',
                    'path' => $lastDir.$name
                );
                break;
            case 1:
                $arr = array(
                    'code' => 400,
                    'msg' => '超过了上传文件大小',
                    'path' => []
                );
                break;
            case 2:
                $arr = array(
                    'code' => 400,
                    'msg' => '超过了文件的大小MAX_FILE_SIZE选项指定的值',
                    'path' => []
                );
                break;
            case 3:
                $arr = array(
                    'code' => 400,
                    'msg' => '文件只有部分被上传',
                    'path' => []
                );
                break;
            case 4:
                $arr = array(
                    'code' => 400,
                    'msg' => '没有文件被上传',
                    'path' => []
                );
                break;
            default:
                $arr = array(
                    'code' => 400,
                    'msg' => '上传文件大小为0',
                    'path' => []
                );
        }
        return $arr;
    }
}

