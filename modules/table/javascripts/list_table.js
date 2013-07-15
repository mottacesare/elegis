$(window).load(function(){
	//
	jo=new jqueryOverlay();
	//
	var jc=new jqueryCsv("svg_plan",".svg_table",function(id){
		jo.create("../table/manage_table.php?id_table="+id);
	});
});
