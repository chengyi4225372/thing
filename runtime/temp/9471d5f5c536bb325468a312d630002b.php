<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\phpEnv\www\thing\public/../application/home\view\index\detail.html";i:1576566516;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575280539;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit" />
  <meta name="force-rendering" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

    <!-- 导航部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo">
          <h1>
            <img src="/static/spirit/images/logo2xxx.png">
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
            <li class="nav-active"><a href="<?php echo url('/home/index/informationlist'); ?>">新闻资讯</a></li>
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

    <!-- 头部部分 -->
    <div class='header-box'>
      <div class="w header">
        <div>新闻资讯</div>
        <div></div>
        <p>
          不同行业的业务特点和管理要求差别很大，但无论是哪个行业的企业，都会有三个基本诉求：<br>
          经营合法合规、 降低企业成本、 规避意外风险!
        </p>
      </div>
    </div>

    <!-- 内容部分 -->
    <div class='main_content'>
      <div class='content_middle'>
        <div class='bread_title'>
          <b><a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠灵工</a></b> >
          <b><a onclick="go_news(this)" data-url="<?php echo url('/home/index/informationlist'); ?>">新闻资讯</a></b> >
          <b class="current">新闻详情</b>
        </div>
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
              <div><span>上一篇:</span><a href="javascript:;">已经是第一篇了</a></div>
              <?php else: ?>
              <div><span>上一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$top['id']]); ?>"><?php echo $top['title']; ?></a></div>
              <?php endif; if(empty($next) || (($next instanceof \think\Collection || $next instanceof \think\Paginator ) && $next->isEmpty())): ?>
              <div><span>下一篇:</span><a href="javascript:;">已经是最后一篇</a></div>
              <?php else: ?>
              <div><span>下一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$next['id']]); ?>"><?php echo $next['title']; ?></a></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- 底部 -->
    <div class="bottomBox">
      <div class="w bottom">
        <div class="aboutUs">
          <span>关于我们</span>
          <p>
            惠企云旗下【惠灵工】,立足“互联网+”共享新经济，专业为企业和自由职业者提供灵活用工综合服务平台。
          </p>
        </div>
        <div class="w navBottom">
          <div class="navList">
            <dl>
              <dt>惠企云旗下产品</dt>
              <dd><a href="javascript:;">惠灵工</a></dd>
              <dd><a href="javascript:;">惠优税</a></dd>
              <dd><a href="javascript:;">惠多薪</a></dd>
              <dd><a href="javascript:;">惠创业</a></dd>
              <dd><a href="javascript:;">惠找事</a></dd>
            </dl>
            <dl>
              <dt>惠灵工</dt>
              <dd><a href="javascript:;">行业解决方案</a></dd>
              <dd><a href="javascript:;">产品服务</a></dd>
              <dd><a href="javascript:;">客户案例</a></dd>
              <dd><a href="javascript:;">招商合作</a></dd>
            </dl>
            <dl>
              <dt>客服热线</dt>
              <dd>400-150-9896</dd>
              <dd>18186194461</dd>
            </dl>
            <dl>
              <dt>办公地址</dt>
              <dd>武汉市硚口区南国大武汉H座</dd>
              <dd>深圳市福田区第一世界广场A座</dd>
              <dd>北京市西城区贵都国际中心B座</dd>
            </dl>
          </div>

          <ul class="qrCode">
            <li>
              <div class="pic">
                <img src="/static/spirit/images/weixincode.png" alt="">
              </div>
              <span><img src="/static/spirit/images/weixinicon.png" alt="">微信扫码关注</span>
              <i>及时获一手财税信息</i>
            </li>
            <li>
              <div class="pic">
                <img src="/static/spirit/images/weibocode.png" alt="">
              </div>
              <span><img src="/static/spirit/images/weiboicon.png" alt="">惠企云微博</span>
              <!-- <i>及时获一手财税信息</i> -->
            </li>
          </ul>
        </div>
      </div>
      <div class="w copyRight">©&nbsp;Copyright&nbsp;2019&nbsp;惠企动（湖北）科技有限公司&nbsp;.&nbsp;All Rights
        Reserved&nbsp;ICP证
        :
        鄂ICP备16008680号-3</div>

    </div>
    <!-- 侧边栏bottom资讯 -->
    <div class="bottom-left">
      <div>
        <div class="bottom-title">惠家族产品</div>
        <div class="bottom-item">
          <div class="hqy"><a href="<?php echo config('curl.website'); ?>">惠企云</a></div>
          <ul>
            <li><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>
            <li><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
            <li><a href="<?php echo url('/home/launch/index'); ?>">惠多薪</a></li>
            <li><a href="<?php echo url('/home/searches/index'); ?>">惠找事</a></li>
            <li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>
            <li><a href="<?php echo url('/home/launch/index'); ?>">惠企动</a></li>
          </ul>
        </div>
      </div>
      <div>
        <div class="bottom-title2">联系我们</div>
        <div class="bottom-item2">
          <div>
            <p>立即预约咨询</p>
            <p>181-8619-4461</p>
          </div>
          <div>
            <p>获取税筹方案</p>
            <p>400-150-9898</p>
          </div>
        </div>
      </div>
      <!-- 返回顶部 -->
      <div class='goTop' id="goTop">
        <div><img src="/static/spirit/images/top@2x.png" alt=""></div>
        <div>顶部</div>
      </div>
    </div>
    <!-- 返回顶部 -->
    <!-- <div class='goTop' id="goTop">
      <i></i>
      <div>返回顶部</div>
    </div> -->

  </div>
  <script>
    // 返回顶部
    window.onscroll = function () {
      var top = document.body.scrollTop || document.documentElement.scrollTop;

      if (top >= 1080) {
        let goTop = document.getElementById('goTop')
        goTop.style.display = "block"

        // console.log(goTop);
        var timer = null;
        goTop.onclick = function () {
          cancelAnimationFrame(timer);
          //获取当前毫秒数
          var startTime = +new Date();
          //获取当前页面的滚动高度
          var b = document.body.scrollTop || document.documentElement.scrollTop;
          var d = 500;
          var c = b;
          timer = requestAnimationFrame(function func() {
            var t = d - Math.max(0, startTime - (+new Date()) + d);
            document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
            timer = requestAnimationFrame(func);
            if (t == d) {
              cancelAnimationFrame(timer);
            }
          });
        }
      } else if (top < 1080) {

        // 返回顶部样式
        let goTop = document.getElementById('goTop')
        goTop.style.display = "none"

      }
    }
  </script>
  <script>
    $('.nav ul li').on('click', function () {
      $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
    })
    $('.nav ul li').on('mouseenter', function () {
      $(this).addClass('nav-active').siblings().removeClass('nav-active')
    })
    $('.nav-box').on('mouseleave', function () {
      $('.nav ul li').removeClass('nav-active')
      if ($('.chosenPage').length < 1) $('.nav ul li').eq(4).addClass('chosenPage')

      $('.chosenPage').addClass('nav-active')
    })
  </script>
</body>

</html>