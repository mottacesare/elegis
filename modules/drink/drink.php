<?php
//
require_once("../../include.php");
//
$l->createHeader();
$l->createPageTitleBar($def_title,$dict["TITLE_DRINK"]);
//test single row
$fields=array(
	//
	"name"=>array(
		"label"=>"Nome",
		"width"=>"20%",
		),
	"rate"=>array(
		"label"=>"Giudizio",
		"width"=>"80%",
		),
);
//
$values=array(
	array(
		"a"=>"aaa",
		"b"=>"bbb",
		"c"=>"ccc",
		"name"=>"Birrazza Gelata",
		"rate"=>"Buona di bestia",
		"d"=>"ddd",
		"e"=>"eee",
	),
	array(
		"a"=>"aaa",
		"b"=>"bbb",
		"c"=>"ccc",
		"name"=>"Vino Caldo",
		"rate"=>"Basta bere",
		"d"=>"ddd",
		"e"=>"eee",
	),
);
//
$l->createList($fields,$values);
$l->createFooter();
//
?>
