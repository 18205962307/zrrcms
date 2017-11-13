//鼠标经过效果
function myhover(dom){
	$(dom).hover(function(){
		$(this).addClass('hover');
	},function(){
		$(this).removeClass('hover');
	})
}

$(function(){
	//头部二级菜单
	$('.topulnav li').hover(function(){
		$(this).find('.childnav').show();
		$(this).addClass('on');
	},function(){
		$(this).find('.childnav').hide();
		$(this).removeClass('on');
	})	
	
	//头部搜索框
	$('#searchkeywords').on('focus',function(){
		if($(this).val()=='输入美女词后按回车键...'){
			$(this).val('');
			$(this).css('color','#f1f1f1');
		}
	}).on('blur',function(){
		if($(this).val()==''){
			$(this).val('输入美女词后按回车键...');
			$(this).css('color','#9f9f9f');
		}
	})
	
})

