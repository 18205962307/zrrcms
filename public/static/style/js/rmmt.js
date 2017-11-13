$(function(){
	myhover('.jx_list ul li');	
})
function rollText(num){
	$('.jx_list ul').hide().eq(num).show();
}
function do_totals1()
 {
    document.all.clti.style.pixelBottom = (document.body.scrollBottom + 50);
    document.all.clti.style.display = "block";
    window.setTimeout('do_totals2()', 500);
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