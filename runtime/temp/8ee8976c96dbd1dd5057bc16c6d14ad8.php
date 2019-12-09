<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\phpEnv\www\thing\public/../application/home\view\index\index.html";i:1575855524;s:59:"C:\phpEnv\www\thing\application\home\view\common\login.html";i:1575280539;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
    <title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
    <link rel="stylesheet" href="/static/spirit/css/base.css">
    <link rel="stylesheet" href="/static/spirit/css/index.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/spirit/js/clamp.js"></script>
    <script src='/static/spirit/js/index.js'></script>

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
                        <li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
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
            <!-- 头部图标 -->
            <div class='w header-container clearfix'>
                <div>
                    <div class="header-text-left fl">
                        <p class="header-left-title">共享经济双创支撑云平台</p>
                        <div class="linestyle"></div>
                        <p class="header-left-title2">合法合规 / 财税优化 / 高效结算</p>
                        <p class="header-left-title3">依托于互联网力量的综合税优服务体系 打造分散产能整合共享的灵活用工平台
                        </p>
                    </div>
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
                        <p>共享用工服务</p>
                        <p>良性优化用工类型</p>
                        <p>用工场景合法合规</p>
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
                        <p>共享用工服务</p>
                        <p>良性优化用工类型</p>
                        <p>用工场景合法合规</p>
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
                        <p>共享用工服务</p>
                        <p>良性优化用工类型</p>
                        <p>用工场景合法合规</p>
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
                                <p>没有渠道获取进项发票</p>
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
                    将共享经济引入人力资源灵活用工行业,变革企业的用工模式，将“企业和员工之间的雇佣关系”，转变为“企业与个人间的业务合作关系”
                    通过平台一站式完成任务派发、费用结算支付、开票和完税，合法合规的进行灵活用工、结算支付和财税优化。
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
                        <p>企业内部组织变革，重构企业与个人的关系。个人一键创业成为创客，以灵活用工方式与企业形成合作关系，合理解除用工劳动关系风险</p>
                        <div class="project-btn" onclick="GetErp()">立即咨询</div>
                    </div>
                    <div class="project-tabs-items">
                        <p>合理开出可用于进项抵扣的增值税专票</p>
                        <p>个人通过平台承包项目，按项目服务效果获取服务费，即“项目应收款”，而非雇佣关系下的薪酬工资。平台给发包方企业开6%增值税专票，可用于进项抵扣和费用抵减。</p>
                        <div class="project-btn" onclick="GetErp()">立即咨询</div>
                    </div>
                    <div class="project-tabs-items">
                        <p>达到标准后付费，保障企业权益</p>
                        <p>企业通过平台将业务形成一个个标准件外包出去，并按服务效果付费，通过每个标准件的盈利最终达到企业所有业务均盈利的目的</p>
                        <div class="project-btn" onclick="GetErp()">立即咨询</div>
                    </div>
                    <div class="project-tabs-items">
                        <p>合理享受各项政策，让企业减负前行</p>
                        <p>平台注册的创客享受国家税收优惠政策，政府支持，企业认可，创客欢迎。平台能力对外开放且有严格的风控制度，综合性服务让企业安心、省心。</p>
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
                                        <p class="conTitle"><?php echo $vo['title']; ?></p>
                                        <p class="conTime"><?php echo $vo['create_time']; ?></p>
                                        <p class="conDetail">
                                            <?php echo $vo['desc']; ?>
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