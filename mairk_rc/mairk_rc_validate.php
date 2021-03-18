<?php

include('mairk_rc/mairk_rc_config.php');
function getValidAction(){
### google recaptcha 
 $validCaptcha=false;
 if(isset($_POST['token']) and isset($_POST['action'])){
	//include('/var/www/sandbox/cap/config.php');
	  
	$token = $_POST['token'];
	$action = $_POST['action'];
	  
	// call curl to POST request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	$arrResponse = json_decode($response, true);
	  
	// verify the response
	if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
		// valid submission
		// go ahead and do necessary stuff
		//echo "<h1>You are most likely a human</h1>";
		#print_r($_POST);
	    $validCaptcha=$arrResponse["action"];
		
		
	} else {
		// spam submission
		// show error message
		//echo " a problem occured ";
		//die();
	}

	//print_r($arrResponse);

	  }
### end recaptcha
return $validCaptcha;
}