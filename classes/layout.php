<?php
//
Class layout{
	//
	function __construct(){
	}
	
	//
	function createIndexHeader($title){
		echo sprintf("	<html>
				<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><title>%s</title></head>",$title);
	}
	
	//
	function createIndexFooter(){
		echo sprintf("	<noframes><body></body></noframes>
				</html>");
	}
	
	//
	function createHeader(){
		echo sprintf("	<html>
				<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><title></title>
				
				<link href=\"../../css/style.css\" rel=\"stylesheet\" type=\"text/css\">
				
				<script src=\"../../javascripts/jquery-1.10.2.js\" type=\"text/javascript\"></script>
				<script src=\"../../javascripts/classes.js\" type=\"text/javascript\"></script>
				<script src=\"../../javascripts/utils.js\" type=\"text/javascript\"></script>
				<script src=\"../../javascripts/d3/d3.v3.min.js\" type=\"text/javascript\"></script>
				
				</head>
				<body class=\"page_body\">");
	}
	
	//
	function createFooter(){
		echo sprintf("</body></html>");
	}
	
	//
	function addJavascripts($js_arr){
		$js_str="";
		//
		foreach($js_arr as $j){
			$js_str.=sprintf("<script src=\"%s\" type=\"text/javascript\"></script>",$j);
		}
		//
		echo $js_str;
	}
	
	//
	function createFrameSet($frame_arr,$border="4px"){
		$size_str="";
		$frame_str="";
		//
		foreach($frame_arr as $f){
			$frame_str.=sprintf("<frame src=\"%s\" name=\"%s\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" bordercolor=\"#ffffff\">",$f["url"],$f["name"]);
			$size_arr[]=$f["size"];
		}
		//
		$size_str=implode(",",$size_arr);
		echo sprintf("<frameset rows=\"*\" cols=\"%s\" framespacing=\"%s\" frameborder=\"1\" border=\"%s\" noresize bordercolor=\"#ffffff\">%s</frameset>",$size_str,$border,$border,$frame_str);
	}
	
	//
	function createIconMenu($images_arr,$frame){
		$img_str="";
		//
		foreach($images_arr as $i){
			$img_str.=sprintf("	<a href=\"%s\" alt=\"%s\" target=\"%s\">
						<div class=\"menu_div\" title=\"%s\" onclick=\"highlightIconMenu(this)\">
							<img class=\"menu_img\" src=\"%s\"></img>
						</div>
						</a>",$i["url"],$i["name"],$frame,$i["name"],$i["img_src"]);
		}
		//
		echo $img_str;
	}
	
	//
	function createPageTitleBar($title,$page_title){
		echo sprintf("	<div class=\"page_title_bar\">
					<div style=\"float:left;font-weight:bold;font-size:20px;\">%s</div>
					<div class=\"font_rez\" style=\"float:right;font-size:25px;\">%s</div>
				</div>",$page_title,$title);
	}
	
	//
	function createIconBar($images_arr){
		$img_str="";
		//
		foreach($images_arr as $i){
			$img_str.=sprintf("	<div class=\"icon_bar_div\" title=\"%s\" onclick=\"%s\">
							<img class=\"icon_bar_img\" src=\"%s\"></img>
						</div>",$i["name"],$i["js"],$i["img_src"]);
		}
		//
		echo $img_str;
	}
	
	//
	function createList($fields,$values){
		//open table
		echo "<div><table id=\"page_list_table\" class=\"page_list_table\">";
		//create td with action manu button
		echo sprintf("<tr><th class=\"page_list_action\"></th>");
		//create list header
		foreach($fields as $f){
			//create th
			echo sprintf("<th class=\"page_list_field\" style=\"width:%s;\"><span>%s</span></th>",$f["width"],$f["label"]);
		}
		//close th row
		echo "</tr>";
		//create list rows
		foreach($values as $row){
			//open row
			echo sprintf("<tr id=\"row_%s\">",$row["mainid"]);
			//create td with fake checkbox
			echo sprintf("<td class=\"page_list_action\"><div class=\"page_list_action_checkbox\"><input type=\"hidden\" id=\"sel_%s\" value=\"false\"></div></td>",$row["mainid"]);
			//create row
			foreach($fields as $k=>$f){
				//flag field
				if($f["type"]=="bool"){
					$bool_img="";
					if($row[$k]==0 || $row[$k]==false){
						$bool_img="";
					}else if($row[$k]==1 || $row[$k]==true){
						$bool_img="../../images/check.svg";
					}
					echo sprintf("<td class=\"page_list_field\" style=\"width:%s;\"><img class=\"icon_bar_img\" src=\"%s\"></img></td>",$f["width"],$bool_img);
				}
				//text field
				else{
					echo sprintf("<td class=\"page_list_field\" style=\"width:%s;\"><span>%s</span></td>",$f["width"],$row[$k]);
				}
			}
			//close row
			echo "</tr>";
		}
		//close table
		echo "</table></div>";
	}
}
//
?>
