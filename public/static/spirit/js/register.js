window.onload = function () {
    var tabArr = document.querySelectorAll(".tabs .tab");
    var tabsitemArr = document.querySelectorAll(".tabs-items .tabs-item");
    let qyonebox = document.querySelector('.tabs-item-qy #one-box')
    let qytwobox = document.querySelector('.tabs-item-qy #two-box')
    let qyonebtn = document.querySelector('#qy-one-btn')
    let qytwobtn = document.querySelector('#qy-two-btn')
    let gronebox = document.querySelector('.tabs-item-gr #one-box')
    let grtwobox = document.querySelector('.tabs-item-gr #two-box')
    let gronebtn = document.querySelector('#gr-one-btn')
    let grtwobtn = document.querySelector('#gr-two-btn')
    let succeedbox = document.querySelector('#succeed-box')
    let formcontent = document.querySelector("#form-content")
    console.log('====================================');
    console.log(qytwobox, qytwobtn);
    console.log('====================================');

    qyonebtn.onclick = function () {
        qyonebox.style.display = "none"
        qytwobox.style.display = "block"
    }
    qytwobtn.onclick = function () {
        succeedbox.style.display = "block"
        formcontent.style.display = "none"
    }
    gronebtn.onclick = function () {
        gronebox.style.display = "none"
        grtwobox.style.display = "block"
    }
    grtwobtn.onclick = function () {
        succeedbox.style.display = "block"
        formcontent.style.display = "none"
    }

    for (var i = 0; i < tabArr.length; i++) {
        //绑定索引值（新增一个自定义属性：index属性）
        tabArr[i].index = i;
        tabArr[i].onclick = function () {

            //1.点亮上面的盒子。   2.利用索引值显示下面的盒子。(排他思想)
            for (var j = 0; j < tabArr.length; j++) {
                tabArr[j].classList.remove("tab-active");
                tabsitemArr[j].classList.remove("tabs-item-active");
            }
            this.classList.add("tab-active");
            tabsitemArr[this.index].classList.add("tabs-item-active");
        }
    }

}