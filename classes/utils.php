<?php

//
if(!function_exists("pr") && !function_exists("pre")) { 
	//print formatted array
	function pr($str){
		echo "<pre>";
		print_r($str);
		echo "</pre>";
	}
	//print formatted array and exit
	function pre($str){
		echo "<pre>";
		print_r($str);
		echo "</pre>";
		exit(0);
	}
}

?>
