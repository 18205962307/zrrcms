$(function(){
	myhover('.toplist_left li');
	myhover('.toplist_right li');
	
	$('.toplist_right li:lt(12)').show();
	$('.toppage a').click(function(){
		var i = $(this).index();
		var mini = i*12-1  		//
		$('.toppage a').removeClass('on');
		$(this).addClass('on');

		$('.toplist_right li').hide();
		if(i==0){
			$(".toplist_right li:lt(12)").show();	
		}else{
			$(".toplist_right li:gt("+mini+"):lt(12)").show();
		}
	})
})
function do_totals1()
 {
    document.all.clti.style.pixelBottom = (document.body.scrollBottom + 50);
    document.all.clti.style.display = "block";
    window.setTimeout('do_totals2()', 300);
}
function do_totals2()
 {
    lengthy_calculation();
    document.all.clti.style.display = "none";
}
function lengthy_calculation()
 {
    var x,
    y
    for (x = 0; x < 999; x++)
    {
        y += (x * y) / (y - x);
    }
}