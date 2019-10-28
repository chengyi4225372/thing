window.onload = function () {
  var spans = document.getElementById("change").getElementsByTagName("span")
  // ;
  console.log(spans);
  var divs = document.getElementById("userInfo").getElementsByClassName("phone_user")

  this.console.log(divs)
  for (var i = 0; i < spans.length; i++) {
    spans[i].index = i //创建按钮索引
    spans[i].onclick = function () { //每一个按钮点击事件的方法
      for (var i = 0; i < spans.length; i++) {
        spans[i].classList.remove("active");
        divs[i].style.display = "none";
      }
      //	将对应的索引绑定到一起,点击对应的按钮,对应的内容div就会显示
      spans[this.index].classList.add("active");

      divs[this.index].style.display = "block"
    }
  }
}