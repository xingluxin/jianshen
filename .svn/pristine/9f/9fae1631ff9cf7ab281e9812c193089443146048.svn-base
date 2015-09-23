// JavaScript Document

$(function(){
  $(".pos3").hide();
  $(".four_box dl").hover(function(){
	$(this).find(".pos3").show();
 },function(){
	$(this).find(".pos3").hide(); 
	})
})

$(function(){
 $(".ban2 img:gt(0)").hide();
 var num=$(".ban2 img").length;
 var i;
 for(i=1;i<=num;i++)
 {
   $(".ban2 p").append("<h6>"+i+"</h6>");	 
 }
 $(".ban2 h6:first").addClass("bg2");
 $(".ban2 h6").mouseover(function(){
	$(this).addClass("bg2").siblings().removeClass("bg2") 
	var a=$(this).index();
	$(".ban2 img").eq(a).fadeIn(30).stop(true,true).siblings(".ban2 img").hide();
  })
    int2=setInterval(function(){
	var text2=$(".bg2").index(".ban2 h6")
	if(text2+1==num)
	{
		next2=0;
	}
	else
	{
	  next2=text2+1;	
	} 
	$(".ban2 h6").eq(next2).trigger("mouseover");
  },3000)
   $(".ban2 img").mouseover(function(){
	   clearInterval(int2);
   }).mouseout(function(){
	int2=setInterval(function(){
	var text2=$(".bg2").index(".ban2 h6")
	if(text2+1==num)
	{
		nextt=0;
	}
	else
	{
	  next=text2+1;	
	} 
	$(".ban2 h6").eq(next).trigger("mouseover");
  },3000)
   })
})


 $(function(){
 $(".ban img:gt(0)").hide();
 var num=$(".ban img").length;
 var i;
 for(i=1;i<=num;i++)
 {
   $(".ban p").append("<span>"+i+"</span>");	 
 }
 $(".ban span:first").addClass("bg");
 $(".ban span").mouseover(function(){
	$(this).addClass("bg").siblings().removeClass("bg") 
	var a=$(this).index();
	$(".ban img").eq(a).fadeIn(500).stop(true,true).siblings(".ban img").hide();
  })
    int=setInterval(function(){
	var text=$(".bg").index(".ban span")
	if(text+1==num)
	{
		next=0;
	}
	else
	{
	  next=text+1;	
	} 
	$(".ban span").eq(next).trigger("mouseover");
  },3000)
   $(".ban img").mouseover(function(){
	   clearInterval(int);
   }).mouseout(function(){
	int=setInterval(function(){
	var text=$(".bg").index(".ban span")
	if(text+1==num)
	{
		next=0;
	}
	else
	{
	  next=text+1;	
	} 
	$(".ban span").eq(next).trigger("mouseover");
  },3000)
   })
})

$(function(){
 $(" .nav li:first").hover(function(){
	 $(".left2_nav").slideDown(); 
	},function(){
	 $(".left2_nav").slideUp();
	})	
 })
$(function(){
 $(".input").focus(function(){
  if($(this).val()==this.defaultValue)
	 {
	   $(this).val("");	 
	 };
   }).blur(function(){
	  if($(this).val()=="") 
	{
	 $(this).val(this.defaultValue)	
	};	 
   });
});

$(function(){
  $("#jia").click(function(){
	 var nums=$("#num").val();
	 var result=parseInt(nums)+1;
	 $("#num").val(result);
  });
  $("#jian").click(function(){
	  var nums=$("#num").val();
	  var result=parseInt(nums)-1;
	  $("#num").val(result);
  });
});
$(function(){
  $("#jia1").click(function(){
	 var nums=$("#num1").val();
	 var result=parseInt(nums)+1;
	 $("#num1").val(result);
  });
  $("#jian1").click(function(){
	  var nums=$("#num1").val();
	  var result=parseInt(nums)-1;
	  $("#num1").val(result);
  });
});

$(function() {
 var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($  ("body"))
	.text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
		$("html, body").animate({ scrollTop: 0 }, 120);
}), $backToTopFun = function() {
	var st = $(document).scrollTop(), winh = $(window).height();
	(st > 0)? $backToTopEle.show(): $backToTopEle.hide();
	//IE6下的定位
	if (!window.XMLHttpRequest) {
		$backToTopEle.css("top", st + winh - 166);
	};
};
$(window).bind("scroll", $backToTopFun);
$(function() { $backToTopFun(); });
})();

