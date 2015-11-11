<?php

/**
 * WiiScale - Email Relay
 *
 * Use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with FitBit & Apple Health.
 *
 * @author Tyler Heshka
 * @link https://keybase.io/theshka
 * @example https://github.com/theshka/WiiScale-EmailRelay
 * @license http://opensource.org/licenses/MIT
 * @version 0.1.0
 */

// Set your timemzone: http://php.net/manual/en/timezones.php
date_default_timezone_set('Canada/Eastern');

// The email address you actived on IFTTT email channel.
define("FROM_EMAIL", "you@IFTTTEmailChannel.com");

/**
 * /No need to edit anything below...
 */

//Mailer function.
function sendWeight($mass)
{
	$to = "trigger@recipe.ifttt.com";
	$subject = "New weight data available! #WiiScale";
	$headers = "From: " . FROM_EMAIL . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Use sendmail mail transport protocol.
	if (mail($to,$subject,$mass,$headers)) {
		return true;
	}
}

//Listen for WiiScale call...
if(isset($_SERVER['CONTENT_TYPE']) == "application/x-www-form-urlencoded")
{
	// Test for valid weight
	if (is_numeric($_POST['mass'])) {
		// Send weight (in kg) to IFTTT, rounded to the nearest 1/10000th
		sendWeight(round($_POST['mass'], 4));
	}
}
else
{
	//if viewing directly, show a friendly message.
	echo 'It works! Congrats. Point your WiiScale URL here: <br>';
	echo '<pre>' . 'http://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] . '</pre>';
}
