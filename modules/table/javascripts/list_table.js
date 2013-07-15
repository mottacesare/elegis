$(window).load(function(){
	var svg=$(document.getElementById("svg_plan").getSVGDocument());
	//
	svg.find(".svg_table").each(function(i,e){
		//
		$(e).mouseover(function(ref){
			console.log(ref);
		});
		//
		$(e).mouseout(function(ref){
			console.log(ref);
		});
		//
		$(e).click(function(ref){
			console.log(ref);
		});
	});
	
	
	/*t01=svg.getElementById("T01");
	t01.style.setProperty("fill","red", "");*/
});
