<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\phpEnv\www\thing\public/../application/home\view\index\productservice.html";i:1575857039;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575280539;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
    <link rel="stylesheet" href="/static/spirit/css/base.css">
    <link rel="stylesheet" href="/static/spirit/css/product _service.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/spirit/js/clamp.js"></script>
    <script src='/static/spirit/js/product _service.js'></script>

    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/spirit/js/spirit.js"></script>
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
                            <li class="nav-active"><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
                            <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
                            <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
                            <li><a href="<?php echo url('/home/index/informationlist'); ?>">行业新闻资讯</a></li>
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


        <!-- 头部 -->
        <div class='header-box'>
            <img src="/static/spirit/images/bannerchanping.png" alt="">
        </div>

        <!-- 共享经济服务平台 -->
        <div class="serves-box">
            <div class="w serves">
                <div><img src="/static/spirit/images/fuwupingtai1.png" alt=""></div>
                <div><img src="/static/spirit/images/fuwupingtai2.png" alt=""></div>
            </div>
        </div>

        <!-- 为什么选择我们 -->
        <div class="difficulty-box">
            <div class="w">
                <div><img src="/static/spirit/images/xuanzewomen1.png" alt=""></div>
            </div>
        </div>
        <div class="difficulty-box2">
            <div class="w">
                <div><img src="/static/spirit/images/xuanzewomen2.png" alt=""></div>
            </div>
        </div>

        <!-- 应用场景 -->
        <div class="project-box">
            <div class="w">
                <div><img src="/static/spirit/images/yinyongchangjin.png" alt=""></div>
            </div>
        </div>

        <!-- 客服电话 -->
        <div class="reason-box">
            <div class="w">
                <div><img src="/static/spirit/images/kefu.png" alt=""></div>
            </div>
        </div>

        <!-- 底部 -->
        <div class="fotter-box">
            <div class="w fotter">
                <div class='parter_catefories'>
                    <dl>
                        <dt><a href="#">服务产品</a></dt>
                        <dd><a href="#">服务型税筹</a></dd>
                        <dd><a href="#">门户型税筹</a></dd>
                        <dd><a href="#">人力资源</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">招商政策</a></dt>
                        <dd><a href="#">招商政策网</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">合作</a></dt>
                        <dd><a href="#">代理合作</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">公司信息</a></dt>
                        <dd><a href="#">瑟维斯有限公司</a></dd>
                        <dd><a href="#">惠创优产业联盟</a></dd>
                        <dd><a href="#">中兴瑞华有限公司</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">联系我们</a></dt>
                        <dd><a href="#">400-150-9896</a></dd>
                        <dd><a href="#">hcylm008@dingtalk.com</a></dd>
                        <dd><a href="#">武汉市硚口区南国大武汉H座18楼</a></dd>
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

        <!-- 弹框 -->
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
                <div class="mask-box">
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
        if ($('.chosenPage').length < 1) $('.nav ul li').eq(1).addClass('chosenPage')

        $('.chosenPage').addClass('nav-active')
    })
</script>

</html>