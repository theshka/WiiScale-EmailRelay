<?php 

/***********************
  WiiScale - Email Relay
  Use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with FitBit & Apple Health.
  
  http://snosrap.com/wiiscale/
  https://github.com/theshka/WiiScale-EmailRelay
 ***********************/

//Settings
define(FROM_EMAIL, "you@IFTTTEmailChannel.com");

// No need to edit anything below... 
function sendWeight($mass) 
{
	$to = "trigger@recipe.ifttt.com";
	$subject = "#WiiScale";
	$txt = $mass;
	$headers = "From: " . FROM_EMAIL . "\r\n" .
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	mail($to,$subject,$txt,$headers);
}

//Listen for WiiScale call... 
if(isset($_SERVER['CONTENT_TYPE']) == "application/x-www-form-urlencoded")
{
	$mass = round($_POST['mass'], 4);
	sendWeight($mass);
}
else {
    echo 'It works! Congrats. Point your WiiScale URL here!';
}
