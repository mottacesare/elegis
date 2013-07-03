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
				<head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'><title></title>
				
				<link href=\"../../css/style.css\" rel=\"stylesheet\" type=\"text/css\">
				
				<script src='../../javascripts/d3/d3.v3.min.js' type='text/javascript'></script>
				
				</head>
				<body class='page_body'>");
	}
	
	//
	function createFooter(){
		echo sprintf("	</body>
				</html>");
	}
	
	//
	function addJavascripts($js_arr){
		$js_str="";
		//
		foreach($js_arr as $j){
			$js_str.=sprintf("<script src='%s' type='text/javascript'></script>",$j);
		}
		//
		echo $js_str;
	}
	
	//
	function createFrameSet($frame_arr,$border=5){
		$size_str="";
		$frame_str="";
		//
		foreach($frame_arr as $f){
			$frame_str.=sprintf("<frame src='%s' name='%s' frameborder='0' marginwidth='0' marginheight='0' bordercolor='#ffffff'>",$f["url"],$f["name"]);
			$size_arr[]=$f["size"];
		}
		//
		$size_str=implode(",",$size_arr);
		echo sprintf("<frameset rows='*' cols='%s' framespacing='%s' frameborder='1' border='%s' noresize bordercolor='#ffffff'>%s</frameset>",$size_str,$border,$border,$frame_str);
	}
	
	//
	function createIconMenu($images_arr,$frame){
		$img_str="";
		//
		foreach($images_arr as $i){
			$img_str.=sprintf("<a href='%s' alt='%s' target='%s'><div class='menu_div'><img class='menu_img' src='%s'></img></div></a>",$i["url"],$i["name"],$frame,$i["img_src"]);
		}
		//
		echo $img_str;
	}
}
//
?>
