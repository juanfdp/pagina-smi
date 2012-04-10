<?php
require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP
$mail->IsHTML(true);
try {
  $mail->Host       = "mail.segurosmedicosinternacionales.net"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "mail.segurosmedicosinternacionales.net"; // sets the SMTP server ssl://smtp.gmail.com
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "informacion@segurosmedicosinternacionales.net"; // SMTP account username
  $mail->Password   = "Rewq1234";        // SMTP account password
  
  
  $mail->AddAddress('jacastillob@gmail.com', 'Jonathan castillo');//DESTINATARIO
  $mail->SetFrom('jon.cas@hotmail.com', 'PROBANDO EL SISTEMA');
  $mail->Subject = 'SOLICITUD DE CONTACTO - CREADA DESDE EL PORTAL';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
 
  $mail->Body = '
  <body style="margin: 10px;">
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
<div align="center"><img src="images/smi.png" style="height: 90px; width: 340px"></div>
<p><br>
  Has recibido una solicitud de contacto, registrada desde el portal web:</p>





<p>&nbsp;</p>
<p><strong>EMPRESA</strong>:</p>
<p><strong>NOMBRE Y APELLIDO:</strong></p>
<p><strong>TÉLEFONO FIJO</strong>:</p>
<p><strong>TÉLEFONO MOVIL</strong>:</p>
<p><strong>MENSAJE (Solicitud):</strong></p>
<p>&nbsp;</p>
<p><br />
</p>
</div>
</body>
  
  
 
  ';  
 // $mail->MsgHTML(file_get_contents('mails/ContentsPhp.php?test="holaa" '));
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