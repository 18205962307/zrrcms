$(function(){
	//header 搜索相关
	var hasword = $('#keywords').val();
	if(hasword){$('.searchbar').find('label').css('display','none');}
	
	$('#keywords').on('focus',function(){
		$('.searchbar').find('label').css('display','none');
	})
	
	$('#keywords').on('blur',function(){
		var words = $(this).val();
		if(words){
			$('.searchbar').find('label').css('display','none');
		}else{
			$('.searchbar').find('label').css('display','block');
		}
	})

		
	//经过绑定元素时会多次触发mouseover和mouseout事件
	//jquery的mouseenter和mouseleave方法已经修复了这个问题，可以直接用来替代mouseover和mouseout 
	$('.headercate').on('mouseleave',function(){
		//alert(111);
		$('#cate-btn').attr('class','cate-btn');
		$('.navbox').css('display','none');
	}).on('mouseenter',function(){
		//alert(222);
		$('#cate-btn').attr('class','on-cate-btn');
		$('.navbox').css('display','block');
	})
	$('.tagnav').find('p:last').addClass('lastline');
	
})



