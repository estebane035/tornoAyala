<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$htmlBody = 'HOLA';

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "smtp-mail.outlook.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "toti_irre@hotmail.com";
$mail->Password = "bocardo030397";
$mail->setFrom('toti_irre@hotmail.com', 'Your Name');
$mail->addAddress('estebane03597@gmail.com', 'To');

$mail->Subject = "Subject";
$mail->Body    = "Message";

if (!$mail->send()) {
echo "Error sending message";
} else {
echo "Message sent!";
}
?>