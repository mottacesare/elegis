<?php
//
require_once("../../include.php");
//
$l->createHeader();
//creazione di un array per le icone del menu
$images_arr=array(
	array(
		"name"=>"Home",
		"url"=>"../home/home.php",
		"img_src"=>"../../images/home.svg",
	),
	array(
		"name"=>"Bevande",
		"url"=>"../../test.php",
		"img_src"=>"../../images/drink.svg",
	),
	array(
		"name"=>"Vivande",
		"url"=>"../../test.php",
		"img_src"=>"../../images/food.svg",
	),
	array(
		"name"=>"Messaggi",
		"url"=>"../../test.php",
		"img_src"=>"../../images/message.svg",
	),
);
//
$l->createIconMenu($images_arr,$def_right_frame);
//
$l->createFooter();
//
?>
