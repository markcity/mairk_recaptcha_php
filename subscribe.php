<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "hello<br>";

//validate captcha
include('mairk_rc/mairk_rc_validate.php');
$confirmedAction = getValidAction();

if ($confirmedAction==$actionValue){
  
	if (isset($_POST['email']) && $_POST['email']) {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	} else {
		// set error message and redirect back to form...
		header('location: mairk_rc_form.php');
		exit;
	}
	  
	} else { 
		echo "failed captcha - please contact sales@fbi.gov";
		
		die();
}
echo "<h1>Welcome</h1>";