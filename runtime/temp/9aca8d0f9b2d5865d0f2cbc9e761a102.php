<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/opt/web/hui-/public/../application/home/view/login/register.html";i:1572429293;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/spirit/css/register.css">
  <script src='/static/spirit/js/register.js'></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>

  <div class='container'>
    <!-- 头部 -->
    <div class="header-box">
      <div class="w header">
        <div class="logo">
          <a href="<?php echo url('/home/index/index'); ?>"><img src="/static/spirit/images/logo22.png" alt=""></a>
        </div>
        <div class="tohome"><a href="<?php echo url('/home/index/index'); ?>">返回首页>></a></div>
      </div>
    </div>
    <!-- 登陆表单 -->
    <div class="form-box">
      <div class="w form">
        <!-- 表单内容 -->
        <div id="login_url" data-url="<?php echo url('/home/login/login'); ?>"></div>
        <div class="form-content" id="form-content">
          <div class="form-content-title">欢迎注册惠灵工账号</div>
          <div class="tabs">
            <span class="tab tab-active">企业注册</span>
            <span class="tab">个人注册</span>
          </div>
          <div class="tabs-items">
            <!-- 企业表单 -->
            <div class="tabs-item-qy tabs-item tabs-item-active" id="tabs-item">
              <!-- 第一个盒子 -->
              <div class="one-box" id="one-box">
                <div>
                  <span>手机号</span>
                  <input type="text" placeholder="请输入手机号" id="phone" value="">
                </div>
                <div>
                  <input type="text" placeholder="请输入验证码" id="code" value="" >
                  <span onclick="get_qy_code(this)" id="qy_msg_code">获取验证码</span>
                </div>
                <div style="color:red;display:none;height:20px;width:420px;align-items: center;padding-left: 0px;border:none;box-sizing: border-box;border-radius: 0px;font-size:12px;" id="msg_code2">验证码已发送，请查收短信</div>
                <div>
                  <span>输入密码</span>
                  <input type="password" placeholder="请设置密码" id="password1" value="">
                </div>
                <div>
                  <span>确认密码</span>
                  <input type="password" placeholder="请再次输入密码" id="password2" value="">
                </div>
                <p>已有账号？<a href="./login.html">去登录</a></p>
                <span id="qy-one-btn">下一步</span>
              </div>
              <!-- 第二个盒子 -->
              <div class="two-box" id="two-box">
                <div>
                  <span>企业名称</span>
                  <input type="text" placeholder="请输入企业名称" id="businessName">
                </div>
                <div>
                  <span>公司地址</span>
                  <input type="text" placeholder="请填写公司地址" id="customerAddress">
                </div>
                <div>
                  <span>法人姓名</span>
                  <input type="text" placeholder="请填写法人姓名" id="legalPersonName">
                </div>
                <div>
                  <span>法人电话</span>
                  <input type="text" placeholder="请填写法人电话" id="legalPersonMobile">
                </div>
                <div>
                  <span>纳税识别号</span>
                  <input type="text" placeholder="请输入识别号" id="industryNo">
                </div>
                <input type="hidden" id="user_type" value="B"/>
                <p>已有账号？<a href="./login.html">去登录</a></p>
                <span class="qy-two-btn" id="qy-two-btn">完成注册</span>
              </div>
            </div>
            <!-- 个人表单 -->
            <div class="tabs-item-gr tabs-item" id="tabs-item">
              <!-- 第一个盒子 -->
              <div class="one-box" id="one-box">
                <div>
                  <span>手机号</span>
                  <input type="text" placeholder="请输入手机号" id="user_phone">
                </div>
                <div>
                  <input type="text" placeholder="请输入验证码" id="user_code">
                  <span onclick="get_code(this)" id="gr_msg_code">获取验证码</span>
                </div>
                <div style="color:red;display:none;height:20px;width:420px;align-items: center;padding-left: 0px;border:none;box-sizing: border-box;border-radius: 0px;font-size:12px;" id="msg_code">验证码已发送，请查收短信</div>
                <div>
                  <span>输入密码</span>
                  <input type="password" placeholder="请设置密码" id="user_password">
                </div>
                <div>
                  <span>确认密码</span>
                  <input type="password" placeholder="请再次输入密码" id="user_password2">
                </div>
                <p>已有账号？<a href="./login.html">去登录</a></p>
                <span id="gr-one-btn">下一步</span>
              </div>
              <!-- 第二个盒子 -->
              <div class="two-box" id="two-box">
                <div>
                  <span>姓名</span>
                  <input type="text" placeholder="请输姓名" id="userName">
                </div>
                <div>希望从事行业</div>
                <div>
                  <select id="taxNo" onchange="change_tax(this)">
                    <option value="请选择">请选择</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  <select id="taxNo2">
                    <option value="请选择">请选择</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                </div>
                <div>
                  <span>微信／ＱＱ</span>
                  <input type="text" placeholder="请填写联系方式" id="contact">
                </div>
                <input type="hidden" id="user_type2" value="C"/>
                <span class="gr-two-btn" id="gr-two-btn">完成注册</span>

              </div>
            </div>
          </div>
        </div>
        <!-- 完成注册 -->
        <div class="succeed-box" id="succeed-box">
          <span class="form-content-title">欢迎注册惠灵工账号</span>
          <div>
            <div class="success">
              <img src="/static/spirit/images/zhucechenggong2x.png" alt="">
              <p>恭喜!注册成功!</p>
            </div>
            <div><a href="/home/login/login">立即登录</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>