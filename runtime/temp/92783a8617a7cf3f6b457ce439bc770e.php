<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"C:\phpEnv\www\thing\public/../application/home\view\index\clientcase.html";i:1576656531;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1576656349;s:60:"C:\phpEnv\www\thing\application\home\view\common\footer.html";i:1576652467;s:58:"C:\phpEnv\www\thing\application\home\view\common\left.html";i:1576652467;}*/ ?>
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
    <link rel="stylesheet" href="/static/spirit/css/clientcase.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/spirit/js/clamp.js"></script>
    <script src='/static/spirit/js/clientcase.js'></script>

    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/spirit/js/spirit.js"></script>
    <script src='/static/common/js/public.js'></script>
</head>

<body>
    <div class="container">
        <!-- 导航部分 -->
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
                        <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
                        <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
                        <li class="nav-active"><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
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



                <!-- 登陆注册 -->
                <!--<?php if(empty($userinfo['mobile'])): ?>-->
                <!--<div class="loging clearfix">-->
                <!--<div class="register-btn"><a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="login_btn(this)">-->
                <!--登录-->
                <!--</a></div>-->
                <!--<div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>-->
                <!--</div>-->
                <!--<?php else: ?>-->
                <!--<div>-->
                <!--<?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="<?php echo $baseurl; ?>" target="_blank">
            登陆
        </a></div>
    <div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>
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
<?php endif; ?>-->
                <!--</div>-->
                <!--<?php endif; ?>-->
            </div>

        </div>

        <!-- 头部 -->
        <div class='header-box'>
            <div class="w header">
                <div>客户案例</div>
                <div></div>
                <p>
                    优化财税管理，助力企业全速发展
                </p>
            </div>
        </div>

        <!-- 面包屑 -->
        <div class="crumbs">
            <div class="crumbs-box w">
                <b><a href="<?php echo url('/home/index/index'); ?>">惠灵工></a></b>
                <b> 客户案例</b>
            </div>
        </div>

        <!-- 客户案例 -->
        <div class="bg_tab">
            <div class="tabBox w">
                <ul class="clearfix">

                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('/home/index/casedetail',['id'=>$vo['id']]); ?>">
                            <div class="item-img">
                                <img src="<?php echo !empty($vo['imgs'])?$vo['imgs']:''; ?>" alt="">
                            </div>
                            <div class="item-content">
                                <p><?php echo $vo['title']; ?></p>
                                <p><?php echo mb_substr($vo['describes'],'0','38','utf-8'); ?></p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

                    <!--
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem2.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    揭秘网红一哥李佳琦千万收入的合理避税方案
                                </p>
                                <p>
                                    公开数据显示，双11全天，淘宝直播带来的成交接近200亿，超过10个直播间引导成交过亿。随着李佳琦和薇娅的走红。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem3.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    灵活用工市场潜力爆发,惠灵工让青年白领用工更加高效
                                </p>
                                <p>
                                    最新调查发现，企业招聘的灵活用工人才大多为中高层管理人员，有时甚至是领导层人员。向着白领、金领以及一些高端技术岗位蔓延。
                                </p>

                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem4.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    直销类企业如何避免税务合规风险，提升企业劳动力效能？
                                </p>
                                <p>
                                    随着中国经济进入新常态，国内经济结构发生变化，在互联网与科技发展之下，众多如服务、新零售、互联网等行业开始倾向多元化用工方式。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem5.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    揭秘网红一哥李佳琦千万收入的合理避税方案
                                </p>
                                <p>
                                    公开数据显示，双11全天，淘宝直播带来的成交接近200亿，超过10个直播间引导成交过亿。随着李佳琦和薇娅的走红。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem6.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    灵活用工市场潜力爆发,惠灵工让青年白领用工更加高效
                                </p>
                                <p>
                                    最新调查发现，企业招聘的灵活用工人才大多为中高层管理人员，有时甚至是领导层人员。向着白领、金领以及一些高端技术岗位蔓延。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem7.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    直销类企业如何避免税务合规风险，提升企业劳动力效能？
                                </p>
                                <p>
                                    随着中国经济进入新常态，国内经济结构发生变化，在互联网与科技发展之下，众多如服务、新零售、互联网等行业开始倾向多元化用工方式。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem8.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    揭秘网红一哥李佳琦千万收入的合理避税方案
                                </p>
                                <p>
                                    公开数据显示，双11全天，淘宝直播带来的成交接近200亿，超过10个直播间引导成交过亿。随着李佳琦和薇娅的走红。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-img">
                                <img src="/static/spirit/images/clientcaseitem9.png" alt="">
                            </div>
                            <div class="item-content">
                                <p>
                                    灵活用工市场潜力爆发,惠灵工让青年白领用工更加高效
                                </p>
                                <p>
                                    最新调查发现，企业招聘的灵活用工人才大多为中高层管理人员，有时甚至是领导层人员。向着白领、金领以及一些高端技术岗位蔓延。
                                </p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>

                        </a>
                    </li>
                    -->
                </ul>
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
                    <dd><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></dd>
                    <dd><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></dd>
                    <dd><a href="<?php echo url('/home/launch/index'); ?>">惠多薪</a></dd>
                    <dd><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></dd>
                    <dd><a href="<?php echo url('/home/searches/index'); ?>">惠找事</a></dd>
                </dl>
                <dl>
                    <dt>惠灵工</dt>
                    <dd><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></dd>
                    <dd><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></dd>
                    <dd><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></dd>
                    <dd><a href="<?php echo url('/home/optimal/cooperation'); ?>">招商合作</a></dd>
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
                    <i>及时获知一手财税消息</i>
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




</body>
<script>

    $(function () {

        $('.nav ul li').on('click', function () {
            $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
        })
        $('.nav ul li').on('mouseenter', function () {
            $(this).addClass('nav-active').siblings().removeClass('nav-active')
        })
        $('.nav-box').on('mouseleave', function () {
            $('.nav ul li').removeClass('nav-active')
            if ($('.chosenPage').length < 1) $('.nav ul li').eq(3).addClass('chosenPage')

            $('.chosenPage').addClass('nav-active')
        })

        $('.tab ul li').on('click', function () {
            $('.tabCon img').attr('src', `/static/spirit/images/${$(this).index()}case.png`)
            $('.tabTitle').html($(this).children().html())
            $(this).addClass('activeTab').siblings().removeClass('activeTab')
        })
    })
</script>

</html>