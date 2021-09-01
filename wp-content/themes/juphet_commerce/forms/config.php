<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL);
define('COMP_EMAIL', 'web2.juphetvitualla@gmail.com'); // clients email

define('MAIL_METHOD', 'SMTP'); // SMTP or PHPMAIL (PHP Mail Function)
define('SMTP_SERVER', 'secure.emailsrvr.com'); // SMTP server
define('SMTP_USER', 'onlineform11@proweaver.net'); // SMTP username
define('SMTP_PASSWD', '0uN7in3F0rWm#'); // SMTP password

define('SMTP_ENCRYPTION', 'off'); // TLS, SSL or off
define('SMTP_PORT', 587); // SMPT port number 587 or default
define('COMP_NAME', 'Juphet Ecommerce'); // company name
define('MAIL_TYPE', 2); // 1 - html, 2 - txt
define('MAIL_DOMAIN', 'petwebme.com'); // company domain

// recaptcha sitekey
 $recaptcha_sitekey = '6Leoqa0UAAAAAMBSHFoacKQHEyHbj7QtAhKxQzZy';

//for from email
if(!empty($_POST['Email'])){
	$from = $_POST['Email'];
}else if(!empty($_POST['Email_Address'])){
	$from = $_POST['Email_Address'];
}else{
	$from = NULL;
}

// do not edit
$subject = COMP_NAME . " [" . $formname . "]";
$template = 'template';
$to_name = NULL;
$from_email = NULL;
$from_name = 'Message From Your Site';
$attachments = array();

// testing here
$testform = true;
if($testform){
	// when using cc and/or bcc use string type to_email
	// cc and/or bcc can contain string or array type data
	$to_email 	= 'web2.juphetvitualla@gmail.com';
	// $to_email 	= 'qatest@proweaver.net';
	$cc = '';
	$bcc = '';

	// when using multiple to_email use array type
	// cc and/or bcc will not be worked
	//$to_email 	= array('qa@proweaver.net', 'info@proweaver.com');
}else{
	$to_email 	= array('vituallajuphet1114@gmail.com');
	$cc = '';
	$bcc = '';
}
