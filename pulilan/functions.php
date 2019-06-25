<?php 

	function email_send() {
		if(isset($_POST['send'])) {
			include 'PHPMailerAutoload.php';
			$name = $_POST['fullname'];
			$email = $_POST['email'];
			$mailer = new PHPMailer();
			$mailer->IsSMTP();
			$mailer->Host = 'smtp.gmail.com:465'; 
			$mailer->SMTPAuth = TRUE;
			$mailer->Port = 465;
			$mailer->mailer="smtp";
			$mailer->SMTPSecure = 'ssl'; 
			$mailer->IsHTML(true);
			$mailer->SMTPOptions = array('ssl' => array(
									'verify_peer' => false, 
									'verify_peer_name' => false, 
									'allow_self_signed' => true)
									);
			$mailer->Username = 'santoscarlo111@gmail.com';
			$mailer->Password = 'milagrosa08';
			$mailer->From = 'admin@noreply.com'; 
			$mailer->FromName = 'Demonstration';
			$mailer->Body =  'Hello '.$name.' your activation code is '.rand(111111,999999);
			$mailer->Subject = 'Demonstration';
			$mailer->AddAddress($email);
			if(!$mailer->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mailer->ErrorInfo;
			} else {
			echo "Successfully Sent";
			}
		}
	}