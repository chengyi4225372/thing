//搜索
function search(objthis) {
    var keyword = $('#keyword').val();

    var url = $(objthis).attr('data-url');
    if (keyword == '' || keyword == undefined) {
        layer.msg('请输入搜索内容');
        return false;
    }

    window.location.href = url + '?keyword=' + keyword;
}

//手机验证
function checkPhone(phone) {
    var tel_reg = /^1(3|4|5|6|7|8|9)\d{9}$/;
    if (tel_reg.test(phone)) {
        return true;
    } else {
        return false;
    }
}

//接口 公海
var gurl = "https://test.zxrhgb.com";

var urkl = gurl + "/api/wechatForeign/public/addGatewayPotentialCustomer";

function btnErp() {
    $('.form-btn').attr('disabled', "true");
    var datas = {};

    datas.contactName = $.trim($("#Name").val());//联系姓名
    datas.companyName = $.trim($("#cName").val()); //公司
    datas.contactMobile = $.trim($("#Mobile").val());//手机
    datas.source = $("#source").val(); //渠道
    datas.identification = $("#identification").val();//标识

    if (datas.contactMobile == '' || datas.contactMobile == undefined) {
        layer.msg('请填写联系电话');
        return false;
    }

    if (checkPhone(datas.contactMobile) === false) {
        layer.msg("联系电话不合法");
        return false;
    }

    if (datas.companyName == '' || datas.companyName == undefined) {
        layer.msg('请填写公司名称');
        return false;
    }

    if (datas.contactName == '' || datas.contactName == undefined) {
        layer.msg('请填写您的姓名');
        return false;
    }

    $.ajax({
        url: urkl,
        type: "post",
        headers: {
            "Content-Type": "application/json",
        },
        dataType: 'json',
        data: JSON.stringify(datas),
        success: function (ret) {

            if (ret.status == 200 && ret.rel == true) {
                $('.mask-box1').fadeIn(1000);
                window.setTimeout(function () {
                    $('.mask-box1').fadeOut(1000, function () {
                        window.location.reload();
                        $('.form-btn').attr('disabled', "false");
                    });
                }, 3000)
            }

            //201 号码已经存在
            if (ret.status == 201) {
                layer.msg(ret.message, function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 500) {
                layer.msg('网络错误，请稍后再提交。', function () {
                    parent.location.reload();
                });
            }
        },
        error: function (ret) {
            console.log(ret);
        }

    });
}

//慧灵工首页 弹窗
//obj 标识
//source 来源
function GetErp(obj,source) {
    $('#sources').val(source);
    $('#identifications').val(obj);
    $('#popbox').show();
}

//关闭
function turnoff() {
    $('#popbox').hide();
}



//提交公海
function form_btn() {
    $('.form-btn').attr('disabled', "true");
    var data = {};

    data.contactName = $.trim($("#contactName").val());//联系姓名
    data.companyName = $.trim($("#companyName").val()); //公司
    data.contactMobile = $.trim($("#contactMobile").val());//手机
    data.source = $("#sources").val(); //来源
    data.identification = $("#identifications").val();//标识

    if (data.contactMobile == '' || data.contactMobile == undefined) {
        layer.msg('请填写联系电话');
        return false;
    }

    if (checkPhone(data.contactMobile) === false) {
        layer.msg("联系电话不合法");
        return false;
    }

    if (data.companyName == '' || data.companyName == undefined) {
        layer.msg('请填写公司名称');
        return false;
    }

    if (data.contactName == '' || data.contactName == undefined) {
        layer.msg('请填写您的姓名');
        return false;
    }

    $.ajax({
        url: urkl,
        type: "post",
        headers: {
            "Content-Type": "application/json",
        },
        dataType: 'json',
        data: JSON.stringify(data),
        success: function (ret) {


            if (ret.status == 200 && ret.rel == true) {
                $('.mask-box2').fadeIn(1000);
                window.setTimeout(function () {
                    $('.mask-box2').fadeOut(1000, function () {
                        window.location.reload();
                        $('.form-btn').attr('disabled', "false");
                    });
                }, 3000)
            }

            //201 号码已经存在
            if (ret.status == 201) {
                layer.msg(ret.message, function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 500) {
                layer.msg('网络错误，请稍后再提交。', function () {
                    parent.location.reload();
                });
            }
        },
        error: function (ret) {
            console.log(ret);
        }

    });
};

//分页
function getMore(keyword, i, objthis) {
    var urls = $(objthis).attr('data-url');

    var hrefs = $(objthis).attr('data-href');
    $.get(urls, { 'keyword': keyword, 'page': i }, function (ret) {
        if (ret.code == 200) {
            var html = '';
            if(ret.data.length > 0){
                $.each(ret.data, function (i, item) {
                    html+="<li><a href="+hrefs+'?mid='+item.id+">";
                         html+= "<div class='tabs-items-img'>";
                         html+= "<img src="+trims(item.imgs)+" ></div>";
                         html+= "<div class='tabs-items-content'>";
                         html+= "<div class='tabs-items-content-title figcaption'>";
                         html+= "<p>"+item.title+"</p>";
                         html+= "<div class='tabs-items-content-time'>";
                         html+= "<span><img src='/static/spirit/images/shijian2x.png'>";
                         html+= "</span><span>"+item.create_time+"</span></div></div>";
                         html+= "<div class='tabs-items-content-text figcaption'>";
                         html+= "<p>"+item.desc+"</p></div>";
                         html+= "<div class='tabs-items-content-label'>";
                         for(var j =0;j<item.keyword.length;j++){
                            html+= "<span>"+item.keyword[j]+"</span>";
                         } 
                         html+="</div></div></a></li>";
                });
                $('#content').append(html).html();
                $('#page').val(++i);
            }else{
                layer.msg('已经没有更多数据了',{icon:5,time:1500});
            }
        }

        if (ret.code == 404) {
            layer.msg(ret.msg);
            return false;
        }
    }, 'json')

}

//替换图片空格
function trims(str){
    return str.replace(/\s/g,'%20');
}

//根据关键字搜索
var title = []; //需要搜索关键字
function hotsearch(obj){
    var key = $(obj).attr('data-title');//获取当前搜索的关键字
     
    //判断当前数组中是否已经存在
    var index = $.inArray(key,title);
   
    if(index >=0){
         title.push(key);
         title.pop(key); //移除并且返回新数组
     }else {
        title.push(key); //往数组中添加
     }



    console.log(title);
    var urls = $(obj).attr('data-url'); //ajax请求地址
    var hrefs= $(obj).attr('data-href');//详情页地址
    
    $.post(urls,{'title':JSON.stringify(title)},function(ret){
           if(ret.code== 200){
               $('#content li').remove();  //清空原有li
                if(ret.data.length > 0){
                    var html = '';
                    $.each(ret.data, function (i, item) {
                         html+="<li><a href="+hrefs+'?mid='+item.id+">";
                         html+= "<div class='tabs-items-img'>";
                         html+= "<img src="+trims(item.imgs)+" ></div>";
                         html+= "<div class='tabs-items-content'>";
                         html+= "<div class='tabs-items-content-title figcaption'>";
                         html+= "<p>"+item.title+"</p>";
                         html+= "<div class='tabs-items-content-time'>";
                         html+= "<span><img src='/static/spirit/images/shijian2x.png'>";
                         html+= "</span><span>"+item.create_time+"</span></div></div>";
                         html+= "<div class='tabs-items-content-text figcaption'>";
                         html+= "<p>"+item.desc+"</p></div>";
                         html+= "<div class='tabs-items-content-label'>";
                         for(var j =0;j<item.keyword.length;j++){
                            html+= "<span>"+item.keyword[j]+"</span>";
                         }
                    
                         html+="</div></div></a></li>";
                    });
                    $('#content').append(html).html();
                    $('#page').val('1');
               }else {
                  var arr ='';
                  arr  +="<li>";
                  arr  +="<div class='tabs-items-content'>";
                  arr  += "<div class='tabs-items-content-text figcaption'>";
                  arr  += "<p style='color: #ff2222'>抱歉，没有找到相关结果。</p>";
                  arr  += "</div></div></li>"; 
                  $('#content').append(arr).html(); 
               }
           }

           if(ret.code == 400){
             var arr ='';
             arr  +="<li>";
             arr  +="<div class='tabs-items-content'>";
             arr  += "<div class='tabs-items-content-text figcaption'>";
             arr  += "<p style='color: #ff2222'>抱歉，没有找到相关结果。</p>";
             arr  += "</div></div></li>"; 
             $('#content').append(arr).html();
           }

    },'json');
}

//清除关键字搜索
function nullhot(obj){
    var keys = $(obj).attr('data-title');//获取当前搜索的关键字
     
    //判断当前数组中是否已经存在
    var index1 = $.inArray(keys,title);
   
    if(index1 >=0){
         title.splice(index1,1); //移除并且返回新数组
     }
    
    console.log(title);
    var urls = $(obj).attr('data-url'); //ajax请求地址
    var hrefs= $(obj).attr('data-href');//详情页地址

    $.post(urls,{'title':JSON.stringify(title)},function(ret){
        if(ret.code== 200){
            $('#content li').remove();  //清空原有li
             if(ret.data.length > 0){
                 var html = '';
                 $.each(ret.data, function (i, item) {
                      html+="<li><a href="+hrefs+'?mid='+item.id+">";
                      html+= "<div class='tabs-items-img'>";
                      html+= "<img src="+trims(item.imgs)+" ></div>";
                      html+= "<div class='tabs-items-content'>";
                      html+= "<div class='tabs-items-content-title figcaption'>";
                      html+= "<p>"+item.title+"</p>";
                      html+= "<div class='tabs-items-content-time'>";
                      html+= "<span><img src='/static/spirit/images/shijian2x.png'>";
                      html+= "</span><span>"+item.create_time+"</span></div></div>";
                      html+= "<div class='tabs-items-content-text figcaption'>";
                      html+= "<p>"+item.desc+"</p></div>";
                      html+= "<div class='tabs-items-content-label'>";
                      for(var j =0;j<item.keyword.length;j++){
                         html+= "<span>"+item.keyword[j]+"</span>";
                      }
                 
                      html+="</div></div></a></li>";
                 });
                 $('#content').append(html).html();
                 $('#page').val('1');
            }else {
               var arr ='';
               arr  +="<li>";
               arr  +="<div class='tabs-items-content'>";
               arr  += "<div class='tabs-items-content-text figcaption'>";
               arr  += "<p style='color: #ff2222'>抱歉，没有找到相关结果。</p>";
               arr  += "</div></div></li>"; 
               $('#content').append(arr).html(); 
            }
        }

        if(ret.code == 400){
          var arr ='';
          arr  +="<li>";
          arr  +="<div class='tabs-items-content'>";
          arr  += "<div class='tabs-items-content-text figcaption'>";
          arr  += "<p style='color: #ff2222'>抱歉，没有找到相关结果。</p>";
          arr  += "</div></div></li>"; 
          $('#content').append(arr).html();
        }

 },'json');
}


//回到惠灵工
function go_work(obj) {
    var urls = $(obj).attr('data-url');
    window.location.href = urls;
}

//回惠灵工新闻列表
function go_news(obj) {
    var urlk = $(obj).attr('data-url');
    window.location.href = urlk;
}


//登录了才能查看了解更多
function is_login(objthis) {
    var data_url = $(objthis).attr('data-url');
    var is_login = $(objthis).attr('mobile-phone');
    var login_url2 = $(objthis).attr('login_url');
    var loca_url2 = $(objthis).attr('loca_url');
    var loca_url = encodeURIComponent(loca_url2);
    var login_url = login_url2 + '?artId=' + loca_url;
    if (is_login == '' || is_login == undefined) {
        window.location.href = login_url;
    } else {
        window.location.href = data_url;
    }
}

//行业解决方案 弹窗
//onj 标识
//source  来源
function showSearch(onj,source){
    $('#sources').val(source);
    $('#identifications').val(onj);
    $('#popbox').show();
}

//惠灵工登录跳转
function click_login(objthis){
    var login_url2 = $(objthis).attr('login_url');
    var loca_url2 = $(objthis).attr('location_url');
    var loca_url = encodeURIComponent(loca_url2);
    var login_url = login_url2+'?artId='+loca_url;
    location.href = login_url;
}

//惠灵工注册跳转
function click_register(objthis){
    var login_url2 = $(objthis).attr('register_url');
    var loca_url2 = $(objthis).attr('location_url');
    var loca_url = encodeURIComponent(loca_url2);
    var login_url = login_url2+'?artId='+loca_url;
    location.href = login_url;
}



