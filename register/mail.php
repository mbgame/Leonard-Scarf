<?php

function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }else{
      header('Location: ' . $url);
      die();
    }    
}
require 'mail/mailconfig.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$mail->setFrom($_POST['email'], 'کاربر سایت');
$mail->addAddress('mohsen.bashirzadeh@gmail.com', 'Leonard Admin');     // Add a recipient
$mail->addReplyTo($_POST['email'], 'reply');
$mail->isHTML(true);

$mail->Subject = $_POST['name'];
$mail->Body    = '<html><body style="direction:rtl;">';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">';
$mail->Body   .= $_POST['message'];
$mail->Body   .= '</p></br>';
$mail->Body   .= '</body></html>';

$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'پیام ارسال نشد مجدد سعی نمایید';
 //   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
      // redirect('http://www.leonardscarf.com/contactus.php');
    echo 'پیام شما با موفقیت ارسال شد';
}
}
?>