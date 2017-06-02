<?php

include "./db_connect.php";

	
	
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
		
	$phoneno = $_GET['phoneno'];
//$pushedno = $_GET['pushedno'];
//$pushedno =1;
$user_pushed = $_REQUEST['Digits'];
$k_user_pushed = $user_pushed;
switch ($k_user_pushed) {
    case "1":
        echo "일번";
        break;
    case "2":
        echo "이번";
        break;
    case "3":
        echo "3번";
        break;
		
    case "4":
        echo "사번";
        break;
    case "5":
        echo "오번";
        break;
    case "6":
        echo "육번";
        break;
		
    case "7":
        echo "칠번";
        break;
    case "8":
        echo "팔번";
        break;
    case "9":
        echo "9번";
        break;	
		
    case "10":
        echo "10번";
        break;			
    default:
        echo "모두";
}

			
	        //if ( $user_pushed == '1' )
	       // {	
	          	
	        		//echo "<Sms to='16472060140'>Text from 1</Sms>";
	        		echo "<Say voice='woman' language='ko-KR'>".$k_user_pushed."을 선택했습니다,감사합니다</Say>";
				echo "<Say voice='woman' language='ko-KR'>You can cancel later</Say>";
	        		//$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=".$user_pushed;


			        echo "<Sms to='".$phoneno."'>Text from 1</Sms>";
 
	        	
	      //  }



	
$query = "insert into condotext_results(cr_phoneno,cr_condo_no,cr_enable)  values('".$phoneno."','".$user_pushed."','Y')" ;

		//echo $query;

$connect->query($query);

	echo '</Response>';

?>
