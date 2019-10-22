window.onscroll = function(){
    var top = document.body.scrollTop | document.documentElement.scrollTop;
    console.log(top)	
    var box=document.getElementById("headerContent");
    var logo=document.getElementById("logo");
    var headerTotal=document.getElementById("headerTotal");
    if(top>=1080){
      box.style.backgroundColor="black";
      box.style.position='fixed'
      // box.style.top='0'+px
      logo.style.display='none'
      headerTotal.style.position='absolute'
    }
    else if(top<1080){
        box.style.backgroundColor="";
        logo.style.display='block'
        box.style.position=''
        headerTotal.style.position=''

      }
    };