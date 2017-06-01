<?php
include "./db_connect.php";
	
$query = "select * from condotext where ct_enable = 'Y' " ;

		//echo $query;

$result = $connect->query($query);
$ct_comment_01 ="";
    
while($row = $result->fetch_array())
{
	$ct_comment_01= $row['ct_comment_01'];
			
}
$connect->close();

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo "<Response>";

if (empty($ct_comment_01)||is_null($ct_comment_01)){
	echo "<Say voice='woman'>There is no any message.</Say>";
	echo "<Say voice='woman'>Good bye!</Say>";
	echo "<hangup/>";
} 
		//from intro.xml
		# @start snippet
		//$user_pushed = $_REQUEST['Digits'];
		//$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=".$user_pushed;
		$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=1";
	        echo "<Gather action='$url' numDigits='4' finishOnKey='*'>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
		echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
				echo "<Pause length='2'/>";
		echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
		echo "<Pause length='2'/>";

		echo "</Gather>";
        	
            
	
   echo "</Response>";

		
?>
