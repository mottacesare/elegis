<?php
//
require_once("dictionary.php");
require_once("default_value.php");
//
require_once("classes/layout.php");
require_once("classes/database.php");
require_once("classes/utils.php");
//
$dict=$dict_arr["ITA"];
//
$l=new layout();
$db=new database($db_name,$db_user,$db_passwd);
//
?>
