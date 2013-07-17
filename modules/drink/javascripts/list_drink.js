//on load
$(function(){
	//list actions
	var jt_action=[
		{
		"label":"Test",
		"icon":"../../images/drink.svg",
		"action":testAlert
		},
		{
		"label":"Prova",
		"icon":"../../images/food.svg",
		"action":testAlert
		},
		{
		"label":"We",
		"icon":"../../images/message.svg",
		"action":testAlert
		},
	];
	//
	jt=new jqueryTable(jt_action,"100");
	jo=new jqueryOverlay();
});

//actions ##################################################################################################################
//
function testAlert(){
	alert("we");
}

//functions ##################################################################################################################
//
function insert(){
	jo.create("inup_drink.php");
}

