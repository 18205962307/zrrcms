$(function(){
	//分享动画
	$('.msoverbox').hover(function(){
			$('.fx').stop(true, true).animate({width:"138px"});
		},function(){
			$('.fx').stop(true, true).animate({width:"40px"});
	});
	//点击digg后切换
 $(".like").click(function(){
   $(this).addClass("islike");
   })
})
//加载更多 qq677123
$(".a2 a").click(function() {
		$(".a2").hide();
		$(".b2").show();
	});

$(".a3 a").click(function() {
		$(".a3").hide();
		$(".b3").show();
	});