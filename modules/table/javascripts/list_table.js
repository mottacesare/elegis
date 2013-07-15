$(window).load(function(){
	var svg=$(document.getElementById("svg_plan").getSVGDocument());
	//
	svg.find(".svg_table").each(function(i,e){
		//
		$(e).mouseover(function(){
			e.style.setProperty("stroke","#EFE697", "");
			e.style.setProperty("stroke-width","5px", "");
		});
		
		//
		$(e).mouseout(function(){
			e.style.setProperty("stroke-width","0px", "");
		});
		
		//
		$(e).click(function(){
			
		});
	});
});
