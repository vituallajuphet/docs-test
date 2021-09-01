<?php


	require '../../../../wp-config.php';
	include_once '../../../../onlineforms/detect/user_agents.php';


	function insertDB($name,$subject,$body,$attachments){
		global $wpdb;
		if(!empty($attachments)){
			$attachments = implode('***', $attachments);
		}else{
			$attachments = '';
		}

		$result = $wpdb->insert(
				'formdatabase_emails',
				array(
					'form_from' => $name,
					'form_subject' => $subject,
					'date_sent' =>  date("Y-m-d h:i:s"),
					'form_content' => $body,
					'attachments' => $attachments
					)
			);



		if($result){
			$saved = true;
			$_SESSION['token']= viewForm($wpdb->insert_id);

		}else {
			$saved = false;
		}
		return $saved;
	}

	function viewForm($id){

		//create an instance of UserAgent class
		$detect = new UserAgent();
		$encrypt_id = md5($id);
		$gen_str=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);

		//if site is accessed from mobile, then redirect to the mobile site.
		if($detect->is_mobile()){
			return 'view-form-mobile.php?token='.$encrypt_id.'@'.$id.'&'.$gen_str;
		}else{
			return 'view-form.php?token='.$encrypt_id.'@'.$id.'&'.$gen_str;
		}

	}

?>
