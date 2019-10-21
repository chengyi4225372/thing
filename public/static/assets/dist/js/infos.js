//富文本
var editor;
$(function() {
    editor = CKEDITOR.replace('content',{
        width:600,//设置默认宽度
            height:400  //设置默认高度,这个高度是不包含顶部菜单的高度
    });
});

//搜索
$('#btn_search').click(function(){
    var url   = $(this).attr('data-url');
    var title = $('#title').val();

    if(title == '' || title == undefined){
        layer.msg('搜索条件不能为空')
        return;
    }
    window.location.href = url+"?title="+title;
})


//添加
$('#infosadd').click(function(){

    var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加新闻',
        shadeClose: true,
        shade: 0.8,
        area: ['60%', '85%'],
        content: url, //iframe的url
    })
})

//取消
$('.cancle').click(function(){
    parent.layer.closeAll();
});

//添加数据
$('.infos-add').click(function(){
    var urls = $(this).attr('data-url');

    var pid = $("#pid option:selected").val();
    var title   = $('#title').val();

    if(title == '' || title== undefined){
        layer.msg('请填写新闻标题');
        return ;
    }

    var content = editor.document.getBody().getHtml();//取得html文本

    $.post(urls,{'title':title,'pid':pid,'content':content},function(ret){
           if(ret.code == 200){
               layer.msg(ret.msg,{icon:6},function(){
                   parent.location.href="index";
               })
           }

           if(ret.code == 400){
               layer.msg(ret.msg,{icon:5},function(){
                   parent.location.href="index";
               })
           }
    },'json')
});

//编辑弹窗
$('.infos_edit').click(function(){
    var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '编辑新闻',
        shadeClose: true,
        shade: 0.8,
        area: ['60%', '85%'],
        content: url, //iframe的url
    })
});

//编辑提交
$('.infos-edits').click(function(){
    var urls    = $(this).attr('data-url');

    var pid     = $("#pid option:selected").val();
    var title   = $('#title').val();
    var id      = $('#mid').val();

    if(title == '' || title== undefined){
        layer.msg('请填写新闻标题');
        return ;
    }

    if(id == '' || id==undefined){
        layer.msg('数据不合法');
        return ;
    }

    var content = editor.document.getBody().getHtml();//取得html文本

    $.post(urls,{'title':title,'pid':pid,'content':content,'id':id},function(ret){
        if(ret.code == 200){
            layer.msg(ret.msg,{icon:6},function(){
                parent.location.href="index";
            })
        }

        if(ret.code == 400){
            layer.msg(ret.msg,{icon:5},function(){
                parent.location.href="index";
            })
        }
    },'json')
})