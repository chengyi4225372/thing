<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:68:"C:\phpEnv\www\thing\public/../application/home\view\index\index.html";i:1577071907;s:58:"C:\phpEnv\www\thing\application\home\view\common\logo.html";i:1577062600;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1577149479;s:60:"C:\phpEnv\www\thing\application\home\view\common\footer.html";i:1577090138;s:63:"C:\phpEnv\www\thing\application\home\view\common\leftIndex.html";i:1577090140;s:59:"C:\phpEnv\www\thing\application\home\view\common\alert.html";i:1577071907;}*/ ?>
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
  <title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/assets/plugins/layui/css/layui.css">
  <link rel="stylesheet" href="/static/spirit/font/syht.css">
  <link rel="stylesheet" href="/static/spirit/css/index.css">
  <link rel="stylesheet" href="/static/spirit/css/footer.css">
  <link rel="stylesheet" href="/static/spirit/css/alert.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/spirit/js/clamp.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src="/static/spirit/js/spirit.js"></script>
  <script src='/static/common/js/public.js'></script>
  <script src='/static/spirit/js/index.js'></script>

</head>

<body>

  <div class='container'>

    <!-- 导航部分 -->
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
            <li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
            <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
            <li><a href="<?php echo url('/home/index/informationlist'); ?>">新闻资讯</a></li>
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



         <!--登陆注册-->
      <?php if(empty($userinfo['mobile'])): ?>
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
<?php endif; ?>
      </div>

    </div>


    <!-- 轮播图 -->
    <div class="layui-carousel" id="swiper">
      <div carousel-item="">
        <div><img src="/static/spirit/images/BANNER01.png"></div>
        <div><img src="/static/spirit/images/BANNER02.png"></div>
        <div><img src="/static/spirit/images/BANNER03.png"></div>
      </div>
    </div>

    <!-- 头部 -->
    <div class='header-box'>
      <!-- 头部图标 -->
      <div class='header-container clearfix'>
        <div>
          <div class="header-form-right fr">
            <p class="header-right-title">想拥有更专业的方案吗？</p>
            <div class="header-right-input">
              <input type="text" value="" id="Name" placeholder="您的姓名">
              <input type="text" value="" id="Mobile" placeholder="联系方式">
              <input type="text" value="" id="cName" placeholder="您的公司">
              <input type='hidden' id='source' value='惠灵工'>
              <input type='hidden' id='identification' value='灵活用工'>
            </div>
            <div class="header-right-btn" style="cursor:pointer;" onclick="btnErp()">获取方案</div>
            <!-- 提交成果后弹窗 -->
            <div class="mask-box1">
              <span></span>
              <p class="mask-box-title">提交成功</p>
              <p class="mask-box-content">我们会在一个工作日内联系您</p>
            </div>
          </div>
        </div>
        <!-- <div class="focus-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->
      </div>

    </div>
    <!-- 服务分类 -->
    <div class="serves-box">
      <div class="w serves clearfix">
        <div class="serve-item fl">
          <div class="serve-item-img firstImg">
            <img src="/static/spirit/images/yonghu2x.png" alt="">
          </div>
          <div class="serve-item-text">
            <p>领先平台</p>
            <p>良性优化用工场景</p>
            <p>税收优惠合法合规</p>
            <div class="serve-item-btn">
              <div class="btn" onclick="GetErp()">获取方案</div>
            </div>
          </div>
        </div>
        <div class="serve-item fl">
          <div class="serve-item-img">
            <img src="/static/spirit/images/qianbao2X.png" alt="">
          </div>
          <div class="serve-item-text">
            <p>服务保证</p>
            <p>专家团队服务保障</p>
            <p>全方位定制解决方案</p>
            <div class="serve-item-btn">
              <div class="btn" onclick="GetErp()">获取方案</div>
            </div>
          </div>
        </div>
        <div class="serve-item fl">
          <div class="serve-item-img">
            <img src="/static/spirit/images/fuwuxing2x.png" alt="">
          </div>
          <div class="serve-item-text">
            <p>高效赋能</p>
            <p>人力结构管理升级</p>
            <p>全面赋能企业发展</p>
            <div class="serve-item-btn">
              <div class="btn" onclick="GetErp()">获取方案</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 企业面临难题 -->
    <div class="difficulty-box">
      <div class="w difficulty">
        <div class="difficulty-title">
          <p>企业面临的难题</p>
        </div>
        <div class="difficulty-items">
          <ul class="clearfix">
            <li class="difficulty-item">
              <div class="difficulty-item-img">
                <img src="/static/spirit/images/qiyewentishuiwu.jpg" alt="">
              </div>
              <div class="difficulty-item-title">
                <p>税务管理压力</p>
                <p>企业进项发票少成本高</p>
                <p>账务上虚假开票有风险</p>
              </div>
            </li>
            <li class="difficulty-item">
              <div class="difficulty-item-img">
                <img src="/static/spirit/images/qitewentiyewu.jpg" alt="">
              </div>
              <div class="difficulty-item-title">
                <p>业务成本压力</p>
                <p>内部配置个税成本较高</p>
                <p>为同行间竞争埋下隐患</p>
              </div>
            </li>
            <li class="difficulty-item">
              <div class="difficulty-item-img">
                <img src="/static/spirit/images/qiyewentiyongren2X.jpg" alt="">
              </div>
              <div class="difficulty-item-title">
                <p>用人成本压力</p>
                <p>自由职业者结算体量大</p>
                <p>报酬发放难以满足需求</p>
              </div>
            </li>
            <li class="difficulty-item">
              <div class="difficulty-item-img">
                <img src="/static/spirit/images/qiyewentixingxi2X.jpg" alt="">
              </div>
              <div class="difficulty-item-title">
                <p>信息管理挑战</p>
                <p>自由职业者地域太分散</p>
                <p>管理难度大风险难把控</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 解决方案 -->
    <div class="project-box">
      <div class="w project">
        <div class="project-title">
          <p>我们的解决方案</p>
        </div>
        <div class="project-text">
          共享经济新浪潮，惠灵工平台开启企业灵活用工新模式，将“企业和员工之间的雇佣关系”，转变为“企业与个人间的商务合作关系”
          通过平台一站式完成任务派发、费用结算支付、开票和代扣税，合法合规的进行灵活用工、结算支付和财税优化。
        </div>
        <!-- tab栏切换 -->
        <div class="project-items">
          <ul class="clearfix">
            <li class="project-tabs tab-active">转变关系</li>
            <li class="project-tabs">成本抵扣</li>
            <li class="project-tabs">效果付费</li>
            <li class="project-tabs">优享政策</li>
          </ul>
          <div class="project-tabs-items show">
            <p>转变灵活用工方式合理提高个人收益，规避企业风险</p>
            <p>企业内部组织变革，重构企业与个人的关系。个人一键创业成为创客，以灵活用工方式与企业形成合作关系，合理解除用工劳动关系风险。</p>
            <div class="project-btn" onclick="GetErp()">立即咨询</div>
          </div>
          <div class="project-tabs-items">
            <p>合理开出可用于进项抵扣的增值税专票</p>
            <p>个人通过平台承包项目，按项目服务效果获取服务费，即“项目应收款”，而非雇佣关系下的薪酬工资。平台给发包方企业提供增值税专票，可用于进项抵扣和费用抵减。</p>
            <div class="project-btn" onclick="GetErp()">立即咨询</div>
          </div>
          <div class="project-tabs-items">
            <p>达到标准后付费，保障企业权益</p>
            <p>企业通过平台将业务形成一个个标准件外包出去，并按服务效果付费，通过每个标准件的盈利最终达到企业所有业务均盈利的目的。</p>
            <div class="project-btn" onclick="GetErp()">立即咨询</div>
          </div>
          <div class="project-tabs-items">
            <p>合理享受各项政策，让企业减负前行</p>
            <p>平台注册的创客享受国家税收优惠政策，政府支持，企业认可，创客欢迎。平台对外开放且有严格的风控制度，综合性服务让企业安心、省心。</p>
            <div class="project-btn" onclick="GetErp()">立即咨询</div>
          </div>
        </div>

      </div>
    </div>

    <!-- 选择理由 -->
    <div class="reason-box">
      <div class="w reason">
        <div class="reason-title">
          <p>选择我们的理由</p>
        </div>
        <div class="reason-text">
          平台产品基于国家政策，为您制作合规化方案； 金牌顾问团队，多年人力、财税、政府等经验， 能够在合规化的基础上致力于解决客户实际问题。
        </div>
        <div class="reason-content clearfix">
          <div class="reason-content-items fl">
            <div class="reason-content-item">
              <div class="reason-content-item-img">
                <img src="/static/spirit/images/liyouxuanzhuan@2x.png" alt="">
              </div>
              <div class="reason-content-item-text">
                <p>合法合规</p>
                <p>低税率&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp政策减免&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp合规发票
                </p>
              </div>
            </div>
            <div class="reason-content-item">
              <div class="reason-content-item-img">
                <img src="/static/spirit/images/liyouyingbi2x.png" alt="">
              </div>
              <div class="reason-content-item-text">
                <p>成本风险控制</p>
                <p>人力资源&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp风险转移&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp成果付费
                </p>
              </div>
            </div>
            <div class="reason-content-item">
              <div class="reason-content-item-img">
                <img src="/static/spirit/images/liyou3D2x.png" alt="">
              </div>
              <div class="reason-content-item-text">
                <p>三流合一</p>
                <p>服务流&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp资金流&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp发票流</p>
              </div>
            </div>
          </div>
          <div class="reason-content-img">
            <img src="/static/spirit/images/liyou22x.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- 方案流程 -->
    <div class="process-box">
      <div class="w process">
        <div class="process-title">
          <p>方案流程</p>
        </div>
        <div class="process-text">
          惠灵工服务体系业务逻辑流程图
        </div>
        <div class="process-img">
          <img src="/static/spirit/images/liucheng2x.png" alt="">
        </div>
      </div>
    </div>

    <!-- 行业资讯 -->
    <div class="consulting-box">
      <div class="w consulting">
        <div class="consulting-title">
          <p>行业资讯</p>
        </div>
        <div class="consulting-text">
          行业动态抢先看，创新与进步只为给您带来卓越体验
        </div>
        <div class="consulting-items">
          <ul>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="industryItem">
              <div class="itemImg">
                <div class="shadow"></div>
                <img src="<?php echo (isset($vo['imgs']) && ($vo['imgs'] !== '')?$vo['imgs']:''); ?>" alt="">
              </div>

              <div class="itemContent">
                <div class="bottomContent">
                  <p class="conTitle limit1"><?php echo $vo['title']; ?></p>
                  <p class="conTime"><?php echo $vo['create_time']; ?></p>
                  <p class="conDetail limit2">
                    <?php echo mb_substr($vo['desc'],0,70,'utf-8'); ?>...
                  </p>
                </div>
                <div class="separate"></div>
              </div>
              <div class="conBtn">
                <div class="more">
                  <a href="<?php echo config('curl.hlg'); ?>/home/index/informationlist">了解更多</a>
                </div>
              </div>

            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
    </div>

    <!-- 从薪开始 -->
    <div class="salary-box">
      <div class="salary">
        <div>从“薪”开始，用工无忧</div>
        <div>企业“薪、税、酬”全用工链一体化解决方案</div>
        <div><a onclick="GetErp()">获取方案</a></div>
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
    <div>
        <div class="bottom-title">惠家族产品</div>
        <div class="bottom-item">
            <div class="hqy"><a href="<?php echo config('curl.website'); ?>">惠企云</a></div>
            <ul>
                <li><a href="<?php echo config('curl.hys'); ?>">惠优税</a></li>
                <li><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠多薪</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠找事</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠创业</a></li>
                <li><a href="javascript:void(0)" style="color: rgba(220, 220, 220, 0.6);cursor: default; border-bottom: 1px solid rgba(220, 220, 220, 0.6);">惠企动</a></li>
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
            <div><span class="title">您的姓名</span><input type="text" id="contactName" placeholder="请输入你的名字"></div>
            <div><span class="title">联系方式</span><input type="text" id="contactMobile" placeholder="请输入你的联系方式">
            </div>
            <div><span class="title">您的公司</span><input type="text" id="companyName" placeholder="请输入你的公司"></div>
            <input type='hidden' id='sources' value='惠灵工'>
            <input type='hidden' id='identifications' value='灵活用工'>
            <div class="form-btn" onclick="form_btn()">获取方案</div>
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

</body>
<script>
  $('.nav ul li').on('click', function () {
    $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
  })
  $('.nav ul li').on('mouseenter', function () {
    $(this).addClass('nav-active').siblings().removeClass('nav-active')
  })
  $('.nav-box').on('mouseleave', function () {
    $('.nav ul li').removeClass('nav-active')
    if ($('.chosenPage').length < 1) $('.nav ul li').eq(0).addClass('chosenPage')

    $('.chosenPage').addClass('nav-active')
  })
</script>

</html>