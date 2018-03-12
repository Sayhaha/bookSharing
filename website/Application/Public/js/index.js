$(document).ready(function(){
  $(".person-center > a").mouseenter(function(){
    $(this).find('img')[0].src="img/personal-hover.png";
  });
  $(".person-center > a").mouseleave(function(){
    $(this).find('img')[0].src="img/personal.png";
  });
  $("#id1-tool").on("click",function(){
    $("html,body").animate({scrollTop:$("#id1").offset().top
  },600);
  });
  $("#id2-tool").click(function(){
    $("html,body").animate({scrollTop:$("#id2").offset().top
  },600);
  });
  $("#id3-tool").click(function(){
    $("html,body").animate({scrollTop:$("#id3").offset().top
  },600);
  });
  $("#id4-tool").click(function(){
    $("html,body").animate({scrollTop:$("#id4").offset().top
  },600);
  });
  $(".top").click(function(){
    $("html,body").animate({scrollTop:0
  },600);
  });

  $(".menu-item").mouseenter(function(){
      $(this).css({"background-color":"rgba(0,0,0,0.1)"});
  });
  $(".menu-item").mouseleave(function(){
    $(this).css({"background-color":"rgba(0,0,0,0)"});

  });
});
