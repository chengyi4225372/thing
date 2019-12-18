<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"/opt/web/thing/public/../application/home/view/index/solution.html";i:1576666558;s:54:"/opt/web/thing/application/home/view/common/login.html";i:1576660953;s:55:"/opt/web/thing/application/home/view/common/footer.html";i:1576666558;s:53:"/opt/web/thing/application/home/view/common/left.html";i:1576582309;}*/ ?>
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
  <link rel="stylesheet" href="/static/spirit/css/solution.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/spirit/js/clamp.js"></script>
  <script src='/static/spirit/js/solution.js'></script>
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
            <li class="nav-active"><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
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
        <h2>行业解决方案</h2>
        <p></p>
        <p>
          创新灵活用工的财税优化解决方案，打造全国领先一站式互联网专业平台
        </p>
      </div>
    </div>

    <!-- 面包屑 -->
    <div class="crumbs-box">
      <div class="w crumbs">
        <b><a href="<?php echo url('/v1/home/index/index'); ?>">首页</a> ></b>
        <b>行业解决方案</b>
      </div>
    </div>

    <!-- 行业tab栏 -->
    <div class="tab-box">
      <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <ul class="w layui-tab-title">
          <li class="layui-this">外卖行业</li>
          <li>新物流行业</li>
          <li>新零售行业</li>
          <li>制造业</li>
          <li>咨询培训平台</li>
        </ul>
        <div class="layui-tab-content" style="height: 100px;">
          <!-- 外卖行业 -->
          <div class="layui-tab-item layui-show">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">

                国内外卖行业服务人群与服务场景外延渐成趋势，外卖竞争已上升到本地生活层面。<br>
                外卖配送企业一般代理外卖平台的配送业务,外卖配送企业面临着配送员的劳动关系合规和财税合规问题等用工挑战。<br>
                惠灵工定制解决方案能帮助企业应对这些挑战，规避用工风险，提升用工效能。

              </div>
              <div class="status-industry-wm">
                <div class="status-industry-wm-imgs status-industry-wm-imgs-icon">
                  <img class="wm-img-active" src="/static/spirit/images/waimai1.png" alt="">
                  <img src="/static/spirit/images/waimai2.png" alt="">
                  <img src="/static/spirit/images/waimai3.png" alt="">
                </div>
                <!-- 折叠 -->
                <div class="status-industry-wm-content" lay-accordion>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-wm-item-title-icon">
                      <p>模式不规范</p><span class="status-btn status-btnone" id="0"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-wm-item-content-icon  wm-item-show">
                      <p>行业多种模式并存，主体关系混乱（全职、兼职、临时工），统一标准化合同缺乏，对用工环节风险防 范非常薄弱，风险盲区凸显，机构责任压力巨大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-wm-item-title-icon">
                      <p>用工成本高</p><span class="status-btn" id="1"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-wm-item-content-icon">
                      <p>外卖配送业务属刚需业务，但是门槛低，准入要求不高，员工素质参差不齐，员工流动性大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-wm-item-title-icon">
                      <p>周期不固定</p><span class="status-btn" id="2"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-wm-item-content-icon">
                      <p>配送平台打款周期不定、存在多卡发薪等不合规的形式，影响骑手正常务工保障。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">
                外卖配送企业和惠灵工平台达成合作，结算费用通过惠灵工平台下发，<br>
                平台将为外卖配送企业开具增值税专用发票，同时惠灵工平台帮助配送行业人员转化为创客身份，<br>
                享受国家税收优惠政策并具备自行购买社保资格。
              </div>
              <div class="solution-flow-wm-chart">
                <div>
                  <img src="/static/spirit/images/wmdongt.gif" alt="">
                </div>
              </div>
              <div class="solution-footer">
                通过惠灵工平台形成企业-平台-创客之间商务合作关系而非个人合作关系，<br>
                为外卖配送企业合规避免劳动用工风险，为配送行业人员提升劳动收益和服务保障。
              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">
                分散产能&nbsp整合共享
              </div>
              <div class="plan-advantage-wm-items">
                <ul class="clearfix">
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage1.png" alt=""></div>
                      <p>降低企业成本</p>
                      <div>
                        <p>基于国家减税降赋政策</p>
                        <p>优化企业人力架构方案</p>
                        <p>依托平台共享海量人才</p>
                        <p>为企业降本增效</p>
                      </div>
                    </div>
                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage2.png" alt=""></div>
                      <p>提高个人收入</p>
                      <div>
                        <p>个人（骑手）在线简单操作</p>
                        <p>流程科学高效</p>
                        <p>降低个税扣除</p>
                        <p>增加个人收入</p>
                      </div>
                    </div>

                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage4.png" alt=""></div>
                      <p>规避用工风险</p>
                      <div>
                        <p>将工作任务由传统的按职位划分转变为按项目划分</p>
                        <p>平台化规范管理</p>
                        <p>合理降低企业用工风险</p>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- 新物流行业 -->
          <div class="layui-tab-item">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">
                以数字经济为基础发展起来的新物流产业逐渐迈进第二发展阶段，继续呈现爆发式增长，快递物流企业布局全国，<br>
                但是人员流行性较大，人口缺口大，人员成本不断增加。新物流企业面临着与物流业员工之间的的劳动关系合规和财税合规问题等用工挑战。<br>
                惠灵工定制解决方案能帮助企业应对这些挑战，规避用工风险，提升用工效能。
              </div>
              <div class="status-industry-items">
                <ul class="clearfix">
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>模式不规范</h3>
                      <div><img src="/static/spirit/images/xingWuLiuHangYe1.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>模式不规范</h3>
                      <div>
                        <p>
                          行业多种模式并存，主体关系混乱（全职、兼职、临时工），统一标准化合同缺乏，用工风险盲区凸显，机构责任压力巨大。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>劳动力短缺</h3>
                      <div><img src="/static/spirit/images/xingWuLiuHangYe2.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>劳动力短缺</h3>
                      <div>
                        <p>
                          劳动力成本上涨，用工压力越来越大，企业对人员安排配置提出更高要求。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>用工成本高</h3>
                      <div><img src="/static/spirit/images/xingWuLiuHangYe3.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>用工成本高</h3>
                      <div>
                        <p>
                          物流务工人员准入要求不高，员工素质参差不齐，员工流动性大。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">
                新物流企业和惠灵工平台达成合作，企业将业务标准化后发布平台实现精准匹配，<br>
                结算费用通过惠灵工平台下发并为灵活用工人员代开增值税普通发票，<br>
                同时惠灵工平台帮助物流企业基层客服与前端配送等灵活用工人员转化为创客身份，享受国家税收优惠政策并具备自行购买社保资格。
              </div>
              <div class="solution-flow-chart">
                <div>
                  <img src="/static/spirit/images/xingWuLiuDongTu.gif" alt="">
                </div>
              </div>
              <div class="solution-footer">

                通过惠灵工平台形成企业-平台-创客之间商务合作关系而非个人合作关系，<br>
                为新物流企业合规避免劳动用工风险，为物流行业人员提升劳动收益和服务保障

              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">

                分散产能&nbsp整合共享

              </div>
              <div class="plan-advantage-items">
                <ul class="clearfix">
                  <li class="plan-advantage-item">
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage1.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">降低企业成本</p>
                    <p class="plan-advantage-item-content">
                      基于国家减税降赋政策，优化企业人力架构方案有效匹配实际业务需求进行资源优化，实现科学合理用工
                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage4.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">规避用工风险</p>
                    <p class="plan-advantage-item-content">
                      将工作任务由传统的按职位划分转变为按项目划分平台化规范管理，合理降低企业用工风险
                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage2.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">提高个人收入</p>
                    <p class="plan-advantage-item-content">

                      个人（运送人员）在线简单操作，流程科学高效，降低个税扣除，增加个人收入

                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- 新零售行业 -->
          <div class="layui-tab-item">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">


                中国的零售企业一方面面临市场竞争的压力，另一方面又面临人力成本上升的压力，要维持合理的毛利率以及人均销售额，<br>
                是各个零售厂商都要面对的挑战，很多传统企业寻求转型，选择通过社会化营销人员来分销，但是目前行业市场混乱,利润也被逐渐拉低，<br>
                让劳动力转换成企业的竞争力是每个零售企业的核心目标之一。惠灵工定制解决方案能帮助企业应对这些挑战，规避用工风险，提升用工效能。


              </div>
              <div class="status-industry-wm">
                <div class="status-industry-wm-imgs status-industry-xls-imgs-icon">
                  <img class="wm-img-active" src="/static/spirit/images/xingLingShou1.png" alt="">
                  <img src="/static/spirit/images/xingLingShou2.png" alt="">
                  <img src="/static/spirit/images/xingLingShou3.png" alt="">
                </div>
                <!-- 折叠 -->
                <div class="status-industry-wm-content" lay-accordion>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-xls-item-title-icon">
                      <p>劳动力短缺</p><span class="status-btn status-btnone" id="3"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-xls-item-content-icon wm-item-show">
                      <p>零售业岗位结构相对单一、工作门槛低、成长空间有限，人员流动性大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-xls-item-title-icon">
                      <p>用工成本高</p><span class="status-btn" id="4"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-xls-item-content-icon">
                      <p>线下店面的业务配置大量员工，五险一金和福利，企业用工成本高。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-xls-item-title-icon">
                      <p>管理无标准</p><span class="status-btn" id="5"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-xls-item-content-icon">
                      <p>分销人员缺乏统一管理，统一标准化合同缺乏，企业面临用工风险、财税合规等问题。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">



                零售机构和惠灵工平台达成合作，结算费用通过惠灵工平台下发，<br>
                平台将为零售机构开具增值税专用发票，同时惠灵工平台帮助社会化营销人员（例微商、kol等）转化为创客身份，<br>
                享受国家税收优惠政策并具备自行购买社保资格。



              </div>
              <div class="solution-flow-wm-chart">
                <div>
                  <img src="/static/spirit/images/wmdongt.gif" alt="">
                </div>
              </div>
              <div class="solution-footer">


                通过惠灵工平台形成企业-平台-创客之间的商务合作关系而个人代理关系，<br>
                为零售机构合规避免劳动用工风险，为社会化营销人员提升劳动收益和服务保障。


              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">
                分散产能&nbsp整合共享

              </div>
              <div class="plan-advantage-wm-items">
                <ul class="clearfix">
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage4.png" alt=""></div>
                      <p>规避用工风险</p>
                      <div>
                        <p>将工作任务由传统的按职位划分转变为按项目划分</p>
                        <p>平台化规范管理</p>
                        <p>合理降低企业用工风险</p>
                      </div>
                    </div>
                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage1.png" alt=""></div>
                      <p>降低企业成本</p>
                      <div>
                        <p>基于国家减税降赋政策</p>
                        <p>优化企业人力架构方案</p>
                        <p>依托平台共享海量人才</p>
                        <p>为企业降本增效</p>

                      </div>
                    </div>

                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage2.png" alt=""></div>
                      <p>提高个人收入</p>
                      <div>
                        <p>个人（社会化营销人员）在线简单操作</p>
                        <p>流程科学高效</p>
                        <p>降低个税扣除</p>
                        <p>增加个人收入</p>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- 制造业 -->
          <div class="layui-tab-item">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">
                劳动力短缺、成本增加、产能过剩及全球经济的疲软制约了制造业企业的发展，<br>
                中国的工业运营和生产企业面临着来自劳动力管理越来越多的挑战。企业需要提高劳动力生产效率，符合劳动力法规要求，并降低劳动力管理成本，<br>
                以便在当今竞争激烈的全球市场上取得成功。惠灵工定制解决方案能帮助企业应对这些挑战，规避用工风险，提升用工效能。
              </div>
              <div class="status-industry-items">
                <ul class="clearfix">
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>劳动力短缺</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan1.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>劳动力短缺</h3>
                      <div>
                        <p>
                          企业用工季节性需求波动大，劳动力市场匹配度较差。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>用工成本高</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan2.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>用工成本高</h3>
                      <div>
                        <p>
                          企业人员规模大、区域多且分散，集中管控难，流程和制度的标准化比较差。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>模式不规范</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan3.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>模式不规范</h3>
                      <div>
                        <p>
                          行业多种模式并存，主体关系混乱（全职、临时工等），统一标准化合同缺乏，企业用工风险高。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">
                制造业企业和惠灵工平台达成合作，结算费用通过惠灵工平台下发，平台为零售机构开具增值税专用发票，<br>
                同时惠灵工平台帮助灵活用工人员、新招聘员工等转化为创客身份，<br>
                平衡制造业企业的季节性用工需求，也为用工低谷期的劳务人员提供更多行业选择。
              </div>
              <div class="solution-flow-chart">
                <div>
                  <img src="/static/spirit/images/xingWuLiuDongTu.gif" alt="">
                </div>
              </div>
              <div class="solution-footer">

                通过惠灵工平台形成企业-平台-创客之间商务合作关系而非劳动雇佣关系，<br>
                为制造业企业合规避免劳动用工风险，为灵活用工人员提升劳动收益和服务保障。

              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">

                分散产能&nbsp整合共享

              </div>
              <div class="plan-advantage-items">
                <ul class="clearfix">
                  <li class="plan-advantage-item">
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage1.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">降低企业成本</p>
                    <p class="plan-advantage-item-content">
                      基于国家减税降赋政策，优化企业人力架构方案依托平台共享海量人才，为企业降本增效
                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage2.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">提高个人收入</p>
                    <p class="plan-advantage-item-content">

                      在线简单操作，流程科学高效提升个人待遇，保障个人收入

                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage3.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">优化用工管理</p>
                    <p class="plan-advantage-item-content">

                      建立基础用工保障，打破松散的工人组织平台化规范管理，合理降低企业用工风险

                    </p>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- 资讯平台服务 -->
          <div class="layui-tab-item">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">


                无论从中国的经济发展阶段，人口结构特征，还是从技术革命对社会的重构，整个教育的大环境都发生了翻天覆地的变化，<br>
                咨询培训平台必须高度契合市场需要并不断适应市场的变化，而高比例企业所得税和因个税高而导致的人员波动都是平台发展面临的挑战。<br>
                惠灵工定制解决方案能帮助咨询培训平台应对这些挑战，规避用工风险，提升用工效能。


              </div>
              <div class="status-industry-wm">
                <div class="status-industry-wm-imgs status-industry-zx-imgs-icon">
                  <img class="wm-img-active" src="/static/spirit/images/ziXunPingTai1.png" alt="">
                  <img src="/static/spirit/images/ziXunPingTai2.png" alt="">
                  <img src="/static/spirit/images/ziXunPingTai3.png" alt="">
                </div>
                <!-- 折叠 -->
                <div class="status-industry-wm-content" lay-accordion>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-zx-item-title-icon">
                      <p>模式不规范</p><span class="status-btn status-btnone" id="6"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-zx-item-content-icon wm-item-show">
                      <p>目前教育培训行业多种模式并存，主体关系混乱，统一的标准化制式合同缺乏，企业面临用工合规问题</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-zx-item-title-icon">
                      <p>劳动力短缺</p><span class="status-btn" id="7"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-zx-item-content-icon">
                      <p>平台专家顾问等高收入人群个税高，人员波动大，与平台粘性低。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title status-industry-zx-item-title-icon">
                      <p>用工成本高</p><span class="status-btn" id="8"></span>
                    </h2>
                    <div class="status-industry-wm-item-content status-industry-zx-item-content-icon">
                      <p>大量兼职用工等形式，劳动力变化频繁，用工事务繁杂程度。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">


                咨询培训平台和惠灵工平台达成合作，结算费用通过惠灵工平台下发，<br>
                平台将为咨询培训平台开具增值税专用发票，同时惠灵工平台帮助咨询培训专家等灵活用工人员转化为创客身份，<br>
                享受国家税收优惠政策进行合理降税。



              </div>
              <div class="solution-flow-wm-chart">
                <div>
                  <img src="/static/spirit/images/wmdongt.gif" alt="">
                </div>
              </div>
              <div class="solution-footer">



                通过惠灵工平台形成企业-平台-创客之间商务合作关系而非个人合作关系，<br>
                为咨询培训平台合规避免劳动用工风险，为灵活用工人员提升劳动收益和服务保障。



              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">
                分散产能&nbsp整合共享

              </div>
              <div class="plan-advantage-wm-items">
                <ul class="clearfix">
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage1.png" alt=""></div>
                      <p>降低企业成本</p>
                      <div>
                        <p>基于国家减税降赋政策</p>
                        <p>优化企业人力架构方案</p>
                        <p>依托平台共享海量人才</p>
                        <p>为企业降本增效</p>
                      </div>
                    </div>
                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage2.png" alt=""></div>
                      <p>优化用工管理</p>
                      <div>
                        <p>将工作任务由传统的按职位划分转变</p>
                        <p>为按项目划分平台化规范管理</p>
                        <p>合理降低企业用工风险</p>
                      </div>
                    </div>

                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage3.png" alt=""></div>
                      <p>简单高效安全</p>
                      <div>
                        <p>在线简单高效操作、统一发放报酬、统一报税</p>
                        <p>保证资金运行安全</p>
                        <p>提高资金运行效率</p>
                        <p>自动高效结算</p>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
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
          if ($('.chosenPage').length < 1) $('.nav ul li').eq(2).addClass('chosenPage')

          $('.chosenPage').addClass('nav-active')
        })

      })
    </script>
</body>


</html>