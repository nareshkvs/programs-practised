<?php
require("class.phpmailer.php");
$mail = new PHPMailer();$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp1.example.com;smtp2.example.com";
$mail->SMTPAuth = true;
$mail->Username = 'smtpusername';
$mail->Password = 'smtppassword';
 
$mail->From="mailer@example.com";
$mail->FromName="sender name";
$mail->Sender="mailer@example.com";
$mail->AddReplyTo("replies@example.com", "Replies for my site");
 
$mail->AddAddress("email@example.com");
$mail->Subject = "Test 1";
 
$mail->IsHTML(true);
$mail->AddEmbeddedImage('logo.jpg', 'logoimg', 'logo.jpg'); // attach file logo.jpg, and later link to it using identfier logoimg
$mail->Body = "<h1>Test 1 of PHPMailer html</h1>
    <p>This is a test picture: <img src=\"cid:logoimg\" /></p>";
$mail->AltBody="This is text only alternative body.";
$mail->AddAttachment('something.zip'); // this is a regular attachment
 
if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;;
}
else
{
   echo "Letter is sent";
}
?>