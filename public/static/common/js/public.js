function user_logout(objthis){
    var baseUrl = 'http://172.26.2.215:8089';
    //var url = $(objthis).attr('data-url');
    var url = baseUrl + '/api/huser/goOut';;
    var url2 = $(objthis).attr('location_url');
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
            if(ret){

            }
        },
        error: function (data) {
            layer.msg(data)
        }
    });
}