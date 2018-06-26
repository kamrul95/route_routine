
<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
session_start();
$mail = new PHPMailer;
$toMail = $_SESSION['email'];
$confirm_code = $_SESSION['cid'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output. 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'auibdebug@gmail.com';                 // SMTP username
$mail->Password = 'debug1234';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('auibdebug@gmail.com', 'Mailer');
$mail->addAddress($toMail, 'User');     // Add a recip<meta http-equiv="refresh" content="30"/>ient
$mail->addAddress($toMail);               // Name is optional
$mail->addReplyTo('auibdebug@gmail.com', 'Information');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$link = "Your Confirmation Link :<br> Click Here to Continue <br> http://localhost/html_struc_k/View/insertstudentinfo.php?passkey=".$confirm_code;
$mail->Subject = 'Your Confirmation Link Here';
$mail->Body    = $link;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

require_once('dbconfig.php');

if(!$mail->send()) {
    echo '<h1 style="text-align:center;background-color:darkgrey;color:firebrick; padding:50px; margin:10%">Message could not be sent.<br><a href="signup.php" style="text-align:center;text-decoration:none">Click Here to Try Again</a></h1>';
} else {
    $_SESSION['con'] = 1;
    header('Location:confMessage.php');
}

?>