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
</head>
<body>
<?php
require_once("db_con.php");
require 'mail/mailconfig.php';

if (isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email_address'];
$buytype = $_POST['buytype'];

if($buytype=='omde')
{$sql = "SELECT * from omde WHERE username LIKE '{$username}' AND email LIKE '{$email}' AND active= '1' LIMIT 1";}

if($buytype=='khorde')
{$sql = "SELECT * from khorde WHERE username LIKE '{$username}' AND email LIKE '{$email}' AND active= '1' LIMIT 1";}

$result = $mysqli->query($sql);
if (!$result->num_rows == 1) {

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

<h1>نام کاربری یا ایمیل و یا نوع خرید خود را اشتباه وارد کرده اید, لطفا مجدد سعی نمایید</h1>
</br>
<h2>برای بازگشت به صفحه فراموشی رمز عبور ,روی دکمه زیر کلیلک نمایید</h2>
<span><a href="http://www.leonardscarf.com/register/forget.php" class="-elm-btn cyan">فراموشی رمز عبور</a><span>
</br>
<h2>برای ثبت نام مجدد,روی دکمه زیر کلیلک نمایید</h2>
<span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت نام دوباره</a><span>
</div>
</div>
</div>';

} else {
$row = mysqli_fetch_assoc($result);
$pass=$row['password'];

if(isset($pass))
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
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کلمه عبور شما با موفقیت بازیابی شد.</p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">جهت استفاده کامل از سایت از لینک زیر برای وروداستفاده کنید</p>';
$mail->Body   .= '<a href="http://www.leonardscarf.com/register/loginuser.php">  ورود به سایت لئونارد اسکارف</a><br />';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">نام کاربری&nbsp:&nbsp&nbsp ';
$mail->Body   .= '<b>';
$mail->Body   .= $username;
$mail->Body   .= '</b></p>';
$mail->Body   .= '<p style="direction:rtl;font-family:tahoma;">کلمه عبور&nbsp:&nbsp&nbsp ';
$mail->Body   .= '<b>';
$mail->Body   .= $pass;
$mail->Body   .= '</b></p><br /><br /><br />';
$mail->Body   .= '<p style="direction:ltr;font-family:tahoma;">با تشکر, مدیر سایت</p>';
$mail->Body   .= '</body></html>';

$mail->AltBody = 'رمز عبور با موفقیت بازیابی شد\r\n';
$mail->AltBody .= 'your username : '. $username .'\r\n';
$mail->AltBody .= 'your password : '. $pass .'\r\n';
if(!$mail->send()) {
        redirect('http://www.leonardscarf.com/register/forget.php');} 
        else {redirect('http://www.leonardscarf.com/register/loginuser.php');}
     }

}
}
else
{
// If a "remote" address is set, we know that this is not a CLI call
header('HTTP/1.1 403 Forbidden');
die('Access denied. Go away, shoo!');
}

mysqli_free_result($result);
mysqli_close($mysqli);
?>
</body>
</html>
