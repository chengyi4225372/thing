<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"C:\phpEnv\www\thing\public/../application/home\view\index\clientcase.html";i:1575367745;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575367745;}*/ ?>
<!DOCTYPE >
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <img src="/static/spirit/images/logo2xx.png">
                    </h1>
                </div>
                <!-- nav部分 -->
                <div class="nav">
                    <ul class="clearfix">
                        <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
                        <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
                        <li class="nav-active"><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
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
        <div class='header-box'></div>

        <!-- 面包屑 -->
        <div class="crumbs">
            <div class="crumbs-box w">
                <span><a href="<?php echo url('/home/index/index'); ?>">惠灵工></a></span>
                <span> 客户案例</span>
            </div>
        </div>

        <!-- 客户案例 -->
        <div class="bg_tab">
            <div class="tabBox w">
                <ul class="clearfix">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li>
                        <div class="item-img"><img src="/static/spirit/images/anli1.png" alt=""></div>
                        <div class="item-content">
                            <p>
                                <?php echo $item['title']; ?>
                            </p>
                            <p>
                                <?php echo $item['describe']; ?>
                            </p>
                            <a href="<?php echo url('/home/index/casedetail',['id' => $item['id']]); ?>"> 查看案例>> </a>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>


                </ul>
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

    <!-- 侧边栏bottom资讯 -->
    <!-- <div class="bottom"> -->
    <!-- <div>
        <div class="bottom-title">立即预约咨询</div>
        <div class="bottom-item2 order">
          <div>
            <p>专家服务电话</p>
            <p>181-8619-4461</p>
          </div>
          <div>
            <p>获取税筹方案</p>
            <p>400-150-9898</p>
          </div>
        </div>
      </div>
      <div>
        <div class="bottom-title">联系我们</div>
        <div class="bottom-item2">
          <div>
            <p>专家服务电话</p>
            <p>181-8619-4461</p>
          </div>
          <div>
            <p>获取税筹方案</p>
            <p>400-150-9898</p>
          </div>
        </div>
      </div> -->
    <!-- 返回顶部 -->
    <!-- <div class='goTop' id="goTop">
        <div><img src="/static/home/images/top@2x.png" alt=""></div>
        <div>顶部</div>
      </div>
    </div> -->


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