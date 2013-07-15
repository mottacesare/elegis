<?php
//
require_once("../../include.php");
//
$l->createHeader();
$l->addJavascripts(array("javascripts/manage_table.js"));
$l->createPageTitleBar($def_title,$dict["MANAGE_TABLE"]." ".$_REQUEST["id_table"]);
//
//######################################################################################
//
//
$l->createFooter();
//
?>
