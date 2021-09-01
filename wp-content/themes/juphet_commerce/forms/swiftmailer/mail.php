<?php
include_once('swift/Swift.php');
include_once('swift/Swift/Connection/SMTP.php');
include_once('swift/Swift/Connection/NativeMail.php');
include_once('swift/Swift/Plugin/Decorator.php');

class Mail
{
	public static function Send($template, $subject, $templateVars, $to, $toName = null, $from = null, $fromName = null, $cc = null, $bcc = null, $fileAttachment = null)
	{
		
		if (!isset($from)) $from = COMP_EMAIL;
		if (!isset($fromName)) $fromName = COMP_NAME;

		if (!empty($from) && !self::isEmail($from))
		{ 			
			print_r('Error: parameter "from" is corrupted');
 			return false;
		}
		if (!empty($fromName) && !self::isMailName($fromName))
		{	 		
			print_r('Error: parameter "fromName" is corrupted');
	 		return false;
		}
		if (!is_array($to) && !self::isEmail($to))
		{
	 		print_r('Error: parameter "to" is corrupted');
	 		return false;
		}
		
		if (!is_array($templateVars))
		{
	 		print_r('Error: parameter "templateVars" is not an array');
	 		return false;
		}

		// Do not crash for this error, that may be a complicated customer name
		if (is_string($toName))
		{
			if (!empty($toName) && !self::isMailName($toName))
	 			$toName = null;
		}

		if (!self::isTplName($template))
		{
	 		print_r('Error: invalid email template');
	 		return false;
		}

		if (!self::isMailSubject($subject))
		{
	 		print_r('Error: invalid email subject');
	 		return false;
		}

		/* Construct multiple recipients list if needed */
		if (isset($to) && is_array($to))
		{
			$to_list = new Swift_RecipientList();
			foreach ($to as $key => $addr)
			{
				$to_name = null;
				$addr = trim($addr);
				if (!self::isEmail($addr))
				{
					print_r('Error: invalid email address');
					return false;
				}
				if (is_array($toName))
				{
					if ($toName && is_array($toName) && self::isGenericName($toName[$key]))
						$to_name = $toName[$key];
				}
				if ($to_name == null)
					$to_name = $addr;
                /* Encode accentuated chars */
				$to_list->addTo($addr, '=?UTF-8?B?'.base64_encode($to_name).'?=');
			}
			$to_plugin = $to[0];
			$to = $to_list;
		} else {
			/* Simple recipient, one address */
			$to_plugin = $to;
			if ($toName == null)
				$toName = $to;
            /* Encode accentuated chars */
			$to = new Swift_Address($to, '=?UTF-8?B?'.base64_encode($toName).'?=');
		}
		try {
			/* Connect with the appropriate configuration */
			if (MAIL_METHOD == 'SMTP')
			{
				if (SMTP_SERVER == '' || SMTP_PORT == '')
				{
					print_r('Error: invalid SMTP server or SMTP port');
					return false;
				}
				$connection = new Swift_Connection_SMTP(SMTP_SERVER, SMTP_PORT,
								(SMTP_ENCRYPTION == 'ssl') ? Swift_Connection_SMTP::ENC_SSL :
								((SMTP_ENCRYPTION == 'tls') ? Swift_Connection_SMTP::ENC_TLS : Swift_Connection_SMTP::ENC_OFF));
				$connection->setTimeout(20);
				if (!$connection)
					return false;
				if (SMTP_USER != '')
					$connection->setUsername(SMTP_USER);
				if (SMTP_PASSWD != '')
					$connection->setPassword(SMTP_PASSWD);
			}
			else
				$connection = new Swift_Connection_NativeMail();

			if (!$connection)
				return false;
			$swift = new Swift($connection, MAIL_DOMAIN);			

			$templatePath = 'mailtemplates/';
			
			if (!file_exists($templatePath.$template.'.txt') || !file_exists($templatePath.$template.'.html'))
			{
				print_r('Error - The following email template is missing: '.$templatePath.$template.'.txt');
				return false;
			}
			$templateHtml = file_get_contents($templatePath.$template.'.html');
			$templateTxt = strip_tags(html_entity_decode(file_get_contents($templatePath.$template.'.txt'), null, 'utf-8'));

			/* Create mail && attach differents parts */
			$message = new Swift_Message($subject);
			
			$message->headers->setEncoding('Q');	

			if(!empty($cc)){
				if(!is_array($cc)){
					$data_cc = $cc;
					$cc = array();
					$cc[] = $data_cc;
				}
			}
			if(!empty($bcc)){
				if(!is_array($bcc)){
					$data_bcc = $bcc;
					$bcc = array();
					$bcc[] = $data_bcc;
				}
			}		
			
			$templateVars['{shop_name}'] = COMP_NAME;			
			
			$swift->attachPlugin(new Swift_Plugin_Decorator(array($to_plugin => $templateVars)), 'decorator');
			
			if (MAIL_TYPE == 3 || MAIL_TYPE == 2)
				$message->attach(new Swift_Message_Part($templateTxt, 'text/plain', '8bit', 'utf-8'));
			if (MAIL_TYPE == 3 || MAIL_TYPE == 1)
				$message->attach(new Swift_Message_Part($templateHtml, 'text/html', '8bit', 'utf-8'));
			if (!empty($fileAttachment) && is_array($fileAttachment)){
				foreach($fileAttachment as $attach){
					if(isset($attach['content']) && isset($attach['name']) && isset($attach['mime'])){
						$message->attach(new Swift_Message_Attachment($attach['content'], $attach['name'], $attach['mime']));
					}
				}				
			}				
			
			/* Send mail */
			$send = $swift->send($message, $to, new Swift_Address($from, $fromName), $cc, $bcc);
			$swift->disconnect();
			$result = $send;
		}

		catch (Swift_ConnectionException $e)
		{
			$result = $e->getMessage();
		}
		catch (Swift_Message_MimeException $e)
		{
			$result = $e->getMessage();
		}
		
		return $result;
	}

