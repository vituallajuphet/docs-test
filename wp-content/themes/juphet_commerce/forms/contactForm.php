<?php
@session_start();
require_once 'FormsClass.php';
$input = new FormsClass();

$formname = 'Contact Us Form';
$prompt_message = '<span class="required-info">* Please fill-up the form</span>';
require_once 'config.php';
if ($_POST){
	if( empty($_POST['First_Name']) ||
		empty($_POST['Last_Name']) ||
		empty($_POST['Contact']) ||
		empty($_POST['Email_Address'])
		) {


	$asterisk = '<span style="color:#FF0000; font-weight:bold;">*&nbsp;</span>';
	$prompt_message = '<div id="error-msg"><div class="message"><span>Failed to send email. Please try again.</span><br/><p class="error-close">x</p></div></div>';
	}
	else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address']))))
		{ $prompt_message = '<div id="recaptcha-error"><div class="message"><span>Please enter a valid email address</span><br/><p class="rclose">x</p></div></div>';}
	else{

		$body = '<div class="form_table" style="width:700px; height:auto; font-size:12px; color:#333333; letter-spacing:1px; line-height:20px; margin: 0 auto;">
			<div style="border:8px double #c3c3d0; padding:12px;">
			<div align="center" style="color:#990000; font-style:italic; font-size:20px; font-family:Arial; margin:bottom: 15px;">('.$formname.')</div>

			<table width="90%" cellspacing="2" cellpadding="5" align="center" style="font-family:Verdana; font-size:13px">
				';

			foreach($_POST as $key => $value){
				if($key == 'submit') continue;
				elseif($key == 'g-recaptcha-response') continue;

				if(!empty($value)){
					$key2 = str_replace('_', ' ', $key);
					if($value == ':') {
						$body .= '<tr><td colspan="2" style="background:#F0F0F0; line-height:30px"><b>'.$key2.'</b></td></tr>';
					}else {
						$body .= '<tr><td><b>'.$key2.'</b>:</td> <td>'.htmlspecialchars(trim($value), ENT_QUOTES).'</td></tr>';
					}
				}
			}
			$body .= '
			</table>

			</div>
			</div>';

		require_once 'swiftmailer/mail.php';
		// save data form on database
		include 'savedb.php';


		// save data form on database
		$subject = $formname ;
		$attachments = array();

	 	//name of sender
		$name = $_POST['First_Name'].' '. $_POST['Last_Name'];
		$result = insertDB($name,$subject,$body,$attachments);

		$templateVars = array('{link}' => get_home_url().'/onlineforms/'.$_SESSION['token'], '{company}' => COMP_NAME);

		Mail::Send($template, 'New Message Notification', $templateVars, $to_email, $to_name, $from_email, $from_name, $cc, $bcc);

		if($result){
			$prompt_message = '<div id="success"><div class="message"><span>THANK YOU</span><br/> <span>for sending us a message!</span><br/><span>We will be in touch with you soon.</span><p class="close">x</p></div></div>';
				unset($_POST);
		}else {
			$prompt_message = '<div id="error-msg"><div class="message"><span>Failed to send email. Please try again.</span><br/><p class="error-close">x</p></div></div>';
		}

	}

}
/*************declaration starts here************/

?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $formname; ?></title>
		 <link rel="stylesheet" href="css/intlTelInput.css">
		<link rel="stylesheet" href="boostrap/boostrap.css">
		<link rel="stylesheet" href="style.min.css?ver23asas">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/media.min.css?ver24as">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
<body>
	<div class="clearfix">
		<div class = "wrapper">
			<div id = "contact_us_form_1" class = "template_form">
				<div class = "form_frame_b">
					<div class = "form_content">
						<?php if($testform):?>
							<div class="alert alert-info" role="alert">
								You are in test mode!
							</div>	
						<?php endif;?>

						<form id="submitform" name="contact" method="post" enctype="multipart/form-data" action="">
							<?php echo $prompt_message; ?>
							

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="firstname">First Name</label>
									<input type="text" name="First_Name" class="form-control" id="firstname" placeholder="Enter Firstname">
								</div>
								<div class="form-group col-md-6">
									<label for="Last_Name">Last Name</label>
									<input type="text" name="Last_Name" class="form-control" id="Last_Name" placeholder="Enter Lastname">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="Address"> Address</label>
									<input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="Email_Address">Email Address</label>
									<input type="email" class="form-control" name="Email_Address" id="Email_Address" placeholder="Enter Email address">
								</div>
								<div class="form-group col-md-6">
									<label for="Contact">Contact</label>
									<input type="text" name="Contact" class="form-control" id="Contact" placeholder="Enter Contact Number">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="Additional_Information"> Additional l Information</label>
									<textarea name="Additional_Information" id="Additional_Information" class="form-control" ></textarea>
								</div>
							</div>
							<div class = "form_box5 secode_box">
								<div class = "group">
									<div class="inner_form_box1 recapBtn">
									
										<div>

											<button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script src = "js/plugins.js"></script>

	<script type="text/javascript">
$(document).ready(function() {
	// validate signup form on keyup and submit
	$("#submitform").validate({
		rules: {
			First_Name: "required",
			Last_Name: "required",
			Contact: "required",
			Email_Address: {
				required: true,
				email: true
			},
			secode: "required"
		},
		messages: {
			First_Name: "",
			Last_Name: "",
			Contact: "",
			Email_Address: "",
			secode: ""
		}
	});


	$("#submitform").submit(function(){
		if($(this).valid()){
			$('.load_holder').css('display','block');
			self.parent.$('html, body').animate(
				{ scrollTop: self.parent.$('#myframe').offset().top },
				500
			);
		}
	});

	$( "input" ).keypress(function( event ) {
		if(grecaptcha.getResponse() == "") {
			var $recaptcha = document.querySelector('#g-recaptcha-response');
			$recaptcha.setAttribute("required", "required");
			$('.g-recaptcha').addClass('errors').attr('id','recaptcha');
		  }
	});
	

       let xhostss = $("a[title^='Hosted on free web hosting 000webhost.com']");
       xhostss.closest("div").remove()


});

</script>
</body>
</html>
