
function search(){
    var keyword = $('#keyword').val();

    if(keyword== '' || keyword==undefined){
        layer.msg('请输入搜索内容');
        return false;
    }

    window.location.href='informationList?keyword='+keyword;
}