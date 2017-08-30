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

if (isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$buytype = $_POST['buytype'];

if($buytype=='omde')
{$sql = "SELECT * from omde WHERE username LIKE '{$username}' AND password LIKE '{$password}' AND active= '1' LIMIT 1";}

if($buytype=='khorde')
{$sql = "SELECT * from khorde WHERE username LIKE '{$username}' AND password LIKE '{$password}' AND active= '1' LIMIT 1";}

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

<h1>نام کاربری یا پسورد و یا نوع خرید خود را اشتباه وارد کرده اید, لطفا مجدد سعی نمایید</h1>
</br>
<h2>برای بازگشت به صفحه ورود ,روی دکمه زیر کلیلک نمایید</h2>
<span><a href="http://www.leonardscarf.com/register/loginuser.php" class="-elm-btn cyan">ورود به سایت</a><span>
</br>
<h2>برای ثبت نام مجدد,روی دکمه زیر کلیلک نمایید</h2>
<span><a href="http://www.leonardscarf.com/register/register.php" class="-elm-btn cyan">ثبت نام دوباره</a><span>
</div>
</div>
</div>';

} else {
if($buytype=='omde')
{$sql = "UPDATE omde SET login='1' WHERE username='".$username."' AND password='".$password."' AND active='1'";}
if($buytype=='khorde')
{$sql = "UPDATE khorde SET login='1' WHERE username='".$username."' AND password='".$password."' AND active='1'";}
$result = $mysqli->query($sql);
// echo "شما با موفقیت ورود کردید";
$_SESSION['usernamelogin']=$username;
$_SESSION['buytypelogin']=$buytype;
$_SESSION['timestamp']=time();

redirect('http://www.leonardscarf.com');
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
