window.onload = function () {


    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(top)
        // console.log(document.body.scrollTop);
        // console.log(document.documentElement.scrollTop);

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

    

}
