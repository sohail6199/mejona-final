<?php require_once "controllerUserData.php"; ?>;
<?php	

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
	function sendOTP($email,$code) {
	
	
		$message_body = "One Time Password for verification is:<br/><br/>" . $code;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "sohailansari78603@gmail.com";
		$mail->Password = "cxnoydnbqugwtdwj";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("sohailansari78603@gmail.com", "Sohail");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return true;
	}
?>