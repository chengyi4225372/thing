<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\phpEnv\www\thing\public/../application/home\view\index\detail.html";i:1575431061;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575367745;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <meta name="keywords" content="<?php echo (isset($info['keyword']) && ($info['keyword'] !== '')?$info['keyword']:''); ?>" />
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/spirit/css/detail.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src='/static/spirit/js/spirit.js'></script>
  <script src='/static/common/js/public.js'></script>
</head>

<body>
  <div class='container'>
    <!--<div class='header'>
      <div class=header_content>
        <div class='logo'>
          <a href="/"></a>
        </div>
        <ul class='titile'>
          <li ><a href="<?php echo config('work.hqy_url'); ?>">首页</a></li>
          <li><a href="#">惠优税</a></li>
          <li class="nav-active"><a href="/">惠灵工</a></li>
          <li><a href="#">惠多薪</a></li>
          <li><a href="#">惠创业</a></li>
          <li><a href="#">惠找事</a></li>
          <li><a href="#">惠启动</a></li>
        </ul>
        <?php if(empty($userinfo['mobile'])): ?>
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
<?php endif; ?>
      </div>
    </div>-->

    <!-- <div class="nav-box">
      <div class="w nav-container clearfix">
        <div class="logo">
          <h1>
            <img src="/static/spirit/images/logo2xx.png">
          </h1>
        </div>
        <div class="nav">
          <ul class="clearfix">
            <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
            <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
            <li  class="nav-active"><a href="<?php echo url('/home/index/informationlist'); ?>">行业新闻资讯</a></li> -->
            <!--<li>-->
            <!--<?php if(empty($userinfo['userType'])): ?>-->
            <!--<a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="members_click(this)">会员通道</a>-->
            <!--<?php elseif($userinfo['userType'] == 'C'): ?>-->
            <!--<a href="javascript:void(0)">会员通道</a>-->
            <!--<?php else: ?>-->
            <!--<a href="<?php echo config('curl.redirect_url'); ?>/task/task">会员通道</a>-->
            <!--<?php endif; ?>-->

            <!--</li>-->
          <!-- </ul>
        </div> -->



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
      <!-- </div>
    </div> -->

    <!-- 导航部分 -->
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
                    <!-- <li><a href="<?php echo config('curl.website'); ?>">首页</a></li>
                    <li><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>
                    <li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
                    <li><a href="<?php echo url('/home/many/index'); ?>">惠多薪</a></li>
                    <li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>
                    <li><a href="<?php echo config('curl.hzs'); ?>">惠找事</a></li>
                    <li><a href="<?php echo url('/home/launch/index'); ?>">惠企动</a></li> -->
                    <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                    <li><a href="javascript:;">产品服务</a></li>
                    <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
                    <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
                    <li class="nav-active"><a href="<?php echo url('/home/index/informationlist'); ?>">行业新闻资讯</a></li>
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

    <div class='main_content'>
      <div class='content_middle'>
        <div class='bread_title'><a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠灵工</a> > <a onclick="go_news(this)" data-url="<?php echo url('/home/spirit/informationList'); ?>">资讯</a> > 新闻详情</div>
        <div class='pic_total'>
          <div class='pic_title'><?php echo $info['title']; ?></div>
          <div class='time'><?php echo $info['create_time']; ?></div>
          <div class='line'></div>
          <div class='tuwen'>
            <div class='wenzi'>
              <?php echo $info['content']; ?>
             </div>

            <div class='page'>
              <?php if(empty($top) || (($top instanceof \think\Collection || $top instanceof \think\Paginator ) && $top->isEmpty())): ?>
              <div><span>上一篇:</span><a href="#">已经是第一篇了</a></div>
              <?php else: ?>
              <div><span>上一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$top['id']]); ?>"><?php echo $top['title']; ?></a></div>
              <?php endif; if(empty($next) || (($next instanceof \think\Collection || $next instanceof \think\Paginator ) && $next->isEmpty())): ?>
              <div><span>下一篇:</span><a href="#">已经是最后一篇</a></div>
              <?php else: ?>
              <div><span>下一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$next['id']]); ?>"><?php echo $next['title']; ?></a></div>
              <?php endif; ?>
            </div>
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