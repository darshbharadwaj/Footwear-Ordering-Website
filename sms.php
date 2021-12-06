<?php
	// Account details
	$apiKey = urlencode('aeQiAJgzTi8-zzsiRVs3lWN0xVY4Wlkqokz0Gyu1Yx');
	
    // Message details
    $ran = rand(1111,9999);
	$numbers = array(917021152874);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($ran .'is your One Time Password(OTP)');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>