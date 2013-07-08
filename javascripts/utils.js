
//checkbox selected on list row
function __selCheckbox(ref){
	//get all checkbox
	var sel=$(ref).find('input')[0];
	var check_color="";
	//check if selected or not
	if(sel.value==0){
		sel.value=1;
		check_color='#aaaaaa';
		td_color='#aaaaaa';
	}else{
		sel.value=0;
		check_color='#f7f7f7';
		td_color='#f7f7f7';
	}
	//change color on checkbox
	$(ref).css('background-color',check_color);
	//change color on all td in the same row of checkbox
	$(ref).siblings().each(function(i,e){
		$(e).css('background-color',td_color);
		$(e).css('border-color',td_color);
	});
}
