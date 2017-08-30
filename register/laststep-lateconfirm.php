<?php
session_start();
?>
<!doctype html>
<html dir="rtl">
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

	<link href="css/main.css?h=8x8_sx" rel="stylesheet">
	<link href="css/style.css?h=8Lasr8" rel="stylesheet">
	<link href="css/register.css?h=x05c_V" rel="stylesheet">

	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/main.js?h=xNmUgm" charset="utf-8"></script>
	<script src="js/globals.js" charset="utf-8"></script>
	<script src="js/reg.js?h=FmN9Rk" charset="utf-8"></script>




</head>
<body>
<?php

if (empty($_REQUEST['activationcode'])) {
    // If a "remote" address is set, we know that this is not a CLI call
    header('HTTP/1.1 403 Forbidden');
    die('Access denied. Go away, shoo!');
}

require_once 'db_con.php';
require 'mail/mailconfig.php';


if (isset($_POST['submitt'])) 
{

$buytype = $_POST['buytype'];
$activecode=md5($_REQUEST['activationcode']);



/*
    echo $activecode;
     echo "</br>";
      echo "</br>";
     echo $buytype;
      echo "</br>";
*/

   if($buytype=="omde")
    {
     $search = "SELECT email, hash, active, username ,password FROM omde WHERE  hash='".$activecode."' AND active='0'"; 
    }
    if($buytype=="khorde")
    {
     $search = "SELECT email, hash, active, username ,password FROM khorde WHERE  hash='".$activecode."' AND active='0'"; 
    }


$result = mysqli_query($mysqli,$search);

   if (!$result) 
   {
echo '     <div class="-bayan-wrp">
<div class="-bayan-head-border"></div>
<div class="-bayan-head">
		
	<ul class="-bayan-menu">
	
	<li>
		<a href="http://www.leonardscarf.com/contactus.php">تماس</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/register.php">عضویت</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/loginuser.php">ورود</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com">صفحه اصلی</a>
	</li>

</ul>
	
<div class="-bayan-clear-both"></div>
</div>
	<div class="-bayan-main">
		<div class="-bayan-content">
            <div id="brs"></div>
<div class="-bayan-content-main">
	<h1>کد فعال سازی را  اشتباه وارد کردید مجدد سعی نمایید</h1>
        <span><a href="http://www.leonardscarf.com/register/confirm-late.php" class="-elm-btn cyan">کد فعال سازی </a><span>
        </br>
 	<h2>برای ثبت تام مجدد,روی دکمه زیر کلیلک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت تام </a><span>
        </br>  
 	<h2>جهت بازگشت به صفحه اصلی , روی لینک زیر کلیک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/" class="-elm-btn cyan">صفحه اصلی</a><span>
        </div>
        </div>
        </div>';
    exit;
   }
else
{
echo '     <div class="-bayan-wrp">
<div class="-bayan-head-border"></div>
<div class="-bayan-head">
		
	<ul class="-bayan-menu">
	
	<li>
		<a href="http://www.leonardscarf.com/contactus.php">تماس</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/register.php">عضویت</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/loginuser.php">ورود</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com">صفحه اصلی</a>
	</li>

</ul>
	
<div class="-bayan-clear-both"></div>
</div>
	<div class="-bayan-main">
		<div class="-bayan-content">
            <div id="brs"></div>
<div class="-bayan-content-main">
	<h1>کد فعال سازی را  اشتباه وارد کردید مجدد سعی نمایید</h1>
        <span><a href="http://www.leonardscarf.com/register/confirm-late.php" class="-elm-btn cyan">کد فعال سازی </a><span>
        </br>
 	<h2>برای ثبت تام مجدد,روی دکمه زیر کلیلک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت تام </a><span>
        </br>  
 	<h2>جهت بازگشت به صفحه اصلی , روی لینک زیر کلیک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/" class="-elm-btn cyan">صفحه اصلی</a><span>
        </div>
        </div>
        </div>';
}

 while ($row = mysqli_fetch_assoc($result)) 
 {
// echo $row['hash'];

  if($activecode==$row['hash'])
  {
    if($buytype=="omde")
    {
     $sql = "UPDATE omde SET active='1' WHERE email='".$row['email']."' AND hash='".$row['hash']."' AND active='0'";
    } 
    if($buytype=="khorde")
    {
     $sql = "UPDATE khorde SET active='1' WHERE email='".$row['email']."' AND hash='".$row['hash']."' AND active='0'";
    }   
 
$email=$row['email'];

     if (mysqli_query($mysqli, $sql)) 
     {

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
$mail->Body   .= '<b><p style="direction:rtl;font-family:tahoma;">با سلام</p><br /><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">ثبت نام شما با موفقیت انجام شد</p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">جهت استفاده کامل از سایت از لینک زیر برای وروداستفاده کنید</p>';
$mail->Body   .= '<a href="http://www.leonardscarf.com/register/loginuser.php">  ورود به سایت لئونارد اسکارف</a><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">نام کاربری&nbsp;:&nbsp;&nbsp; ';
$mail->Body   .= '<b>';
$mail->Body   .= $row['username'];
$mail->Body   .= '</b></p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کلمه عبور&nbsp;:&nbsp;&nbsp; ';
$mail->Body   .= '<b>';
$mail->Body   .= $row['password'];
$mail->Body   .= '</b></p><br /><br /><br />';
$mail->Body   .= '<p style="direction:ltr;font-family:tahoma;">با تشکر, مدیر سایت</p>';
$mail->Body   .= '</body></html>';

$mail->AltBody = 'ثبت نام شما با موفقیت انجام شد\r\n';
$mail->AltBody .= 'your username : '. $row['username'] .'\r\n';
$mail->AltBody .= 'your password : '. $row['password'] .'\r\n';
if(!$mail->send()) {
        redirect('http://www.leonardscarf.com/register/loginuser.php');} 
        else {redirect('http://www.leonardscarf.com/register/loginuser.php');}
     }

 
     } else 
          { echo "ارور برقراری ارتباط با سرور " . mysqli_error($mysqli);
echo '     <div class="-bayan-wrp">
<div class="-bayan-head-border"></div>
<div class="-bayan-head">
		
	<ul class="-bayan-menu">
	
	<li>
		<a href="http://www.leonardscarf.com/contactus.php">تماس</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/register.php">عضویت</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com/register/loginuser.php">ورود</a>
	</li>
	<li>
		<a href="http://www.leonardscarf.com">صفحه اصلی</a>
	</li>

</ul>
	
<div class="-bayan-clear-both"></div>
</div>
	<div class="-bayan-main">
		<div class="-bayan-content">
            <div id="brs"></div>
<div class="-bayan-content-main">
	<h1>کد فعال سازی را  اشتباه وارد کردید مجدد سعی نمایید</h1>
        <span><a href="http://www.leonardscarf.com/register/confirm-late.php" class="-elm-btn cyan">کد فعال سازی </a><span>
        </br>
 	<h2>برای ثبت تام مجدد,روی دکمه زیر کلیلک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت تام </a><span>
        </br>  
 	<h2>جهت بازگشت به صفحه اصلی , روی لینک زیر کلیک نمایید</h2>
        <span><a href="http://www.leonardscarf.com/" class="-elm-btn cyan">صفحه اصلی</a><span>
        </div>
        </div>
        </div>';

          }

       
  }

 }

}

mysqli_free_result($result);
mysqli_close($mysqli);

?>
</body>
</html>
