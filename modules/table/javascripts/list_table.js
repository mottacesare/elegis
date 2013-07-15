$(window).load(function(){
	var filename="svg_plan";
	var classname=".svg_table";
	var svg=$(document.getElementById(filename).getSVGDocument());
	//
	svg.find(classname).each(function(i,e){
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
		$(e).click(function(ref){
			$(e).siblings(classname).each(function(ii,ee){
				ee.style.setProperty("stroke-width","0px", "");
			});
		});
	});
});