	public static function sendMailTest($smtpChecked, $smtpServer, $content, $subject, $type, $to, $from, $smtpLogin, $smtpPassword, $smtpPort = 25, $smtpEncryption)
	{
		$swift = null;
		$result = false;
		try
		{
			if ($smtpChecked)
			{
				$smtp = new Swift_Connection_SMTP($smtpServer, $smtpPort, ($smtpEncryption == 'off') ?
					Swift_Connection_SMTP::ENC_OFF : (($smtpEncryption == 'tls') ? Swift_Connection_SMTP::ENC_TLS : Swift_Connection_SMTP::ENC_SSL));
				$smtp->setUsername($smtpLogin);
				$smtp->setpassword($smtpPassword);
				$smtp->setTimeout(20);
				$swift = new Swift($smtp, Configuration::get('PS_MAIL_DOMAIN'));
			}
			else
				$swift = new Swift(new Swift_Connection_NativeMail(), Configuration::get('PS_MAIL_DOMAIN'));

			$message = new Swift_Message($subject, $content, $type);

			if ($swift->send($message, $to, $from))
				$result = true;

			$swift->disconnect();
		}
		catch (Swift_ConnectionException $e)
		{
			$result = $e->getMessage();
		}
		catch (Swift_Message_MimeException $e)
		{
			$result = $e->getMessage();
		}

		return $result;
	}
	
	private static function isEmail($email)
	{
		return !empty($email) && preg_match('/^[a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]+[.a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]*@[a-z\p{L}0-9]+[._a-z\p{L}0-9-]*\.[a-z0-9]+$/ui', $email);
	}
	
	private static function isMailName($mailName)
	{
		return preg_match('/^[^<>;=#{}]*$/u', $mailName);
	}
	
	private static function isTplName($tplName)
	{
		return preg_match('/^[a-zA-Z0-9_-]+$/', $tplName);
	}
	
	private static function isMailSubject($mailSubject)
	{
		return preg_match('/^[^<>]*$/u', $mailSubject);
	}
	
	private static function isGenericName($name)
	{
		return empty($name) OR preg_match('/^[^<>;=#{}]*$/u', $name);
	}
}
