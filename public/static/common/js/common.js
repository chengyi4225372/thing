function user_logout(objthis) {
    var url = $(objthis).attr('data-url');
    var url2 = $(objthis).attr('location_url');
    $.ajax({
        type: "post",
        url: url,
        data: '',
        dataType: 'json',
        success: function (res) {
            if (res.status == true) {
                layer.msg(ret.message, {icon: 1, time: 1000}, function () {
                    parent.location.href = url2;
                });
            } else {
                layer.msg(res.message, {icon: 2, time: 2000});
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}