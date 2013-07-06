<?php
//
require_once("../../include.php");
//
$l->createHeader();
$l->addJavascripts(array("javascripts/drink.js"));
$l->createPageTitleBar($def_title,$dict["TITLE_DRINK"]);
//
//######################################################################################
$images_arr=array(
	array(
		"name"=>$dict["NEW"],
		"js"=>"insert();",
		"img_src"=>"../../images/plus.svg",
	),
);
$l->createIconBar($images_arr);
//
//######################################################################################
$sql=sprintf("	SELECT
		id AS mainid,
		*
		
		FROM
		product
		
		WHERE
		type=0");
$res=$db->getRows($sql);
//
$fields=array(
	//
	"name"=>array(
		"label"=>"Nome",
		"width"=>"95%",
		),
	"type"=>array(
		"label"=>"Tipo",
		"width"=>"5%",
		),
);
//
$l->createList($fields,$res["rows"]);
//
//
$l->createFooter();
//
?>
