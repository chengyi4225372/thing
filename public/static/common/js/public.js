var baseUrl = 'https://hlg_job.hui7y.com';
function user_logout(objthis){

    //var url = $(objthis).attr('data-url');
    var url = baseUrl + '/api/huser/goOut';

    var url2 = $(objthis).attr('location_url');
    var url3 = $(objthis).attr('data-url');
    var tokens = $(objthis).attr('data-token');
    $.ajax({
        type: "post",
        url: url,
        data: '',
        headers: {
            "Content-Type": "application/json",
            "Authorization":tokens
        },
        dataType: 'json',
        success: function (ret) {
            $.post(
                url3,
                '',
                function (ret){
                    location.href = url2;
                    //layer.msg('退出登录成功',{icon:1,time:1000},function (){
                    //
                    //});
                },'json'
            );
        },
        error: function (data) {
            layer.msg(data)
        }
    });
}

$(function (){
    var phone = $('#mobile_phone').html();
    if(phone != undefined){
        var newPhone = phone.replace(/(\d{3})\d{4}(\d{4})/, "$1****$2");
        $('#mobile_phone').html(newPhone);
    }
});



function login_btn(objthis){
    var login_url2 = $(objthis).attr('login_url');
    var loca_url2 = $(objthis).attr('loca_url');
    var loca_url = encodeURIComponent(loca_url2);
    var login_url = login_url2+'?artId='+loca_url;
    location.href = login_url;
}


var  _hmt  =  _hmt  ||  [];
(function()  {
    var  hm  =  document.createElement("script");
    hm.src  =  "https://hm.baidu.com/hm.js?2e105842c8a6bceb1706730f2ecd1641";
    var  s  =  document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm,  s);
})();
