<?php
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
require 'processLogin.php';

function cleanString($string) {
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

function validateFields($name, $tel, $email, $subject, $text) {
	return (strlen($name) > 0 && strlen($tel) > 0 && strlen($email) > 0 && strlen($subject) > 0 && strlen($text) > 0) ? true : false;
}

$error = '';

if (isset($_GET['name']) && isset($_GET['tel']) && isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['text'])) {
	$name = $_GET['name'];
	$tel = $_GET['tel'];
	$email = cleanString($_GET['email']);
	$subject = cleanString($_GET['subject']);
	$text = cleanString($_GET['text']);
	$toSend = "С благодарностью за отправленное сообщение и скором ответе";

	if (validateFields($name, $tel, $email, $subject, $text)) {
		if (isValidEmail($email)) {
			$mail = new PHPMailer();
			// mailer.p@yandex.by
			// asd123456789
			$mail->CharSet = 'UTF-8';
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.yandex.ru';
			$mail->Username = 'mailer.p@yandex.by';
			$mail->Password = 'asd123456789';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			$mail->Subject = $subject;
			$mail->Body = $toSend;
			$mail->isHTML(true);
			$mail->setFrom('mailer.p@yandex.ru', 'Watch Films');
			$mail->addAddress($email, $name);
			if ($mail->send()) {
				$error = 'Was sent successfully to ' . $name;
			} else {
				$error = 'Error: ' . $mail->ErrorInfo;
			}
		} else {
			$error = "Invalid email address.";
		}
	} else {
		$error = 'All field lengths must be greater than 0.';
	}
}