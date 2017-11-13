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

//加载更多
$('#pageNo').val(1);
function getMoreSortAppInfo() {
	$('#morenews').hide();
	$('#loading').show();
	var pageNo = $('#pageNo').val();
	var pageCnt = $('#pageCnt').val();
	var classid = $('#classid').val();
	var sid = $('#sid').val();
	if (eval(pageNo) >= eval(pageCnt)) {
		$('#loading').hide();
		$('#noMore').show();
		return;
	} else {
		pageNo = eval(pageNo) + 1;
	}
	var error = 0;
	var type = $("#type").val();
	var toUrl='/e/ikaimi/ztajax.php?classid='+classid+'&id='+sid+'&page='+pageNo;
	$.ajax({
		url: toUrl,
		type: 'GET',
		cache: false,
		dataType: 'text',
		complete: function() {
			$('#loading').hide();
			if (error == 1) {
				$('#morenews').html('重新加载');
				$('#noMore').show();
				$('#morenews').hide();
			} else {
				$('#morenews').html('点击加载更多内容 &darr;');
				if (eval(pageNo) >= eval(pageCnt)) {
					$('#noMore').show();
				} else {
					$('#morenews').show();
				}
			}
		},
		success: function(data) {
			if (data) {
				$('#content_list').append(data);
				$('#pageNo').val(pageNo);
			} else {
				error = 1;
			}
		},
		error: function() {
			error = 1;
		}
	});

}
