window.onscroll = function(){
    var top = document.body.scrollTop | document.documentElement.scrollTop;
    console.log(top)	
    var box=document.getElementById("headerContent");
    var logo=document.getElementById("logo");
    var headerTotal=document.getElementById("headerTotal");
    var search =document.getElementById("search");
    if(top>=820){
      box.style.backgroundColor="black";
      box.style.position='fixed'
      // box.style.top='0'+px
      logo.style.display='none'
      headerTotal.style.position='absolute'
    }
    else if(top<820){
        box.style.backgroundColor="";
        logo.style.display='block'
        box.style.position=''
        headerTotal.style.position=''

      }
      // if(top>2670){
      //   search.style.display='block'
      //   search.style.position='absolute'
      //   search.style.bottom=-51+'px'
      //   search.style.right=56+'px'
      // }else if(top<2670){
      //   search.style.display='none'
      //   search.style.position=''
      // }

    };