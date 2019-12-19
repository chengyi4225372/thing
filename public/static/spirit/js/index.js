window.onload = function () {

    var liArr = document.querySelectorAll(".project-tabs");
    var spanArr = document.querySelectorAll(".project-tabs-items");

    for (var i = 0; i < liArr.length; i++) {
        
        liArr[i].index = i;
        liArr[i].onclick = function () {

            for (var j = 0; j < liArr.length; j++) {
                liArr[j].className = "project-tabs";
                spanArr[j].className = "project-tabs-items";
            }
            this.classList.add("tab-active");
            spanArr[this.index].classList.add("show"); 
        }
    }

    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;

        if (top >= 1080) {
            let goTop = document.getElementById('goTop')
            goTop.style.display = "block"

            // console.log(goTop);
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
        } else if (top < 1080) {

            // 返回顶部样式
            let goTop = document.getElementById('goTop')
            goTop.style.display = "none"

        }
    }

    //轮播图
    layui.use('carousel', function () {
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#swiper',
            width: '100%',
            height: '40rem',
            arrow: 'hover',
            // interval:3000,//间隔
            index: 0,
            // anim:'fade'
        });
    });

}