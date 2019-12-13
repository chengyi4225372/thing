window.onload = function () {

    let layuiTabTitle = document.querySelector('.layui-tab-title')
    let navBox = document.querySelector('.nav-box')
    let goTop = document.getElementById('goTop')
    let itemImg = document.querySelectorAll('.plan-advantage-item-img')
    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        console.log(top);

        if (top >= 400) {

            goTop.style.display = "block"
            navBox.style.display = "none"
            layuiTabTitle.classList.add('tab-fixed')

            var timer = null;
            goTop.onclick = function () {
                cancelAnimationFrame(timer);
                //获取当前毫秒数
                var startTime = +new Date();
                //获取当前页面的滚动高度
                var b = document.body.scrollTop || document.documentElement.scrollTop;
                var d = 500;
                var c = b;
                timer = requestAnimationFrame(function func() {
                    var t = d - Math.max(0, startTime - (+new Date()) + d);
                    document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
                    timer = requestAnimationFrame(func);
                    if (t == d) {
                        cancelAnimationFrame(timer);
                    }
                });
            }
            if (top >= 1600) {
                console.log('进来了');
                for (var i = 0; i < itemImg.length; i++) {
                    itemImg[i].classList.add('item-imgbg-active')
                }

            } else {
                for (var i = 0; i < itemImg.length; i++) {
                    itemImg[i].classList.remove('item-imgbg-active')
                }
            }
        } else if (top < 400) {

            // 返回顶部样式
            goTop.style.display = "none"

            navBox.style.display = "block"

            layuiTabTitle.classList.remove('tab-fixed')

        }
    }
    // 标签页
    layui.use('element', function () {
        var element = layui.element;
    });

    // 折叠栏
    let statusBtn = document.querySelectorAll('.status-industry-wm-item-title .status-btn')
    let itemContents = document.querySelectorAll('.status-industry-wm-item .status-industry-wm-item-content')
    for (let i = 0; i < statusBtn.length; i++) {
        statusBtn[i].onclick = function (e) {
            console.log(e.target.id)
            for (let k = 0; k < statusBtn.length; k++) {
                statusBtn[k].style.background = "url('../../static/spirit/images/zhankai.png') no-repeat"
            }
            statusBtn[Number(e.target.id)].style.background = "url('../../static/spirit/images/shouqi.png') no-repeat"
            for (let j = 0; j < itemContents.length; j++) {
                itemContents[j].classList.remove('wm-item-show')
            }
            itemContents[Number(e.target.id)].classList.add('wm-item-show')
        }


    }

}
