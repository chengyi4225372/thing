var index_module = (function (){
    //退出登录
    var user_logout = function user_logout(objthis){
        var url = $(objthis).attr('data-url');
        $.post(
            url,
            '',
            function (ret){
                if(ret.status == true){
                    layer.msg(ret.message,{icon:1,time:1000},function (){
                        parent.location.reload();
                    });
                }else{
                    layer.msg(ret.message,{icon:2,time:1500});
                }

            },'json'
        );
    };
    return {
        user_logout:user_logout,
    }
})();
