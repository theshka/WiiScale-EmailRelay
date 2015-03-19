<?php 

/**
 * WiiScale - Email Relay
 * Use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with FitBit & Apple Health.
 *
 * Instructions: https://github.com/theshka/WiiScale-EmailRelay
 */

/**
 * Settings
 */
 define(FROM_EMAIL, "you@IFTTTEmailChannel.com");
 //No need to edit anything below...

//Mailer function.
function sendWeight($mass) 
{
	$to = "trigger@recipe.ifttt.com";
	$subject = "New weight data available! #WiiScale";
	$headers = "From: " . FROM_EMAIL . "\r\n" .
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	//use sendmail transport protocol. 
	mail($to,$subject,$mass,$headers);
}

//Listen for WiiScale call... 
if(isset($_SERVER['CONTENT_TYPE']) == "application/x-www-form-urlencoded")
{
	//send weight (in kg) to IFTTT, rounded to the nearest 1/10000th
	sendWeight(round($_POST['mass'], 4));
}
else 
{
	//if viewing directly, show a friendly message. 
	echo 'It works! Congrats. Point your WiiScale URL here!';
}
