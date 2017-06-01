<?php

include "./db_connect.php";

$phoneno = $_GET['phoneno'];
$pushedno = $_GET['pushedno'];
$pushedno =1;
$user_pushed = $_REQUEST['Digits'];
			
	        //if ( $user_pushed == '1' )
	       // {	
	          	
	        		//echo "<Sms to='16472060140'>Text from 1</Sms>";
	        		echo "<Say voice='woman' language='ko-KR'>일번을 선택했습니다.</Say>";
	        		//$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=".$user_pushed;
			        echo "<Sms to=".$phoneno.">Text from 1</Sms>";
 
	        	
	      //  }



	
$query = "insert into condotext_results(cr_phoneno,cr_condo_no,cr_enable)  values('".$phoneno."','".$pushedno."','Y')" ;

		//echo $query;

$connect->query($query);
?>
