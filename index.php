<?php
//
require_once("include.php");
//create header
$l->createHeader($def_title);
//create menu
$frame_set=array(
	array(
		"name"=>"leftFrame",
		"url"=>"test.php",
		"size"=>"8%",
	),
	array(
		"name"=>"centerFrame",
		"url"=>"test.php",
		"size"=>"20%",
	),
	array(
		"name"=>"rightFrame",
		"url"=>"test.php",
		"size"=>"*",
	),
);
$l->createFrameSet($frame_set);
//create footer
$l->createFooter();
//
?>
