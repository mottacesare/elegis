<?php
//
require_once("../../include.php");
//
$l->createHeader();
$l->addJavascripts(array("javascripts/food.js"));
$l->createPageTitleBar($def_title,$dict["TITLE_FOOD"]);
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
		type=1");
$res=$db->getRows($sql);
//
$fields=array(
	//
	"name"=>array(
		"label"=>"Nome",
		"width"=>"10%",
		),
	"description"=>array(
		"label"=>"Descrizione",
		"width"=>"85%",
		),
);
//
$l->createList($fields,$res["rows"]);
//
//
$l->createFooter();
//
?>
