/**
 *搜索
 */
 $('#btnsearch').click(function(){

    var hrefs = $(this).attr('data-url');
    var keywords = $("#keywords").val();
    if(keywords == '' || keywords == undefined || keywords == 'undefined'){
        layer.msg('请输入搜索关键字');
        return false;
    }

    if(hrefs == '' || hrefs == undefined){
        return false;
    }

    window.location.href= hrefs+"?keyword="+keywords 
 })



/**添加关键字弹窗 **/
$('#addkeys').click(function(){
   var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加关键字',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: url, //iframe的url
    });
})

/*添加提交*/
$('.addkeys').click(function(){
      var urls  = $(this).attr('data-url');
      var title = $.trim($('#title').val());
      var sort  = $('#sort').val();
      
      if(title =='' || title == undefined || title == 'undefined'){
          layer.msg('请输入关键字名称');
          return false;
      }
      
      if(urls == '' || urls  == undefined){
          return false;
      }

      $.post(urls,{'title':title,'sort':sort},function(ret){
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
      },'json');
})

/** 编辑弹窗**/
function editkeys(obj){
  var urks  = $(obj).attr('data-url');
  var id    = $(obj).attr('data-id');
   
  layer.open({
        type: 2,
        title: '编辑关键字',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: urks+'?mid='+id, //iframe的url
  });
}

/**
 *编辑提交
 */
$('.edit_keys').click(function(){
     var urls = $(this).attr('data-url');
     var  mid = $('#mid').val();
     var title= $('#title').val();
     var sort = $('#sort').val();

     if(urls  == '' || urls == undefined){
         return false;
     }

     if(title =='' || title == undefined){
         layer.msg('关键字不能为空！');
         return false;
     }

     $.post(urls,{'title':title,'mid':mid,'sort':sort},function(ret){
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
})




/**删除关键字**/
function delkeys(obj){
     var urls = $(obj).attr('data-url');
     var id   = $(obj).attr('data-id');

    layer.confirm('您确定要删除？', {
        btn: ['确定','点错了'] //按钮
    }, function(){
        $.post(urls,{'mid':id},function(ret){
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


/**
 * 关闭 弹窗
 */
$('.cancle').click(function(){
   parent.layer.closeALL();
});