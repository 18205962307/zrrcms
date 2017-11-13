$(function(){
	myhover('.mx_con_top .div1 a,.mx_con_top .div2 .img125120 a,.mx_con_top .div2 .img125170 a,.mx_con_down .img155200 a,.mx_con_down li a');
	myhover('.all_lanmu li');
	myhover('.gqbz li');
	myhover('.jingxuan .img1000 li');
	
	
	//明星搜索	
	$('#div_genre a').click(function(){
		if($(this).attr('class')=='on'){
			$(this).removeClass('on');
			$('#filed_quyu').val(0);
		}else{
			$('#div_genre a').removeClass('on');
			$(this).addClass('on');
			var quyuID = $(this).attr('data');	
			$('#filed_quyu').val(quyuID);	
		}
	})
	
	//轮播图
	$('.mx240 ul li').click(function(){
		var i = $(this).index();
		$('.mx240 ul li').removeClass('kuang');
		$(this).addClass('kuang');
		$('.piclunbo a').removeClass('on').eq(i).addClass('on');
	})
	
	var pici = 0;
	var autoChangepic = function(){
		$('.mx240 ul li').eq((pici + 1 === 3 ? 0 : pici + 1)).addClass('kuang').siblings().removeClass('kuang');	
		$('.piclunbo a').eq((pici + 1 === 3 ? 0 : pici + 1)).addClass('on').siblings().removeClass('on');
		pici = pici + 1 === 3 ? 0 : pici + 1;
	}
	var lb = setInterval(autoChangepic, 3000);
	$('.mx240').hover(function(){
		clearInterval(lb);	
		return false;
	},function(){
		lb = setInterval(autoChangepic, 3000);
		return false;
	})
	
	
	//二维码出现
	$('#cweixin').hover(function(){
		$(this).find('div').fadeIn('fast');
	},function(){
		$(this).find('div').fadeOut('fast');
	})
	
	$('.dingyue').hover(function(){
		$('.qqdingyue').fadeIn('fast');
	},function(){
		$('.qqdingyue').fadeOut('fast');
	})
})

