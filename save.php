<?php

include "./db_connect.php";

$phoneno = $_GET['phoneno'];
$pushedno = $_GET['pushedno'];
	
$query = "insert into condotext_results(cr_phoneno,cr_condo_no,cr_enable)  values('".$phoneno."','".$pushedno."','Y')" ;

		echo $query;

$connect->query($query);
?>
