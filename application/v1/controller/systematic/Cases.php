<?php
/**
 * 案例管理.
 * User: abc
 * Date: 2019/7/25
 * Time: 14:06
 */
namespace app\v1\controller\systematic;
use app\common\controller\AuthController;
use app\v1\service\Caseservice;
use think\Config;
class Cases extends AuthController
{
    /**
     * @DESC：成功案例首页
     * @author: jason
     * @date: 2019-10-21 07:01:33
     */
    public function index()
    {
        $params = $_GET;
        $return_data = Caseservice::instance()->getparentlist($params);
        $this->assign('list',$return_data);
        $this->assign('data',$return_data);
        return $this->fetch();
    }

    /**
     * @DESC：成功案例详情页面
     * @author: jason
     * @date: 2019-10-21 08:03:05
     */
    public function casedetail()
    {
        return $this->fetch();
    }
}