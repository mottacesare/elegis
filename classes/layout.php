<?php
//
Class layout{
	//
	function __construct(){
	}
	
	//
	function createIndexHeader($title){
		echo sprintf("	<html>
				<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"><title>%s</title></head>",$title);
	}
	
	//
	function createIndexFooter(){
		echo sprintf("	<noframes><body></body></noframes>
				</html>");
	}
	
	//
	function createHeader(){
		echo sprintf("	<html>
				<head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'><title>%s</title>
				<script src='../javascripts/d3/d3.v3.js' type='text/javascript'></script>
				</head>");
	}
	
	//
	function createFooter(){
		echo sprintf("	<noframes><body></body></noframes>
				</html>");
	}
	
	//
	function createFrameSet($frame_set){
		$sizes="";
		$frames="";
		//
		foreach($frame_set as $f){
			$frames.=sprintf("<frame src='%s' name='%s' frameborder='1' marginwidth='0' marginheight='0' bordercolor='#999999'>",$f["url"],$f["name"]);
			$sizes[]=$f["size"];
		}
		//
		$sizes=implode(",",$sizes);
		echo sprintf("<frameset rows='*' cols='%s' framespacing='1' frameborder='1' border='2' bordercolor='#999999'>%s</frameset>",$sizes,$frames);
	}
}
//
?>
