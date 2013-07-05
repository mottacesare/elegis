//on load
$(function(){
	
});

//
function highlightIconMenu(ref){
	//get all menu div and set color
	$(".menu_div").each(function(i,e){
		e.style.backgroundColor="#dddddd";
	});
	//set color on selected
	ref.style.backgroundColor="yellow";
}

