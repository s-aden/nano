<?php
	/**
	* 
	*/

	include 'Classes/Urls.php';

	function home()
	{
		/*http_redirect($home, array("name" => "value"), false, HTTP_REDIRECT_PERM);*/
		//echo "H: ".$home."</br>";
		//var_dump($home);
		header("Location: ".baseUrl($target));
		//echo baseUrl();
		exit();
		/*echo "</br>";
		echo $_SERVER['HTTP_HOST'];
		echo "</br>";*/
		//echo $home;
	}

	function baseUrl($path)
	{
		$protocal = $_SERVER['HTTPS'] ? "https://" : "http://";
		$host  = $_SERVER['HTTP_HOST']."/";

		return $protocal.$host.$path.".php";
	}

?>