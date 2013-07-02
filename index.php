<?php
//
require_once("include.php");
//create header
$l->createIndexHeader($def_title);
//create menu
$frame_arr=array(
	array(
		"name"=>"leftFrame",
		"url"=>"modules/menu/menu.php",
		"size"=>"4%",
	),
	array(
		"name"=>$def_right_frame,
		"url"=>"modules/home/home.php",
		"size"=>"*",
	),
);
$l->createFrameSet($frame_arr);
//create footer
$l->createIndexFooter();
//
?>
