<?php
//phpinfo();

require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.leonardscarf.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;
//$mail->SMTPDebug = 1 ;
$mail->CharSet = 'UTF-8';                                    // TCP port to connect to

$mail->setFrom('mbg@leonardscarf.com', 'مدیر سایت');
$mail->addAddress('mohsen.bashirzadeh@gmail.com', 'leonard User');     // Add a recipient
//$mail->addAddress('mbg@leonardscarf.com');               // Name is optional
$mail->addReplyTo('mbg@leonardscarf.com', 'Leonard Admin');
$mail->addCC('ki_miad_berim_koja@yahoo.com');
//$mail->addBCC('mbg@leonardscarf.com');

$mail->addAttachment('');         // Add attachments
$mail->addAttachment('', '');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Leonard Scarf';
$mail->Body    = '<html><body style="direction:rtl;">';
$mail->Body   .= '<b><p style="direction:rtl;font-family:tahoma;">با سلام</p><b/><br /><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">با تشکر از ثبت نام شما در سایت لئونارد اسکارف</p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کد فعال سازی شما&nbsp;&nbsp; ';
$mail->Body   .= '<b>';
$mail->Body   .= $rndval;
$mail->Body   .= '</b>';
$mail->Body   .= 'میباشد </p></br>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">لطفا کد را در کادر مربوطه وارد نمایید , تا ثبت نام شما تکمیل شود </p><br><br /><br /><br />';
$mail->Body   .= '<p style="direction:ltr;font-family:tahoma;">با تشکر, مدیر سایت</p></br>';
$mail->Body   .= '</body></html>';

$mail->AltBody = $msg;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}