<?php
session_start();
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
	<title>شال و روسری</title>

	<link rel='icon' 
	type='image/x-icon'
	href='http://www.leonardscarf.com/favicon.ico'>

        <link rel='alternate' href='http://www.leonardscarf.com' hreflang='fa' />
        <meta name='description' content='لئونارد برترین برند انواع شال و روسری با ارائه بهترین کیفیت و طراحی و رنگ بندی فوق العاده همتراز با برندهای بزرگ جهان دارای نمایندگی رسمی در سراسر کشور می باشد'>
	<meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <meta name='keywords' content='shawl,scarf,leonard,شال,روسری,لئونارد'>
        <meta name='author' content='mohsen bashirzadeh'>
	<meta charset='utf-8'>

	<link href="css/main.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/register.css" rel="stylesheet">

	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/main.js" charset="utf-8"></script>
	<script src="js/globals.js" charset="utf-8"></script>
	<script src="js/reg.js" charset="utf-8"></script>

<script>
function validateForm2()

{

//for remove space from string
if (!String.prototype.trim) {
    String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
}

    //var eractivationcode = document.getElementById('activationcodeInfo').innerHTML.trim();
    var activationcode = document.forms["activation"]["activationcode"].value;
    if (activationcode == null || activationcode == "" || activationcode.length < 4 ) {
   // document.getElementById('activationcodeInfo').innerHTM="plz put 4 digit";
    document.getElementById("activationcode").focus();
         return false;
     }
}

</script>
</head>
<body>
<?php

require_once("db_con.php");
require 'mail/mailconfig.php';

require_once("Kavenegar/TestKavenegarApi.php");
$sms = new TestKavenegarApi(); 
$your_email ='mohsen.bashirzadeh@gmail.com';// <<=== update to your email address
$rndval = rand(1000, 9999);
$hashrnd =md5( $rndval);
$msg = "با تشکر از شما جهت ثبت نام در سایت لئونارداسکارف, کد   ";
$msg .= $rndval;
$msg .= "  را در کادر مربوطه وارد نمایید";

if (isset($_POST['submit'])) {

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email_address'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$birthday = $_POST['date_of_birth-year'] . '/' . $_POST['date_of_birth-month'] . '/' . $_POST['date_of_birth-day'] ;
$gender = $_POST['gender'];
$buytype = $_POST['buytype'];
$accountnumber = $_POST['account_number'];
$kasabe = $_POST['kasabe'];
$postalcode = $_POST['postalcode'];
$active = 0;



////session
$_SESSION['buytype'] = $buytype;
$_SESSION['mobile'] = $mobile;
$_SESSION['email'] = $email;
$_SESSION['hash'] = $hashrnd;
$_SESSION['msg'] = $msg;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

if($buytype=="omdebuy")
{
$sql = "INSERT INTO omde (firstname,lastname,username,email,password,mobile,telephone,address,birthday,gender,buytype,accountnumber,kasabe,hash,active,login )
 VALUES (N'$firstname',N'$lastname', N'$username', N'$email' ,N'$password',N'$mobile',N'$telephone',N'$address',N'$birthday',N'$gender',N'$buytype',N'$accountnumber',N'$kasabe','$hashrnd','$active','0' );";


if (mysqli_multi_query($mysqli, $sql)) {


///send sms to user
$sms->send($mobile,$msg);

if(isset($email))
{
$mail->setFrom('admin@leonardscarf.com', 'مدیر سایت');
$mail->addAddress($email, 'leonard User');     // Add a recipient
//$mail->addAddress('admin@leonardscarf.com');               // Name is optional
$mail->addReplyTo('admin@leonardscarf.com', 'Leonard Admin');
$mail->addCC('');
$mail->addBCC('admin@leonardscarf.com');

$mail->addAttachment('');         // Add attachments
$mail->addAttachment('', '');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Leonard Scarf';
$mail->Body    = '<html><body style="direction:rtl;">';
$mail->Body   .= '<b><p style="direction:rtl;font-family:tahoma;">با سلام</p></b><br /><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">با تشکر از ثبت نام شما در سایت لئونارد اسکارف</p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کد فعال سازی شما&nbsp; :&nbsp;&nbsp; ';
$mail->Body   .= '<b>';
$mail->Body   .= $rndval;
$mail->Body   .= '</b>';
$mail->Body   .= '&nbsp;میباشد </p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">لطفا کد را در کادر مربوطه وارد نمایید , تا ثبت نام شما تکمیل شود </p><br /><br /><br />';
$mail->Body   .= '<p style="direction:ltr;font-family:tahoma;">با تشکر, مدیر سایت</p>';
$mail->Body   .= '</body></html>';

$mail->AltBody = $msg;

if(!$mail->send()) {
        redirect('http://www.leonardscarf.com/register/register.php');} 
        else {redirect('http://www.leonardscarf.com/register/confirm.php');}
     }
} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);

    echo '<span><h2> اطلاعات را اشتباه وارد کردید مجدد سعی نمایید </h2></span>';   
     echo '</br>';  
     echo '<span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت نام دوباره</a><span>';

    echo '</br>';  
    echo '</br>'; 
}

}
////////////////

