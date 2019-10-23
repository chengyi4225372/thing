function checkPhone(phone) {
    var tel_reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
    if (tel_reg.test(phone)) {
        return true;
    } else {
        return false;
    }
}


var gurl = "http://172.26.2.41:8088";


   function getErp() {
       var urkl = gurl + "/api/wechatForeign/public/addGatewayPotentialCustomer";

       var data = {};

       data.contactName = $("#contactName").val();//联系姓名
       data.companyName = $("#companyName").val(); //公司
       data.contactMobile = $("#contactMobile").val();//手机
       data.source = $("#source").val(); //渠道
       data.identification = $("#identification").val();//标识

       if (data.contactMobile == '' || data.contactMobile == undefined) {
           layer.msg('请填写联系电话');
           return false;
       }

       if (checkPhone(data.contactMobile) == false) {
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
               //201 号码已经存在
               if (ret.status == 200 && ret.rel == true) {
                   layer.msg('提交成功', function () {
                       parent.location.reload();
                   })
               }

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

       })

   }


//点击弹窗
function showSearch(){
   var   content = '';

         content += "<div class='propbox' >";
         content += "<div class='title'></div>";
         content += "<div class='total_input'> <div>";
         content += "<span>您的姓名</span>";
         content += "<input type='text' id='contactName'  placeholder='请输入姓名'></div>";
         content += "<div><span>联系方式</span>";
         content += "<input type='text' id='contactMobile' placeholder='请输入手机号码'></div><div>";
         content += "<span>您的公司</span>";
         content += "<input type='text' id='companyName'  placeholder='请输入公司名称'></div>";
         content += "<input type='hidden' id='source' value='门户首页'>";
         content += "<input type='hidden' id='identification' value='企业一站式服务'>";
         content += "<button  class='button' onclick='getErp()'>获取方案</button>";
         content += "</div></div>";

         console.log(content);
         $(".prop_box").append(content).show();

   // layer.open({
   //      type: 1,
   //      title: '提交',
   //      shadeClose: true,
   //      shade: 0.8,
   //      area: ['470px', '397px'],
   //      scrollbar: false, // 父页面 滚动条 禁止
   //      content: content,
   //  })
}


function click_show(objthis){
    var v = $(objthis).attr('data-attr');
    $('.huichuangyou').css('display','none');
    $('.huiduoxin').css('display','none');
    $('.huilinggong').css('display','none');
    $('.huizhaoshi').css('display','none');
    $('.huiqidong').css('display','none');
    $('.huichuangye').css('display','none');
    $('.' + v).css('display','block');
}

