<?php

include "./db_connect.php";

	
	
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
		
	$phoneno = $_GET['phoneno'];
//$pushedno = $_GET['pushedno'];
//$pushedno =1;
//$user_pushed = $_REQUEST['Digits'];
$user_pushed = 1;

			
	        //if ( $user_pushed == '1' )
	       // {	
	          	
	        		//echo "<Sms to='16472060140'>Text from 1</Sms>";
	        		echo "<Say voice='woman' language='ko-KR'>일번을 선택했습니다,감사합니다</Say>";
	        		//$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=".$user_pushed;
			        echo "<Sms to='".$phoneno."'>Text from 1</Sms>";
 
	        	
	      //  }



	
$query = "insert into condotext_results(cr_phoneno,cr_condo_no,cr_enable)  values('".$phoneno."','".$user_pushed."','Y')" ;

		//echo $query;

$connect->query($query);

	echo '</Response>';

?>
