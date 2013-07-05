<?php
//
require_once("../../include.php");
//
$l->createHeader();
$l->createPageTitleBar($def_title,$dict["TITLE_FOOD"]);
//sql
$sql=sprintf("	SELECT
		*
		
		FROM
		product
		
		WHERE
		type=1");
$res=$db->getRows($sql);
//field
$fields=array(
	//
	"name"=>array(
		"label"=>"Nome",
		"width"=>"95%",
		),
);
//list
$l->createList($fields,$res["rows"]);
//
$l->createFooter();
//
?>
