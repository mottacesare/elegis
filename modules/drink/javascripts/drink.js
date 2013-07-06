//on load
$(function(){
	
});

//list checkbox
function selCheckbox(ref){
	//
	var sel=$(ref).find('input')[0];
	//
	if(sel.value==0){
		sel.value=1;
		$(ref).css('background-color','#aaaaaa');
	}else{
		sel.value=0;
		$(ref).css('background-color','#f7f7f7');
	}
}

//img menu
function insert(){
	//
	alert("INSERT");
}

