<?php
namespace app\v1\controller\work;

use app\common\controller\AuthController;
use think\Config;
use app\common\model\Work;
use app\v1\service\Workservice;

class Works extends AuthController
{

    public function index()
    {
        if ($this->request->isGet()) {
            $title = input('get.title', '', 'trim');
            $list = Workservice::instance()->getNewList($title);
            $status = [
                1 => '启用',
                2 => '禁用'
            ];
            foreach ($list['list']['data'] as $key => $value) {
                if ($value['add_time'] == 0) {
                    $list['list']['data'][$key]['add_time'] = '';
                }else{
                    $list['list']['data'][$key]['add_time'] = date('Y-m-d H:i:s',$value['add_time']);
                }
//                if ($value['update_time'] == 0) {
//                    $list['list']['data'][$key]['update_time'] = '';
//                }else{
//                    $list['list']['data'][$key]['update_time'] = date('Y-m-d H:i:s',$value['update_time']);
//                }
            }
//            echo '<pre>';print_r($list);exit;
            $this->assign('list', $list['list']['data']);
            $this->assign('title', '行业新闻资讯');
            $this->assign('status', $status);
            return $this->fetch();
        }
        return false;
    }

    /**
     * 添加
     */
    public function add()
    {
        if ($this->request->isGet()) {
            return $this->fetch();
        }

        if ($this->request->isPost()) {
            $data = $this->request->param();

            if (empty($data)) {
                return false;
            }

            $array = array(
                'title' => $data['title'],
                'pic' => $data['pic'],
                'operator' => Cookie('username'),
                'editor' => Cookie('username'),
                'add_time' => time(),
                'update_time' => time(),
                'status' => 1,
            );

            $ret = Workservice::instance()->setAddArray($array);

            if ($ret) {
                return json(['code' => 200, 'msg' => '操作成功']);
            } else {
                return json(['code' => 400, 'msg' => '操作失败']);
            }

        }
    }

    /**
     * 编辑
     */
    public function edit()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $data = $this->request->param();
            if (empty($data['id']) || !isset($data['id'])) {
                return false;
            }

            $arr = array(
                'title' => $data['title'],
                'pic' => $data['pic'],
            );
            $ret = Workservice::instance()->updateByArray($arr, $data['id']);

            if ($ret) {
                return json(['code' => 200, 'msg' => '操作成功']);
            } else {
                return json(['code' => 400, 'msg' => '操作失败']);
            }
        }
        if ($this->request->isGet()) {
            $id = input('get.id', '', 'int');

            if (empty($id) || !isset($id) || $id < 0) {
                return false;
            }
            $info = Workservice::instance()->getIdInfo($id);

            $this->assign('info', $info);
            return $this->fetch();
        }


    }

    /**
     * @return bool
     * 删除
     */
    public function del()
    {

        if ($this->request->isPost()) {
            $id = input('post.id', '', 'int');

            if (empty($id)) {
                return false;
            }

            $ret = Workservice::instance()->setDel($id);

            if ($ret) {
                return json(['code' => 200, 'msg' => '操作成功']);
            } else {
                return json(['code' => 400, 'msg' => '操作失败']);
            }
        }
        return false;
    }

    /**
     * @return cheng
     * 设置 排序
     */
    public function setsort()
    {
        if ($this->request->isPost()) {
            $id = input('post.id', '', 'int');
            $sort = input('post.sort', '', 'int');

            if (!is_int($id) && !is_string($id)) {
                return false;
            }

            $ret = Workservice::instance()->toSetsort($id, $sort);

            if ($ret === true) {
                return json(['code' => 200, 'msg' => '排序成功']);
            } else {
                return json(['code' => 400, 'msg' => '排序失败']);
            }

        }
        return false;
    }


    //上传图片
    public function uploadImgs()
    {
        // 获取上传文件
        $file = $this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH . 'public/uploads/imgs/works/';

        if (!is_dir($path)) {
            mkdir($path, 0755);
        }

        $info = $file->move($path, false, true);
        if ($info) {
            $mes = $info->getSaveName();
            $mes = str_replace("\\", '/', $mes);
            return json(['code' => '200', 'msg' => '上传成功', 'path' => '/uploads/imgs/works/' . $mes]);
        } else {
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code' => '400', 'msg' => $mes]);
        }
    }

    /**
     * @DESC：惠灵工的成功案例的图片上传
     * @author: jason
     * @date: 2019-12-02 03:16:38
     */
    public function uploadCaseImg()
    {
        // 获取上传文件
        $file = $this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH . 'public/uploads/imgs/successcase/';

        if (!is_dir($path)) {
            mkdir($path, 0755);
        }

        $info = $file->move($path, false, true);
        if ($info) {
            $mes = $info->getSaveName();
            $mes = str_replace("\\", '/', $mes);
            return json(['code' => '200', 'msg' => '上传成功', 'path' => '/uploads/imgs/successcase/' . $mes]);
        } else {
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code' => '400', 'msg' => $mes]);
        }
    }

    /**
     * @DESC：成功案例首页
     * @author: jason
     * @date: 2019-12-02 02:11:53
     */
    public function successcase()
    {
        $status = Config::get('site.case');
        $params = $_GET;
        $info = Workservice::instance()->getCaseInfo($params);
        $this->assign('status',$status);
        $this->assign('data',$info);
        return $this->fetch();
    }

    /**
     * @DESC：添加惠灵工的成功案例
     * @author: jason
     * @date: 2019-12-02 03:13:06
     */
    public function addcase()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            if(empty($_POST)){
                return json(['code' => '400', 'msg' => '添加失败']);
            }
            $res = Workservice::instance()->addcase($_POST);
            if($res === false){
                return json(['code' => '400', 'msg' => '添加失败']);
            }
            return json(['code' => '200', 'msg' => '添加成功']);
        }
        return $this->fetch();
    }

    /**
     * @DESC：修改惠灵工的成功案例
     * @return mixed|\think\response\Json|void
     * @author: jason
     * @date: 2019-12-02 04:39:56
     */
    public function editcase(){
        if($this->request->isAjax() && $this->request->isPost()){
            $res = Workservice::instance()->editcase($_POST);
            if($res === false){
                return json(['code' => '400', 'msg' => '修改失败']);
            }
            return json(['code' => '200', 'msg' => '修改成功']);
        }
        $id = input('get.id','','int');
        if(empty($id)){
            return;
        }

        $info = Workservice::instance()->getOneData(['id' => $id]);

        $this->assign('list',$info);
        return $this->fetch();
    }

    /**
     * @DESC：删除惠灵工成功案例
     * @author: jason
     * @date: 2019-12-02 04:55:38
     */
    public function delcase()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $id = input('post.id','','int');
            if(empty($id)){
                return;
            }
            $res = Workservice::instance()->delcase(['id' => $id]);
            if($res === false){
                return json(['code' => '400', 'msg' => '删除失败']);
            }
            return json(['code' => '200', 'msg' => '删除成功']);
        }
    }
}