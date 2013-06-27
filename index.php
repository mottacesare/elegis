<?php
//
require_once("include.php");
//create header
$l->createIndexHeader($def_title);
//create menu
$frame_set=array(
	array(
		"name"=>"leftFrame",
		"url"=>"modules/menu/menu.php",
		"size"=>"8%",
	),
	array(
		"name"=>"centerFrame",
		"url"=>"modules/home/home.php",
		"size"=>"*",
	),
);
$l->createFrameSet($frame_set);
//create footer
$l->createIndexFooter();
//
?>
