/**客户案例js**/

/** 实例化富文本 **/
var ue = UE.getEditor('content',{initialFrameWidth:'90%',initialFrameHeight:300,charset:"utf-8"});

/** 取消 **/
$('.cancle').click(function(){
    parent.layer.closeAll();
});


/** 搜索 **/
$('#btn_search').click(function(){
    var keyword = $.trim($('#keywords').val());

    var hrefs = $(this).attr('data-url');

    if(keyword == '' || keyword  == undefined || keyword == 'undefined'){
        layer.msg('请输入标题进行搜索');
        return false;
    }

    window.location.href = hrefs +'?title='+keyword;

})

/** 添加页面 **/
$('#examadd').click(function(){
    var urls = $(this).attr('data-url');

    if(urls == '' || urls == undefined){
        return false;
    }
    layer.open({
        type: 2,
        title: '添加',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '80%'],
        content: urls, //iframe的url
    })
});

/** 添加逻辑 **/
$('.example_add').click(function(){
   var title = $('#title').val();
   var imgs  = $('#Images').val();
   var sort  = $('#sort').val();
   var describes = $('#describes').val();
   var content  = ue.getContent();
   var urls = $(this).attr('data-url');

   if(title =='' || title == undefined){
       layer.msg('请输入新闻标题');
       return false;
   }

   if(imgs == '' || imgs == undefined){
       layer.msg('请上传图片');
       return false;
   }

   if(describes == '' || describes == undefined){
       layer.msg('请输入文章简介');
       return false;
   }

   if(content  == '' || content == undefined){
       layer.msg('请输入文章详情');
       return false;
   }

   $.post(urls,{'title':title,'imgs':imgs,'sort':sort,'describes':describes,'content':content},function(ret){
       if(ret.code == 200){
           layer.msg(ret.msg,{icon:6},function(){
               parent.location.reload();
           });
       }

       if(ret.code == 400){
           layer.msg(ret.msg,{icon:5},function(){
               parent.location.reload();
           });
       }

   },'json')
});

/** 编辑页面 **/
$('.example_edit').click(function(){
    var hrefs  = $(this).attr('data-url');

    if(hrefs == '' || hrefs == undefined){
        return false;
    }

    layer.open({
        type: 2,
        title: '编辑',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '80%'],
        content: hrefs, //iframe的url
    })

});

/** 编辑提交 **/
$('.example_edit_add').click(function(){
    var title = $('#title').val();
    var imgs  = $('#Images').val();
    var sort  = $('#sort').val();
    var describes = $('#describes').val();
    var content  = ue.getContent();
    var id  = $('#mid').val();
    var urls = $(this).attr('data-url');

    if(title =='' || title == undefined){
        layer.msg('新闻标题不能为空');
        return false;
    }

    if(imgs == '' || imgs == undefined){
        layer.msg('请上传图片');
        return false;
    }

    if(describes == '' || describes == undefined){
        layer.msg('文章简介不能为空');
        return false;
    }

    if(content  == '' || content == undefined){
        layer.msg('文章详情不能为空');
        return false;
    }

    $.post(urls,{'id':id,'title':title,'sort':sort,'describes':describes,'imgs':imgs,'content':content},function(ret){
          if(ret.code == 200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                });
            }

           if(ret.code == 400){
            layer.msg(ret.msg,{icon:5},function(){
                parent.location.reload();
            });
        }
    },'json')
});

/** 删除 **/
$('.example_dels').click(function(){
    var urls = $(this).attr('data-url');

    layer.confirm('您确定要删除？', {
        btn: ['确定','点错了'] //按钮
    }, function(){
        $.get(urls,function(ret){
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
})
/** 排序 **/
function setsort(onj){
    var urls = $(onj).attr('data-url');
    var id   = $(onj).attr('data-id');
    var sort = $(onj).val();


    if(urls  =='' || urls  == undefined){
        return false;
    }

    if(id =='' || id == undefined || id== 'undefined'){
        return false;
    }

    $.post(urls,{'id':id,'sort':sort},function(ret){

         if(ret.code == 200){
               layer.msg(ret.msg,{icon:6},function(){
                   parent.location.reload();
               });
           }

          if(ret.code == 400){
            layer.msg(ret.msg,{icon:5},function(){
                parent.location.reload();
            });
        }
    },'json')
}

/** 上传图片 **/
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
