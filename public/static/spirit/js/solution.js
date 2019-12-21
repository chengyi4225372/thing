window.onload = function () {

    let layuiTabTitle = document.querySelector('.layui-tab-title')
    let navBox = document.querySelector('.nav-box')
    let goTop = document.getElementById('goTop')
    let itemImg = document.querySelectorAll('.plan-advantage-item-img')
    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(top);

        if (top >= 900) {

            goTop.style.display = "block"
            setTimeout(function() {
                navBox.style.display = "none"
                layuiTabTitle.classList.add('tab-fixed')
            }, 200)

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
            if (top >= 1200) {
                // console.log('进来了');
                for (var i = 0; i < itemImg.length; i++) {
                    itemImg[i].classList.add('item-imgbg-active')
                }

            } else {
                for (var i = 0; i < itemImg.length; i++) {
                    itemImg[i].classList.remove('item-imgbg-active')
                }
            }
        } else if (top < 800) {

            // 返回顶部样式
            goTop.style.display = "none"
            window.setTimeout(function() {
                layuiTabTitle.classList.remove('tab-fixed')
                navBox.style.display = "block"
            }, 200)


        }
    }
    // 标签页
    layui.use('element', function () {
        var element = layui.element;
        element.on('tab(docDemoTabBrief)', function (data) {
            // console.log(this); //当前Tab标题所在的原始DOM元素
            var timer = null;
            cancelAnimationFrame(timer);
            //获取当前毫秒数
            var startTime = +new Date();
            //获取当前页面的滚动高度
            var b = document.body.scrollTop || document.documentElement.scrollTop;
            var d = 400;
            var c = b;
            timer = requestAnimationFrame(function func() {
                var t = d - Math.max(0, startTime - (+new Date()) + d);
                document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
                timer = requestAnimationFrame(func);
                if (t == d) {
                    cancelAnimationFrame(timer);
                }
            });

        });
    });


    // 折叠栏wm
    let statusBtnwm = document.querySelectorAll('.status-industry-wm-item-title-icon .status-btn')
    let itemContentswm = document.querySelectorAll('.status-industry-wm-item .status-industry-wm-item-content-icon')
    let wmImgswm = document.querySelectorAll('.status-industry-wm-imgs-icon img')
    // console.log(wmImgswm, itemContentswm, statusBtnwm);

    for (let i = 0; i < statusBtnwm.length; i++) {
        statusBtnwm[i].onclick = function (e) {
            // console.log(e.target.id)
            for (let k = 0; k < statusBtnwm.length; k++) {
                statusBtnwm[k].style.background = "url('../../static/spirit/images/zhankai.png') no-repeat"
                statusBtnwm[k].style.backgroundSize = "100% 100%"
            }
            statusBtnwm[Number(e.target.id)].style.background = "url('../../static/spirit/images/shouqi.png') no-repeat"
            statusBtnwm[Number(e.target.id)].style.backgroundSize = "100% 100%"
            for (let j = 0; j < itemContentswm.length; j++) {
                itemContentswm[j].classList.remove('wm-item-show')
            }
            itemContentswm[Number(e.target.id)].classList.add('wm-item-show')
            for (let l = 0; l < wmImgswm.length; l++) {
                wmImgswm[l].classList.remove('wm-img-active')
            }
            wmImgswm[Number(e.target.id)].classList.add('wm-img-active')
        }
    }

    // 折叠栏xls
    let statusBtnxls = document.querySelectorAll('.status-industry-xls-item-title-icon .status-btn')
    let itemContentsxls = document.querySelectorAll('.status-industry-wm-item .status-industry-xls-item-content-icon')
    let wmImgsxls = document.querySelectorAll('.status-industry-xls-imgs-icon img')
    // console.log(wmImgsxls, itemContentsxls, statusBtnxls);

    for (let i = 0; i < statusBtnxls.length; i++) {
        statusBtnxls[i].onclick = function (e) {
            let num = ''
            if (e.target.id == 3) {
                num = 0
            } else if (e.target.id == 4) {
                num = 1
            } else {
                num = 2
            }

            // console.log(e.target.id)
            for (let k = 0; k < statusBtnxls.length; k++) {
                statusBtnxls[k].style.background = "url('../../static/spirit/images/zhankai.png') no-repeat"
                statusBtnxls[k].style.backgroundSize = "100% 100%"
            }
            statusBtnxls[num].style.background = "url('../../static/spirit/images/shouqi.png') no-repeat"
            statusBtnxls[num].style.backgroundSize = "100% 100%"
            for (let j = 0; j < itemContentsxls.length; j++) {
                itemContentsxls[j].classList.remove('wm-item-show')
            }
            itemContentsxls[num].classList.add('wm-item-show')
            for (let l = 0; l < wmImgsxls.length; l++) {
                wmImgsxls[l].classList.remove('wm-img-active')
            }
            wmImgsxls[num].classList.add('wm-img-active')
        }


    }


    // 折叠栏zx
    let statusBtnzx = document.querySelectorAll('.status-industry-zx-item-title-icon .status-btn')
    let itemContentszx = document.querySelectorAll('.status-industry-wm-item .status-industry-zx-item-content-icon')
    let wmImgszx = document.querySelectorAll('.status-industry-zx-imgs-icon img')
    // console.log(wmImgszx, itemContentszx, statusBtnzx);

    for (let i = 0; i < statusBtnzx.length; i++) {
        statusBtnzx[i].onclick = function (e) {
            let num1 = ''
            if (e.target.id == 6) {
                num1 = 0
            } else if (e.target.id == 7) {
                num1 = 1
            } else {
                num1 = 2
            }

            // console.log(e.target.id)
            for (let k = 0; k < statusBtnzx.length; k++) {
                statusBtnzx[k].style.background = "url('../../static/spirit/images/zhankai.png') no-repeat"
                statusBtnzx[k].style.backgroundSize = "100% 100%"
            }
            statusBtnzx[num1].style.background = "url('../../static/spirit/images/shouqi.png') no-repeat"
            statusBtnzx[num1].style.backgroundSize = "100% 100%"
            for (let j = 0; j < itemContentszx.length; j++) {
                itemContentszx[j].classList.remove('wm-item-show')
            }
            itemContentszx[num1].classList.add('wm-item-show')
            for (let l = 0; l < wmImgszx.length; l++) {
                wmImgszx[l].classList.remove('wm-img-active')
            }
            wmImgszx[num1].classList.add('wm-img-active')
        }


    }

}
