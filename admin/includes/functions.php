<?php 



function classAutoLoader($class){
	$class = strtolower($class);
	$the_path = "includes/{$class}.php";

	if(is_file($the_path) && !class_exists($class)){
		include $the_path;
	}else {
			die("This file name {$class}.php was not found man...");
	}
	// if(file_exists($the_path)){
	// 	require_once($the_path);
	// }else{
	// 	die("This file name {$class}.php was not found man...");
	// }
}

spl_autoload_register('classAutoLoader');
// function __autoload($class){
// 	$class = strtolower($class);
// 	$the_path = "includes/{$class}.php";

// 	if(file_exists($the_path)){
// 		require_once($the_path);
// 	}else{
// 		die("This file name {$class}.php was not found man...");
// 	}
// }

?>