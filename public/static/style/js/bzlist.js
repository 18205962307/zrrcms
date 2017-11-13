$(function(){
	$('.order-tab').hover(function(){
		$(this).find('.mr').addClass('onmr');
		$('.orderlist').css('display','block');
	},function(){
		$(this).find('.mr').removeClass('onmr');
		$('.orderlist').css('display','none');
	})
	
	//alert(getCookie("isdisplay"));
	var isdisplaybtn =  getCookie("isdisplay");
	if(isdisplaybtn == 'none'){
		//记住默认选项是隐藏的
		$('.hide-btn a').addClass('on');
		$('.hide-btn a').html('显示选项');
		$('.listleft').css('display','none');
		$('.listright').width(1176);
		$('.listright ul.piclist').width(1200);
		
	}else if(isdisplaybtn == 'block'){
		//记住默认选项是展开的
		$('.hide-btn a').removeClass('on');
		$('.hide-btn a').html('隐藏选项');
		$('.listright ul.piclist').width(962);
		$('.listright').width(938);
		$('.listleft').css('display','block');
	}
	
	$('.hide-btn a').click(function(){
		if($(this).hasClass('on')){
			//alert('有onclass');
			setCookie("isdisplay","block","s3600");
			$(this).removeClass('on');
			$(this).html('隐藏选项');
			$('.listright ul.piclist').width(962);
			$('.listright').width(938);
			$('.listleft').css('display','block');
		}else{
			//alert('没有on');
			setCookie("isdisplay","none","s3600");
			$(this).addClass('on');
			$(this).html('显示选项');
			$('.listleft').css('display','none');
			$('.listright').width(1176);
			$('.listright ul.piclist').width(1200);
			
			
		}	
	})

	
	$('.color-table td a').hover(function(){
		$(this).find('i').css('display','block');
	},function(){
		if(!$(this).hasClass('on')){
			$(this).find('i').css('display','none');
		}
	})
	
})

//设置cookie
function setCookie(name,value,time)
{
    var strsec = getsec(time);
    var exp = new Date();
    exp.setTime(exp.getTime() + strsec*1);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString()+"; path=/";
	//path="/";//设置存储在更目录下
}

function getsec(str)
{
   //alert(str);
   var str1=str.substring(1,str.length)*1;
   var str2=str.substring(0,1);
   if (str2=="s")
   {
        return str1*1000;
   }
   else if (str2=="h")
   {
       return str1*60*60*1000;
   }
   else if (str2=="d")
   {
       return str1*24*60*60*1000;
   }
}
//这是有设定过期时间的使用示例：
//s20是代表20秒
//h是指小时，如12小时则是：h12
//d是天数，30天则：d30

//读取cookies
function getCookie(name)
{
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
    if(arr=document.cookie.match(reg))
 
        return (arr[2]);
    else
        return null;
}

//删除cookies
function delCookie(name)
{
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null)
        document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}