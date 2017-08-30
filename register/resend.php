<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }else{
      header('Location: ' . $url);
      die();
    }    
}

$email = $_SESSION['email'];
$msg = $_SESSION['msg'];

include('mail/SMTPconfig.php');
include('mail/SMTPClass.php');

if(isset($email))
{
$to = $email;
$from = 'admin@leonardscarf.com;
$subject = Leonard Scarf;
$body = $msg;
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();

     if($SMTPChat)
     {
       redirect('http://www.leonardscarf.com/register/confirm.php');
     }
}



mysqli_close($conn);
?>
