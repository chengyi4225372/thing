<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"C:\phpEnv\www\thing\public/../application/home\view\optimal\cooperation.html";i:1576749781;s:58:"C:\phpEnv\www\thing\application\home\view\common\logo.html";i:1576806158;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1576749781;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>招商合作</title>
    <link rel="stylesheet" href="/static/spirit/css/base.css">
    <link rel="stylesheet" href="/static/spirit/css/optimal.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body style="background-color:#f5f5f5;">
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
            location_url="<?php echo url('/home/index/index'); ?>" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?>
        </div>

    </div>
    <div class="fourzerofour-box">
        <div class="fourzerofour">
            <img src="/static/error_pic.png">
        </div>
        <div>正在建设中...</div>
        <div class="goHome">
            <span><i class="clock">3</i>秒后返回首页</span>
            <a href="<?php echo url('/home/index/index'); ?>">点击跳转</a>
        </div>
    </div>
    </div>
</body>

<script>
    $(function () {
        var count = 3;
        var timer = setInterval(function () {
            $('.clock').html(count);
            count--;
            if (count < 0) {
                clearInterval(timer)
                location.href = "<?php echo url('/home/index/index'); ?>"
            }
        }, 1000)

    })
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
        if ($('.chosenPage').length < 1) $('.nav ul li').eq(0).addClass('chosenPage')

        $('.chosenPage').addClass('nav-active')
    })
</script>

</html>