//on load
$(function(){
	//list actions
	var jt_action=[
		{
		"label":"Test",
		"icon":"../../images/drink.svg",
		"action":function(){alert('test')}
		},
		{
		"label":"Prova",
		"icon":"../../images/food.svg",
		"action":function(){alert('prova')}
		},
	];
	//
	jt=new jqueryTable(jt_action,"100");
	jo=new jqueryOverlay();
});

//actions ##################################################################################################################
//
/*function insert(){
	jo.create("inup_drink.php");
}*/

//functions ##################################################################################################################
//
function insert(){
	jo.create("inup_drink.php");
}

