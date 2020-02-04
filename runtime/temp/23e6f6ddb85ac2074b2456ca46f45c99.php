<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:88:"/Users/zhanwen/Desktop/thing/public/../application/home/view/index/information_list.html";i:1580793420;s:67:"/Users/zhanwen/Desktop/thing/application/home/view/common/logo.html";i:1580699706;s:68:"/Users/zhanwen/Desktop/thing/application/home/view/common/login.html";i:1580699706;s:69:"/Users/zhanwen/Desktop/thing/application/home/view/common/footer.html";i:1580699706;s:67:"/Users/zhanwen/Desktop/thing/application/home/view/common/left.html";i:1580699706;s:68:"/Users/zhanwen/Desktop/thing/application/home/view/common/alert.html";i:1580699706;}*/ ?>
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
  <meta name="keywords" content="用工节税新闻,用工行业资讯,税务筹划资讯,财税行业新闻,节税新闻,税务筹划新闻,惠灵工" />
  <meta name="description" content="惠灵工新闻资讯是包含海量灵活用工行业资讯的新闻服务平台,反映各行各业的用工新闻热点,热门用工财税话题、用工财税人物动态、用工财税产品资讯等,快速了解灵活用工行业的最新进展。">
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/spirit/font/syht.css">
  <link rel="stylesheet" href="/static/spirit/css/Informationlist.css">
  <link rel="stylesheet" href="/static/spirit/css/footer.css">
  <link rel="stylesheet" href="/static/spirit/css/alert.css">
  <link rel="stylesheet" href="/static/spirit/css/header_nav.css">
  <link rel="stylesheet" href="/static/spirit/css/left.css">
  <link rel="stylesheet" href="/static/spirit/css/news.css">
  <script src="/static/spirit/js/clamp.js"></script>
  <script src='/static/spirit/js/Informationlist.js'></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src='/static/spirit/js/spirit.js'></script>
  <script src='/static/common/js/public.js'></script>
</head>

<body>

  <div class='container'>

    <!-- nav部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo">
    <h1>
        <a href="<?php echo url('/home/index/index'); ?>">
            <img src="/static/spirit/images/logo2xxxx.png">
        </a>

    </h1>
