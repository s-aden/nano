<?php

	$reqestType = $_SERVER['REQUEST_METHOD'];

	$path = array_keys($_GET)[0];



	/*echo "elo!!</br>";
	var_dump($path);*/

	require 'Classes/Actions.php';
	require 'Classes/Urls.php';

	if (preg_match('/(.)*(app\/home)/',$path)) {
		echo $home;
		//home($path);
		echo "yeaah!!";
		
	} else {
		echo "naa!! from index.php";
	}


?>
