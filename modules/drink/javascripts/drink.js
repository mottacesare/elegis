//on load
$(function(){
	var jt=new jqueryTable();
});

//
function insert(){
	//append overlay trasparent and page to body
	$("body").append("<div id='overlay'></div>");
	$("body").append("<div class='overlay_page'></div>");
	$(".overlay_page").load("drink.php");
	
	$("#overlay").click(function(){
		$(".overlay_page").remove();
		$("#overlay").remove();
	})
}

