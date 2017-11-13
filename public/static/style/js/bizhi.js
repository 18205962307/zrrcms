$(function(){
	//首页选项卡js
	$('.tabbtn a').on('mouseover',function(){
		var i = $(this).index();
		//alert(i);
		$(this).parent().find('a').removeClass('on');
		$(this).addClass('on');
		$(this).parent().parent().find('.tab').removeClass('ontab');
		$(this).parent().parent().find('.tab').eq(i).addClass('ontab');
	})
})
//加载更多
$('#pageNo').val(2);
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
	var toUrl='/e/ikaimi/bzajax.php?classid=18,19,20,21,22,23,24,25,26,27,28&page='+pageNo;
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
				$('#morenews').html('点击加载更多精美壁纸&nbsp;&nbsp;&darr;');
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
//首页焦点图插件nav
; (function ($) {
    $.fn.extend({
        "nav": function (con) {
            var $this = $(this), $nav = $this.find('.switch-tab'), t = (con && con.t) || 3000, a = (con && con.a) || 500, i = 0, autoChange = function () {
                $nav.find('a:eq(' + (i + 1 === 4 ? 0 : i + 1) + ')').addClass('current').siblings().removeClass('current');
                $this.find('.event-item:eq(' + i + ')').css('display', 'none').end().find('.event-item:eq(' + (i + 1 === 4 ? 0 : i + 1) + ')').css({
                    display: 'block',
                    opacity: 0
                }).animate({
                    opacity: 1
                }, a, function () {
                    i = i + 1 === 4 ? 0 : i + 1;
                }).siblings('.event-item').css({
                    display: 'none',
                    opacity: 0
                });
            }, st = setInterval(autoChange, t);
            $this.hover(function () {
                clearInterval(st);
                return false;
            }, function () {
                st = setInterval(autoChange, t);
                return false;
            }).find('.switch-nav>a').bind('click', function () {
                var current = $nav.find('.current').index();
                i = $(this).attr('class') === 'prev' ? current - 2 : current;
                autoChange();
                return false;
            }).end().find('.switch-tab>a').bind('click', function () {
                i = $(this).index() - 1;
                autoChange();
                return false;
            });
            return $this;
        }
    });
}(jQuery));
//首页轮播图插件lunbo
; (function ($) {
    $.fn.extend({
        "lunbo": function (con) {
            var $this = $(this), $nav = $this.find('.slide_btn'), t = (con && con.t) || 3000, a = (con && con.a) || 500, i = 0, autoChange = function () {
				j = (i + 1 === 4 ? 0 : i + 1);
				//alert('j='+j+',i='+i+',eq='+(i + 1 === 4 ? 0 : i + 1));
				//alert()
                $nav.find('a:eq(' + (j === -1 ? j+4:j) + ')').addClass('on').siblings().removeClass('on');
                $this.find('.hotzt:eq(' + i + ')').css('display', 'none').end().find('.hotzt:eq(' + (j === -1 ? j+4:j) + ')').css({
                    display: 'block',
                    opacity: 0
                }).animate({
                    opacity: 1
                }, a, function () {
                    i = i + 1 === 4 ? 0 : i + 1;
                }).siblings('.hotzt').css({
                    display: 'none',
                    opacity: 0
                });
            }, st = setInterval(autoChange, t);
            $this.hover(function () {
                clearInterval(st);
                return false;
            }, function () {
                st = setInterval(autoChange, t);
                return false;
            }).find('.slide_btn>span').bind('click', function () {
                var on = $nav.find('.on').index();
				//alert(on);
                i = $(this).attr('class') === 'slide_left' ? on - 2 : on;
                autoChange();
                return false;
            }).end().find('.slide_btn>b>a').bind('click', function () {
                i = $(this).index() - 1;
                autoChange();
                return false;
            });
            return $this;
        }
    });
}(jQuery));
