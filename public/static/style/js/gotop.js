//返回顶部
$(window).scroll(function() {
	var scrolltop = $(document).scrollTop(); 
	if(scrolltop>300){
		$('.gototop a').css('display','block');
	}else{
		$('.gototop a').css('display','none');
	}
})
//收藏提示
function addFav(){
	var title = document.title.toString();
	var url = window.location.href;
	    try{
    	window.external.AddFavorite(url,title);
    }catch (e) {
		try{
        	window.sidebar.addPanel(title,url, "");   
		}catch(e){
			alert("您的浏览器不支持一键收藏，请按Ctrl+D将本页添加到收藏夹");
		}
	}
}
document.writeln('<div class="Rfloat">');
document.writeln('<span class="home"><a target="_self" class="fave_b" href="javascript:;" title="添加收藏" onclick="addFav();return false;"></a></span>');
document.writeln('<span class="bdsharebuttonbox"><a href="javascript:;" class="bds_weixin" data-cmd="weixin" title="扫描二维码"></a></span>');
document.writeln('<span class="bdsharebuttonbox"><a href="javascript:;" class="bds_qzone" data-cmd="qzone" title="分享本页面"></a></span>');
document.writeln('<span class="gototop"><a href="javascript:;" hidefocus="ture" onClick="jQuery(\'html,body\').animate({ scrollTop: 0 }, 200);" title="回到顶部"></a></span>');
document.writeln('</div>');
//百度分享
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
window._bd_share_config = {
		common : {
			bdText : '(妹子网 - 高清美女写真网站)分享标题和网址请修改/style/js/gotop.js',	
			bdDesc : '妹子网收集大量高清性感美女图片写真，是国内最全最好的美女图片网站。',	
			bdUrl : 'http://www.dede168.com/', 	
			bdPic : '/style/logo/shareimg.png'
		},
		share : [{
			"bdSize" : 16
		}],
}
