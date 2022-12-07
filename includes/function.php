<?php
//session_start();
//ini_set('display_errors',0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require_once '../includes/baza.php';


function prazna_polja(array $form_inputs) {

	$response = array();

	$status = 1;
	$message = '';

	foreach ($form_inputs as $key => $value) {

		if ($key == 'submit') continue;

		if ($value == '') {

			

			$message .= 'You did not entered ' .$key. "<br>";
		}
	}

	if ($message != '') {

		$status = 0;
		$response['message'] = $message;
	}

	$response['status'] = $status;

	return $response;
}



function posalji_mail(string $naslov, string $email, string $poruka) {

	require_once "../vendor/autoload.php";

	$status = 1;

	$message = '';

	$mail = new PHPMailer();
		
	//Set PHPMailer to use SMTP.
	
	//$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = 'smtp.elasticemail.com';
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = 'dekidjurdjev@gmail.com';                 
	$mail->Password = '0DDEB660BB57C24E46EE82321E797F055979';                           
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to
	$mail->Port = 2525;                                   

	$mail->From = "dekidjurdjev@gmail.com";
	$mail->FromName = "Portfolio";

	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = $naslov;
	$mail->Body = $poruka;
	$mail->AltBody = "This is the plain text version of the email content";

	if ($mail->send()) {
		$message .= 'Message has been sent successfully';
	} else  {
		$message .= 'Mailer Error: ' . $mail->ErrorInfo;
		$message .= 'Error while sending email.';
		$status = 0;
	}

	$response['message'] = $message;
	$response['status'] = $status;

	return $response;
}

function provera_formata_mejla($email) {
   
	$status = 1;
	$message ='';

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$status = 1;
		$response['status'] = $status;

	}
	else {

        $status = 0;
		$message .='Mail format is not correct.';
	}

	$response['message'] = $message;
	$response['status'] = $status;

	return $response;

}



?>