</div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
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
        <!-- <div> -->
        <!-- <?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="javascript:void(0)" onclick="click_login(this)" location_url="<?php echo config('curl.hlg'); ?>" login_url="<?php echo config('curl.login_url'); ?>" target="_blank">
            登录
        </a></div>
    <div class="loging-btn"><a href="javascript:void(0)" onclick="click_register(this)" location_url="<?php echo config('curl.hlg'); ?>" register_url="<?php echo config('curl.register_url'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <div>
        <div class="u_info_img">
            <img src="/static/spirit/images/user_img.png" style="width:30px;height:30px; vertical-align: middle;">
        </div>
        <p id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    </div>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)" data-token="<?php echo $userinfo['token']; ?>"
            location_url="<?php echo config('curl.website'); ?>/home/login/hlg_logout" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?> -->
        <!-- </div> -->
        <!--<?php endif; ?>-->
        <!--登陆注册-->
        <!-- <?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="javascript:void(0)" onclick="click_login(this)" location_url="<?php echo config('curl.hlg'); ?>" login_url="<?php echo config('curl.login_url'); ?>" target="_blank">
            登录
        </a></div>
    <div class="loging-btn"><a href="javascript:void(0)" onclick="click_register(this)" location_url="<?php echo config('curl.hlg'); ?>" register_url="<?php echo config('curl.register_url'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <div>
        <div class="u_info_img">
            <img src="/static/spirit/images/user_img.png" style="width:30px;height:30px; vertical-align: middle;">
        </div>
        <p id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    </div>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)" data-token="<?php echo $userinfo['token']; ?>"
            location_url="<?php echo config('curl.website'); ?>/home/login/hlg_logout" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?> -->
      </div>

    </div>

    <!-- 头部部分 -->
    <div class='header-box'>
      <div class="w header">
        <div>新闻资讯</div>
        <div></div>
        <p>
          共享经济新浪潮 开启灵活用工新模式
        </p>
      </div>
    </div>



    <!-- 面包屑导航 -->
    <div class="content-box">
      <div class="w content">
        <div class="bread-crumbs">
          <b><a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠灵工</a></b> >
          <b><a onclick="go_news(this)" data-url="<?php echo url('/home/index/informationlist'); ?>">新闻资讯</a></b>

        </div>
        <div class="information-list">
          <div class="hotWord">

            <div class="bgHot">
              <span>热门关键词</span>
              <ul>
                <?php if(is_array($keylist) || $keylist instanceof \think\Collection || $keylist instanceof \think\Paginator): $i = 0; $__LIST__ = $keylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$kwords): $mod = ($i % 2 );++$i;?>
                <li>
                  <span onclick="hotsearch(this)" data-url="<?php echo url('home/index/getinfoapi'); ?>" data-href="<?php echo url('/home/index/detail'); ?>" 
                   data-title='<?php echo $kwords['title']; ?>'><?php echo $kwords['title']; ?></span>
                  <span class="close" onclick='nullhot(this)' data-href="<?php echo url('/home/index/detail'); ?>"
                        data-title='<?php echo $kwords['title']; ?>' data-url="<?php echo url('home/index/getinfoapi'); ?>">✕</span>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>

            </div>

            <div class="search-box">
              <input type="text" id="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>" placeholder="请输入关键字">
              <div onclick="search(this)" data-url="<?php echo url('/home/index/informationList'); ?>">搜索</div>
              <span onclick="window.location.href=$(this).attr('data-url');"
                data-url="<?php echo url('/home/index/informationList'); ?>"></span>
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
                      <div class="tabs-items-content-time"><span><img src="/static/spirit/images/shijian2x.png"
                            alt=""></span><span><?php echo $vo['create_time']; ?></span></div>
                    </div>
                    <div class="tabs-items-content-text figcaption">
                      <p><?php echo $vo['desc']; ?></p>
                    </div>
                    <div class="tabs-items-content-label">
                     <?php if(is_array($vo['keyword']) || $vo['keyword'] instanceof \think\Collection || $vo['keyword'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['keyword'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ko): $mod = ($i % 2 );++$i;?>
                      <span><?php echo $ko; ?></span>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                  </div>
                </a>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; endif; ?>

            </ul>
            <!--<input type="hidden" value="<?php echo \think\Request::instance()->get('keyword'); ?>" id="sid">-->
            <!--<input type="hidden" value="1" id="page">-->
            <!--<div class="more-btn" onclick="getMore($('#sid').val(),$('#page').val(),this)"-->
              <!--data-href="<?php echo url('/home/index/detail'); ?>" data-url="<?php echo url('/home/index/getpageInfo'); ?>">查看更多</div>-->
            <!--分页-->

          </div>
          <div class="pageNation" style="background: #fff;">
            <?php echo $list->render();; ?>
            <!--<ul class="page">-->
              <!--<li class="prev">上一页</li>-->
              <!--<li class="currentPage">1</li>-->
              <!--<li>2</li>-->
              <!--<li class="next">下一页</li>-->
            <!--</ul>-->
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
                惠企云旗下【惠灵工】，立足“互联网+”共享新经济，专业为企业和自由职业者提供灵活用工综合服务平台。
            </p>
        </div>
        <div class="w navBottom">
            <div class="navList">
                <dl>
                    <dt>惠企云旗下产品</dt>
                    <dd><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></dd>
                    <dd><a href="<?php echo config('curl.hys'); ?>">惠优税</a></dd>
                    <dd><a href="javascript:;">惠多薪</a></dd>
                    <dd><a href="javascript:;">惠创业</a></dd>
                    <dd><a href="javascript:;">惠找事</a></dd>
                </dl>
                <dl>
                    <dt>惠灵工</dt>
                    <dd><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></dd>
                    <dd><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></dd>
                    <dd><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></dd>
                    <dd><a href="javascript:;">招商合作</a></dd>
                </dl>
                <dl>
                    <dt>客服热线</dt>
                    <dd><a href="javascript:;">400-150-9896</a></dd>
                    <dd><a href="javascript:;">181-8619-4461</a></dd>
                </dl>
                <dl>
                    <dt>办公地址</dt>
                    <dd><a href="javascript:;">武汉市硚口区南国大武汉H座</a></dd>
                    <dd><a href="javascript:;">深圳市福田区第一世界广场A座</a></dd>
                    <dd><a href="javascript:;">北京市西城区贵都国际中心B座</a></dd>
                </dl>
            </div>

            <ul class="qrCode">
                <li>
                    <div class="pic">
                        <img src="/static/spirit/images/weixincode.png" alt="">
                    </div>
                    <span><img src="/static/spirit/images/weixinicon.png" alt="">微信扫码关注</span>
                    <i>及时获知一手财税信息</i>
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
    <div onclick="GetErp();">
        <div class="bottom-title">咨询方案</div>
        <!-- <div class="bottom-item">
            <div class="hqy"><a href="<?php echo config('curl.website'); ?>">惠企云</a></div>
            <ul>
                <li><a href="<?php echo config('curl.hys'); ?>">惠优税</a></li>
                <li><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠多薪</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠找事</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠创业</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠企动</a></li>
            </ul>
        </div> -->
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
                <p>400-150-9896</p>
            </div>
        </div>
    </div>
    <!-- 返回顶部 -->
    <div class='goTop' id="goTop">
        <div><img src="/static/spirit/images/top@2x.png" alt=""></div>
        <div>顶部</div>
    </div>
</div>

    <!-- 弹窗 -->
    <div class="pop-up-box" id="popbox">
    <div class="form">
        <div class="form-titile">
            <p>方案咨询</p>
            <span class="turnoff" onclick="turnoff()"></span>
        </div>
        <div class="form-content">
            <div>
                <div><span class="title">您的姓名</span><input type="text" id="contactName" placeholder="请输入你的名字"></div>
                <div><span class="title">联系方式</span><input type="text" id="contactMobile" placeholder="请输入你的联系方式">
                </div>
                <div><span class="title">您的公司</span><input type="text" id="companyName" placeholder="请输入你的公司"></div>
                <input type='hidden' id='sources' value='惠灵工'>
                <input type='hidden' id='identifications' value='灵活用工'>
                <div class="form-btn" onclick="form_btn()">获取方案</div>
            </div>
        </div>
        <!-- 提交成果后弹窗 -->
        <div class="mask-box2">
            <span></span>
            <p class="mask-box-title">提交成功</p>
            <p class="mask-box-content">我们会在一个工作日内联系您</p>
        </div>
    </div>

</div>

  </div>
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
    /* 选择热词 */
    $('.hotWord ul li').click(function (e) {
      if (!$(this).hasClass('chosen')) {
        $(this).addClass('chosen')
      }
    })
    $('.hotWord ul li .close').click(function (e) {
      e.stopPropagation()
      $(this).parent().removeClass("chosen")
    })
  </script>
</body>

</html>