<?php
require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.segurosmedicosinternacionales.net"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "mail.segurosmedicosinternacionales.net"; // sets the SMTP server ssl://smtp.gmail.com
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "informacion@segurosmedicosinternacionales.net"; // SMTP account username
  $mail->Password   = "Rewq1234";        // SMTP account password
  
  
  $mail->AddAddress('jon.cas@hotmail.com', 'Jonathan castillo');//DESTINATARIO
  $mail->SetFrom('jacastillob@gmail.com', 'PROBANDO EL SISTEMA');
  
  
  
  
  
  
  
  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('mails/contents.html'));
  $mail->AddAttachment('mails/images/phpmailer.gif');      // attachment
  $mail->AddAttachment('mails/images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>