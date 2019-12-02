
//富文本
var ue = UE.getEditor('content',{initialFrameWidth:'90%',initialFrameHeight:300,charset:"utf-8"});

//取消
$('.cancle').click(function(){
    parent.layer.closeAll();
});

//搜索
$(".btn_search").click(function(){
    var url   =  $(this).attr('data-url');
    var title =  $("#keyword").val();
    if(title=='' || title == undefined){
        layer.msg("请输入搜索的文章标题");
        return ;
    }
   window.location.href= url +"?title="+title;
})

//弹窗
$("#addwork").click(function(){
    var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加新闻',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '75%'],
        content: url, //iframe的url
    })
})

//上传图片
function upload_files(objthis) {
    var formData =new FormData();
    formData.append("file",$("#file")[0].files[0]);

    var urls = $(objthis).attr('data-url');

    $.ajax({
        url: urls,
        type: "post",
        data: formData,
        async:false,
        dataType: 'json',
        cache: false,
        processData : false,
        contentType : false,
        success: function (ret) {
            if (ret.code == 200) {
                $("#imgs").attr('src', ret.path);
                $("#Images").val(ret.path);
                layer.msg(ret.msg,{icon:6});
            } else {
                layer.msg(ret.msg);
            }
        },

    });
    return false;
}

$('.addworks').click(function(){
    var urlk  = $(this).attr('data-url');
    var data = {};

    data.title = $('#title').val();
    data.pic    =$('#Images').val();

    if(data.pic== '' || data.pic == undefined){
        layer.msg('请上传新闻图片');
        return false;
    }

    if(data.title== '' || data.title == undefined){
        $('#title').focus();
        layer.msg('请输入新闻标题');
        return false;
    }



   $.post(urlk,data,function(ret){
        if(ret.code == 200){
            layer.msg(ret.msg,function(){
                parent.layer.close();
                parent.location.reload();
            })
        }

       if(ret.code == 400){
           layer.msg(ret.msg)
       }
   },'json')

})

//编辑
$(".editWork").click(function(){
    var urls = $(this).attr("data-url");

    layer.open({
        type: 2,
        title: '编辑新闻',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '75%'],
        content: urls, //iframe的url
    })
})

$('#editWorks').click(function(){
    var urle = $(this).attr('data-url');

    var datas  = {};
    datas.title = $('#title').val();
    datas.pic    =$('#Images').val();
    datas.id     = $('#mid').val();


    if(datas.id == '' || datas.id == undefined){
        return false;
    }

    if(datas.pic== '' || datas.pic == undefined){
        layer.msg('请上传新闻图片');
        return false;
    }

    if(datas.title== '' || datas.title == undefined){
        $('#title').focus();
        layer.msg('请填写新闻标题');
        return false;
    }


    $.post(urle,datas,function(ret){

        if(ret.code == 200){
            layer.msg(ret.msg,function(){
                parent.layer.close();
                parent.location.reload();
            })
        }

        if(ret.code == 400){
            layer.msg(ret.msg)
        }
    },'json')
});

//删除
function delWork(id){

    var url  = "del";

    var id = id;

    layer.confirm('您确定要删除？', {
        btn: ['确定','点错了'] //按钮
    }, function(){
        $.post(url,{'id':id},function(ret){
            if(ret.code ==  200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                })
            }

            if(ret.code == 400){
                layer.msg(ret.msg,{icon:5},function(){
                    parent.location.reload();
                })
            }
        },'json')
    }, function(){
       parent.layer.closeAll();
    });


}

//排序
function setSort(value,id){
    var  newVal  = value;
    var   id     = id;
    var  setUrl = "setsort";

    $.post(setUrl,{'sort':newVal,'id':id},function(ret){
        if(ret.code == 200){
            layer.msg(ret.msg,{icon:6},function(){
                parent.location.reload();
            })
        }

        if(ret.code == 400){
            layer.msg(ret.msg,{icon:6},function(){
                parent.location.reload();
            })
        }
    },'json')
}

//添加案例
function addcases(objthis){
    var url = $(objthis).attr('data-url');
    var datas  = {};
    datas.title = $('#title').val();
    datas.pic    =$('#Images').val();
    datas.content     = $('#contents').val();
    if(datas.pic== '' || datas.pic == undefined){
        layer.msg('请选择要上传的图片');
        return false;
    }

    if(datas.title== '' || datas.title == undefined){
        $('#title').focus();
        layer.msg('请填写标题');
        return false;
    }

    if(datas.content == '' || datas.content == undefined){
        $('#content').focus();
        layer.msg('请填写内容');
        return false;
    }

    $.post(
        url,
        datas,
        function (ret){
            if(ret.code == 200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                })
            }

            if(ret.code == 400){
                layer.msg(ret.msg,{icon:6})
            }
        },'json'
    );
}


function editcases(objthis){
    var url = $(objthis).attr('data-url');
    var datas  = {};
    datas.title = $('#title').val();
    datas.pic    =$('#Images').val();
    datas.content     = $('#contents').val();
    datas.id     = $(objthis).attr('data');
    if(datas.pic== '' || datas.pic == undefined){
        layer.msg('请选择要上传的图片');
        return false;
    }

    if(datas.title== '' || datas.title == undefined){
        $('#title').focus();
        layer.msg('请填写标题');
        return false;
    }

    if(datas.content == '' || datas.content == undefined){
        $('#content').focus();
        layer.msg('请填写内容');
        return false;
    }

    $.post(
        url,
        datas,
        function (ret){
            if(ret.code == 200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                })
            }

            if(ret.code == 400){
                layer.msg(ret.msg,{icon:6})
            }
        },'json'
    );
}

function delCase(objthis){
    var url = $(objthis).attr('data-url');
    var id = $(objthis).attr('data');
    layer.confirm('您确定要删除？', {
        btn: ['确定','点错了'] //按钮
    }, function(){
        $.post(url,{'id':id},function(ret){
            if(ret.code ==  200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                })
            }

            if(ret.code == 400){
                layer.msg(ret.msg,{icon:5},function(){
                    parent.location.reload();
                })
            }
        },'json')
    }, function(){
        parent.layer.closeAll();
    });
}
