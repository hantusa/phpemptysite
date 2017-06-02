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
	$query = "select ct_comment_01 from condotext where ct_enable = 'Y' and ct_comment_01_no = 1 " ;
        break;
    case "2":
        echo "이번";
	$query = "select ct_comment_02 from condotext where ct_enable = 'Y' and ct_comment_02_no = 2 " ;
        break;
    case "3":
        echo "3번";
	$query = "select ct_comment_03 from condotext where ct_enable = 'Y' and ct_comment_03_no = 3 " ;
        break;
		
    case "4":
        echo "사번";
	$query = "select ct_comment_04 from condotext where ct_enable = 'Y' and ct_comment_04_no = 4 " ;
        break;
    case "5":
        echo "오번";
	$query = "select ct_comment_05 from condotext where ct_enable = 'Y' and ct_comment_05_no = 5 " ;
        break;
    case "6":
        echo "육번";
	$query = "select ct_comment_06 from condotext where ct_enable = 'Y' and ct_comment_06_no = 6 " ;
        break;
		
    case "7":
        echo "칠번";
	$query = "select ct_comment_07 from condotext where ct_enable = 'Y' and ct_comment_07_no = 7 " ;
        break;
    case "8":
        echo "팔번";
	$query = "select ct_comment_08 from condotext where ct_enable = 'Y' and ct_comment_08_no = 8 " ;
        break;
    case "9":
        echo "구번";
	$query = "select ct_comment_09 from condotext where ct_enable = 'Y' and ct_comment_09_no = 9 " ;
        break;	
		
    case "10":
        echo "십번";
	$query = "select ct_comment_10 from condotext where ct_enable = 'Y' and ct_comment_10_no = 10 " ;
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

$result = $connect->query($query);

    
while($row = $result->fetch_array())
{
	$ct_comment= $row[0];
			
}

			        echo "<Sms to='".$phoneno."'>".$ct_comment."</Sms>";
 
	        	
	      //  }



	
$query = "insert into condotext_results(cr_phoneno,cr_condo_no,cr_enable)  values('".$phoneno."','".$user_pushed."','Y')" ;

		//echo $query;

$connect->query($query);

	echo '</Response>';

?>
