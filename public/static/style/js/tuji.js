$(document).on("keydown", function(event) {
	switch (event.keyCode) {
	case 37:
		window.location.href = $('.pre').attr('href');
		break;
	case 39:
		window.location.href = $('.next').attr('href');
		break;
	}
});
function gotourl(url) {
			window.location = url;
};
function btnaddress() {
	var conheight = $('.picsboxcenter').height();
	var btntop = conheight / 2 - 31;
	$('.pre').add('.next').css('top', btntop);
};
$(function(){
 $(".add").click(function(){
   $(this).addClass("addon");
   })
})