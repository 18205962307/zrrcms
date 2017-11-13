$(function(){
	myhover('.star_list_left li');
	myhover('.star_xiezhen li');
	myhover('.game_tabs_container li');
})
//tab切换
$(function(){
      $(".changeMenu > ul > li > a").mouseover(function(e){          
		  if(this == e.target){
            var container = $(this).parent().parent();
            var index = $.inArray(this, $(this).parent().parent().parent().find("a"));
			var panels,temStyle;
			panels = $(this).parent().parent().parent().parent().find(".ui-tabs-panel");					
			if (panels.eq(index).is(".ui-tabs-panel")){
					
				if($(container).children().is(".on")){
				  $(container).children().removeClass("on").eq(index).addClass("on");
				}
				panels.addClass("conNo").eq(index).removeClass("conNo");				
				}            			
          }
      });
});
//AJAX筛选
$().ready(function(){
	$("#sxsex a").each(function(){
		$(this).click(function(){
			$("#sxsex a").removeClass("on");
			$(this).attr("class", "on");
			var value= $(this).attr("mynum");	
			$("#sosex").val(value);
			showlist(1);
			return false;
		})
	});
	
	$("#sxjob a").each(function(){
		$(this).click(function(){
			$("#sxjob a").removeClass("on");
			$(this).attr("class", "on");
			var value= $(this).attr("mynum");
			$("#sojob").val(value);
			showlist(1);
			return false;
		})
	});
	
		$("#sxarea a").each(function(){
		$(this).click(function(){
			$("#sxarea a").removeClass("on");
			$(this).attr("class", "on");
			var value= $(this).attr("mynum");
			$("#soarea").val(value);
			showlist(1);
			return false;
		})
	});
});

function showlist(page){
	var sex =$("#sosex").val();
	var job =$("#sojob").val();
	var area =$("#soarea").val();
	var classid =$("#classid").val();		
	if(isUndefined(classid)){ 
		classid='';
	}
	if(isUndefined(sex)){ 
		sex='';
	}
	if(isUndefined(job)){ 
		job='';
	}
	if(isUndefined(area)){ 
		area='';
	}


	$.ajax({  
		url:"/e/ikaimi/mxajax.php?a=search",  
		type:"get",  
		data:"sex="+sex+"&job="+job+"&area="+area+"&classid="+classid+"&page="+page,  
		dataType:"jsonp",
		success:function(jsonp){
			if (jsonp.list == null) jsonp.list='';
			if (jsonp.pages == null) jsonp.pages='';
			$('#sn_list').html(jsonp.list);
			$('#plist').html(jsonp.pages);
		}
	});	
}

function isUndefined(variable) {  
	return typeof variable == 'undefined' ? true : false;  
}