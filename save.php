<?php

include "./db_connect.php";

$phoneno = $_GET['phoneno'];
$pushedno = $_GET['pushedno'];
	
$query = "insert condotext_results(cr_phoneno,cr_condo_no,cr_enable) into values('".$phoneno."','".$pushedno."','Y')" ;

		echo $query;

mysql_query($query);
?>
