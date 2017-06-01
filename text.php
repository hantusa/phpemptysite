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
		
		
		$user_pushed = $_REQUEST['Digits'];
	       	echo "<Say voice='woman' language='ko-KR'>".$ct_comment_01.".</Say>";
        
	        if ( $user_pushed == '1' )
	        {	
	          	
	        		//echo "<Sms to='16472060140'>Text from 1</Sms>";
	        		echo "<Say voice='woman' language='ko-KR'>일번을 선택했습니다.</Say>";
	        		$url = "save.php?phoneno=".$_REQUEST['From']."&pushedno=".$user_pushed;
	        		echo "<Sms to=".$_REQUEST['From']." action='$url' method='GET'>".$user_pushed."을 선택했습니다.</Sms>";

	        	
	        }
	        else if ( $user_pushed == '2' )
	        {       
	        	if (empty($intPhoneNo2)||is_null($intPhoneNo2)){
	        		echo "<Say voice='woman'>There is no any phone number to connect.</Say>";
	        		echo "<Say voice='woman'>Good bye!</Say>";
					echo "<Hangup/>";
	        	} else
	        	{
		            $url = "RephandleDialCall.php?MemEmail=$MemEmail".htmlspecialchars("&tollfree=$tollfree&htime=$htime");
	        		echo "<Dial callerId='$MemRepPhoneNo' timeLimit ='$htime'  action='$url' method='GET'>".$intPhoneNo2."</Dial>";
	        	}
	        }
	        else if ( $user_pushed == '3' )
	        {   
	        	if (empty($intPhoneNo3)||is_null($intPhoneNo3)){
	        		echo "<Say voice='woman'>There is no any phone number to connect.</Say>";
	        		echo "<Say voice='woman'>Good bye!</Say>";
					echo "<Hangup/>";
	        	} else
	        	{
	        		$url = "RephandleDialCall.php?MemEmail=$MemEmail".htmlspecialchars("&tollfree=$tollfree&htime=$htime");
	        		echo "<Dial callerId='$MemRepPhoneNo' timeLimit ='$htime'  action='$url' method='GET'>".$intPhoneNo3."</Dial>";
	        	}    
    
	        }
	        else if ( $user_pushed == '4' )
	        {
	        	if (empty($intPhoneNo4)||is_null($intPhoneNo4)){
	        		echo "<Say voice='woman'>There is no any phone number to connect.</Say>";
	        		echo "<Say voice='woman'>Good bye!</Say>";
					echo "<Hangup/>";
	        	} else
	        	{
	        		$url = "RephandleDialCall.php?MemEmail=$MemEmail".htmlspecialchars("&tollfree=$tollfree&htime=$htime");
	        		echo "<Dial callerId='$MemRepPhoneNo' timeLimit ='$htime'  action='$url' method='GET'>".$intPhoneNo4."</Dial>";

	        	}
	        }
	        else if ( $user_pushed == '5' )
	        {
			    if ($intAddressYN == 'N'){
					echo "<Say voice='woman'>There is no any open hours and location information.</Say>";
					echo "<Say voice='woman'>Good bye!</Say>";
					echo "<Hangup/>";
				} else 
				{
					echo "<Play>address.mp3</Play>";
					echo "<Play>address.mp3</Play>";
				}
	        	
	        }
	        else if ( $user_pushed == '6' )
	        {
	        	if ($intForwardYN == 'N'){
	        		echo "<Say voice='woman'>There is no any message.</Say>";
	        		echo "<Say voice='woman'>Good bye!</Say>";
	        		echo "<Hangup/>";
	        	} else
	        	{

	        		echo " <Say voice='woman'>Please leave a message at the beep. Press the star key when finished.  </Say> ";
    				echo " <Record method='GET' maxLength='120' finishOnKey='*' action='handle-recording.php?intForward=$intForward'/>";
    				echo " <Say>I did not receive a recording</Say>";

	        	} 
	        
	        
	        }
            
	
   echo "</Response>";

		
?>
