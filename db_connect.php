<?php

	$hostName = "realtor.mysql.database.azure.com";
	$dbUser = "hantusa@realtor";
	$dbPass = "Wjdtjrdlek2@";
	$dbName = "canadarealtor";

	//$db = new mysqli($hostName, $dbUser, $dbPass, $dbName);
	$connect= mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
	
	if (!$connect)
	 {
	  echo "Can't connect to MySQL Server." . '  ' .mysqli_connect_error();
	  exit;
	 }
	$connect->query("set session character_set_connection=utf8");
	$connect->query("set session character_set_results=utf8");
	$connect->query("set session character_set_client=utf8");
	//mysqli_query("set session character_set_connection=utf8;");
	//mysqli_query("set session character_set_results=utf8;");
	//mysqli_query("set session character_set_client=utf8;");
	
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>