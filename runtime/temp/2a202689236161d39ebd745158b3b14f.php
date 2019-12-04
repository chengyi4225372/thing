<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"C:\phpEnv\www\thing\public/../application/home\view\index\information_list.html";i:1575428258;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575280539;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/spirit/css/Informationlist.css">
  <script src="/static/spirit/js/clamp.js"></script>
  <script src='/static/spirit/js/Informationlist.js'></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src='/static/spirit/js/spirit.js'></script>
  <script src='/static/common/js/public.js'></script>
</head>

<body>

  <div class='container'>

    <!-- 导航部分 -->
    <!--<div class="nav-box">-->
      <!--<div class="w nav-container clearfix">-->
        <!--&lt;!&ndash; logo图 &ndash;&gt;-->
        <!--<div class="logo">-->
          <!--<h1>-->
            <!--<a href="<?php echo url('/home/spirit/index'); ?>"><img src="/static/spirit/images/logo2x.png"></a>-->
          <!--</h1>-->
        <!--</div>-->
        <!--&lt;!&ndash; nav部分 &ndash;&gt;-->
        <!--<div class="nav">-->
          <!--<ul class="clearfix">-->
            <!--&lt;!&ndash;<li ><a href="<?php echo config('curl.website'); ?>">首页</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="<?php echo url('/home/many/index'); ?>">惠多薪</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="<?php echo config('curl.hzs'); ?>">惠找事</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li><a href="<?php echo url('/home/launch/index'); ?>">惠企动</a></li>&ndash;&gt;-->
            <!--<li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>-->
            <!--<li><a href="javascript:;">产品服务</a></li>-->
            <!--<li><a href="javascript:;">行业解决方案</a></li>-->
            <!--<li><a href="javascript:;">客户案例</a></li>-->
            <!--<li><a href="javascript:;">行业新闻资讯</a></li>-->
          <!--</ul>-->
        <!--</div>-->
        <!--&lt;!&ndash; 登陆注册 &ndash;&gt;-->
        <!--<?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="<?php echo $baseurl; ?>" target="_blank">
        登陆
    </a></div>
    <div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <img src="/static/spirit/images/user_img.png"
         style="width:30px;height:30px; vertical-align: middle;">
    <p style="display:inline-block;color:#fff;"  id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)"  data-token="<?php echo $userinfo['token']; ?>" location_url="<?php echo url('/home/index/index'); ?>" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?>-->
      <!--</div>-->

    <!--</div>-->

    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo">
          <h1>
            <img src="/static/spirit/images/logo2xx.png">
          </h1>
        </div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
            <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
            <li  class="nav-active"><a href="<?php echo url('/home/index/informationlist'); ?>">行业新闻资讯</a></li>
            <!--<li>-->
            <!--<?php if(empty($userinfo['userType'])): ?>-->
            <!--<a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="members_click(this)">会员通道</a>-->
            <!--<?php elseif($userinfo['userType'] == 'C'): ?>-->
            <!--<a href="javascript:void(0)">会员通道</a>-->
            <!--<?php else: ?>-->
            <!--<a href="<?php echo config('curl.redirect_url'); ?>/task/task">会员通道</a>-->
            <!--<?php endif; ?>-->

            <!--</li>-->
          </ul>
        </div>



        <!-- 登陆注册 -->
        <!--<?php if(empty($userinfo['mobile'])): ?>-->
        <!--<div class="loging clearfix">-->
        <!--<div class="register-btn"><a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="login_btn(this)">-->
        <!--登录-->
        <!--</a></div>-->
        <!--<div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>-->
        <!--</div>-->
        <!--<?php else: ?>-->
        <!--<div class="u_info">-->
        <!--<?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="<?php echo $baseurl; ?>" target="_blank">
        登陆
    </a></div>
    <div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <img src="/static/spirit/images/user_img.png"
         style="width:30px;height:30px; vertical-align: middle;">
    <p style="display:inline-block;color:#fff;"  id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)"  data-token="<?php echo $userinfo['token']; ?>" location_url="<?php echo url('/home/index/index'); ?>" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?>-->
        <!--</div>-->
        <!--<?php endif; ?>-->
      </div>

    </div>



    <!-- 面包屑导航 -->
    <div class="content-box">
      <div class="w content">
        <div class="bread-crumbs">
          <span><a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠灵工</a></span> > <span><a onclick="go_news(this)" data-url="<?php echo url('/home/spirit/informationList'); ?>">资讯</a></span> ><span></span>
        </div>
        <div class="information-list">
          <div class="tabs clearfix">
            <ul class="clearfix fl">
              <li class="li-active"><a href="<?php echo url('/home/index/informationList'); ?>">行业资讯</a></li>
             <!--  <li>招标信息</li>-->
            </ul>
            <div class="search-box fr">
              <input type="text" id="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>" placeholder="请输入关键字">
              <div onclick="search(this)" data-url="<?php echo url('/home/index/informationList'); ?>">搜索</div>
            </div>
          </div>
          <div class="tabs-items show">
            <ul id="content">
              <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
              <li>
                  <div class="tabs-items-content">
                    <div class="tabs-items-content-text figcaption">
                      <p>抱歉，没有找到与<b style="color: #ff2222"><?php echo \think\Request::instance()->get('keyword'); ?></b>的相关结果。</p>
                    </div>
                  </div>
              </li>
              <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <li>
                <a href="<?php echo url('/home/index/detail',['mid'=>$vo['id']]); ?>">
                  <div class="tabs-items-img">
                    <img src="<?php echo (isset($vo['imgs']) && ($vo['imgs'] !== '')?$vo['imgs']:''); ?>" alt="">
                  </div>
                  <div class="tabs-items-content">
                    <div class="tabs-items-content-title figcaption">
                      <p><?php echo $vo['title']; ?></p>
                    </div>
                    <div class="tabs-items-content-text figcaption">
                      <p><?php echo $vo['desc']; ?></p>
                    </div>
                    <div class="tabs-items-content-time"><span><img src="/static/spirit/images/shijian2x.png"
                          alt=""></span><span><?php echo $vo['create_time']; ?></span></div>
                  </div>
                </a>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; endif; ?>

            </ul>
            <input type="hidden" value="<?php echo \think\Request::instance()->get('keyword'); ?>" id="sid">
            <input type="hidden" value="1" id="page">
            <div class="more-btn" onclick="getMore($('#sid').val(),$('#page').val(),this)" data-href="<?php echo url('/home/index/detail'); ?>" data-url="<?php echo url('/home/index/getpageInfo'); ?>">查看更多</div>
          </div>

        </div>
      </div>
    </div>

        <!-- 底部 -->
        <div class="fotter-box">
          <div class="w fotter">
            <div class='parter_catefories'>
              <dl>
                <dt><a href="javascript:;">服务产品</a></dt>
                <dd><a href="javascript:;">服务型税筹</a></dd>
                <dd><a href="javascript:;">门户型税筹</a></dd>
                <dd><a href="javascript:;">人力资源</a></dd>
              </dl>
              <dl>
                <dt><a href="javascript:;">招商政策</a></dt>
                <dd><a href="javascript:;">招商政策网</a></dd>
              </dl>
              <dl>
                <dt><a href="javascript:;">合作</a></dt>
                <dd><a href="javascript:;">代理合作</a></dd>
              </dl>
              <dl>
                <dt><a href="javascript:;">公司信息</a></dt>
                <dd><a href="javascript:;">瑟维斯有限公司</a></dd>
                <dd><a href="javascript:;">惠创优产业联盟</a></dd>
                <dd><a href="javascript:;">中兴瑞华有限公司</a></dd>
              </dl>
              <dl>
                <dt><a href="javascript:;">联系我们</a></dt>
                <dd><a href="javascript:;">400-150-9896</a></dd>
                <dd><a href="javascript:;">hcylm008@dingtalk.com</a></dd>
                <dd><a href="javascript:;">武汉市硚口区南国大武汉H座18楼</a></dd>
              </dl>
      
            </div>
            <div class='concat_icon clearfix'>
              <div><img src="/static/spirit/images/bo.png" alt=""></div>
              <div><img src="/static/spirit/images/wx.png" alt=""></div>
              <div><img src="/static/spirit/images/tie.png" alt=""></div>
            </div>
            <div class="fotter-line"></div>
            <div>© Copyright 2019 惠企动（湖北）科技有限公司 . All Rights Reserved</div>
          </div>
        </div>

    <!-- 返回顶部 -->
    <div class='goTop' id="goTop">
      <i></i>
      <div>返回顶部</div>
    </div>

  </div>
  <script>
    $('.nav ul li').on('click', function() {
      $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
    })
    $('.nav ul li').on('mouseenter', function() {
      $(this).addClass('nav-active').siblings().removeClass('nav-active')
    })
    $('.nav-box').on('mouseleave', function() {
      $('.nav ul li').removeClass('nav-active')
      if ($('.chosenPage').length < 1) $('.nav ul li').eq(4).addClass('chosenPage')

      $('.chosenPage').addClass('nav-active')
    })
  </script>
</body>

</html>