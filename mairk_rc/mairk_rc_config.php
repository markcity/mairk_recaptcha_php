<?php
$defaultActionValue=$actionValue="subscribe_newsletter";

$targetForm='#newsletterForm';

// If you  don't have a secret key and public key, please get one from
// https://www.google.com/recaptcha/admin/create

define("RECAPTCHA_V3_SECRET_KEY", '==ENTER SECRET KEY HERE==');
$publicCaptchaKey='==ENTER PUBLIC KEY HERE==';


if ($publicCaptchaKey=='==ENTER PUBLIC KEY HERE==' || RECAPTCHA_V3_SECRET_KEY == '==ENTER SECRET KEY HERE=='){
	
	?>
	<pre>
	 Welcome to mairk_rc recpatcha wrapper for php
	 
	 CRITICAL: MISSING KEYS
	 
	 If you  don't have a secret key and public key, please get one from
	 https://www.google.com/recaptcha/admin/create
	 
	 Then please enter your keys into the mairk_rc/mairk_rc_config.php file and refresh this page.
	 
	</pre>
	<?php
	die();
}