if($buytype=="khordebuy")
{
$sql = "INSERT INTO khorde (firstname,lastname,username,email,password,mobile,telephone,address,birthday,gender,buytype,postalcode,hash,active,login )
 VALUES (N'$firstname',N'$lastname', N'$username', N'$email' ,N'$password',N'$mobile',N'$telephone',N'$address',N'$birthday',N'$gender',N'$buytype',N'$postalcode','$hashrnd','$active','0' );";


if (mysqli_multi_query($mysqli, $sql)) {


///send sms to user
$sms->send($mobile,$msg);


if(isset($email))
{
$mail->setFrom('admin@leonardscarf.com', 'مدیر سایت');
$mail->addAddress($email, 'leonard User');     // Add a recipient
//$mail->addAddress('admin@leonardscarf.com');               // Name is optional
$mail->addReplyTo('admin@leonardscarf.com', 'Leonard Admin');
$mail->addCC('');
$mail->addBCC('admin@leonardscarf.com');

$mail->addAttachment('');         // Add attachments
$mail->addAttachment('', '');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Leonard Scarf';
$mail->Body    = '<html><body style="direction:rtl;">';
$mail->Body   .= '<b><p style="direction:rtl;font-family:tahoma;">با سلام</p></b><br /><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">با تشکر از ثبت نام شما در سایت لئونارد اسکارف</p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کد فعال سازی شما&nbsp; :&nbsp;&nbsp; ';
$mail->Body   .= '<b>';
$mail->Body   .= $rndval;
$mail->Body   .= '</b>';
$mail->Body   .= '&nbsp;میباشد </p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">لطفا کد را در کادر مربوطه وارد نمایید , تا ثبت نام شما تکمیل شود </p><br /><br /><br />';
$mail->Body   .= '<p style="direction:ltr;font-family:tahoma;">با تشکر, مدیر سایت</p>';
$mail->Body   .= '</body></html>';
$mail->AltBody = $msg;

if(!$mail->send()) {
        redirect('http://www.leonardscarf.com/register/register.php');} 
        else {redirect('http://www.leonardscarf.com/register/confirm.php');}
     }
     
} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);

    echo '<span><h2> اطلاعات را اشتباه وارد کردید مجدد سعی نمایید </h2></span>';   
     echo '</br>';  
     echo '<span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت نام دوباره</a><span>';

    echo '</br>';  
    echo '</br>'; 
}

}



}
else
 {
    // If a "remote" address is set, we know that this is not a CLI call
    header('HTTP/1.1 403 Forbidden');
    die('Access denied. Go away, shoo!');
}
mysqli_close($mysqli);


?> 
</body>
</html>
