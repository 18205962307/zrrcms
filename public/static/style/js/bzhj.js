//加载更多
$('#pageNo').val(1);
function getMoreSortAppInfo() {
	$('#morenews').hide();
	$('#loading').show();
	var pageNo = $('#pageNo').val();
	var pageCnt = $('#pageCnt').val();
	if (eval(pageNo) >= eval(pageCnt)) {
		$('#loading').hide();
		$('#noMore').show();
		return;
	} else {
		pageNo = eval(pageNo) + 1;
	}
	var error = 0;
	var type = $("#type").val();
	var toUrl='/e/ikaimi/bzsajax.php?classid=29&page='+pageNo;
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
				$('#morenews').html('点击加载更多内容&nbsp;&nbsp;&darr;');
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