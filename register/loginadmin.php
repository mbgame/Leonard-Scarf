<?php
if(!isset($_SESSION['usernamelogin']))
{
session_start();
session_unset();
session_destroy();
}
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset='utf-8'>
<title>ورود مدیران</title>
<link rel='icon' type='image/x-icon' href='http://www.leonardscarf.com/favicon.ico'>
<link rel="canonical" href="https://www.leonardscarf.com" hreflang="fa-ir" />
<meta name='description' content='این قسمت مربوط به مدیران سایت می باشد,بعد از ورود میتوانید در قسمت جستجو تمامی محصولات را مشاهده نمایید,زیبایی و جذابیت همراه با لئونارد'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta name='keywords' content='shawl,scarf,leonard,شال,روسری,لئونارد'>
<meta name='author' content='mohsen bashirzadeh'>
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/register.css" rel="stylesheet">
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/main.js" charset="utf-8"></script>
<script src="js/globals.js" charset="utf-8"></script>
<script src="js/reg.js" charset="utf-8"></script>
<style>
html[dir=rtl] .register-link {
float:right;
margin-top: 15px;
margin-right: 50px;
}
</style>
<script>
function validateForm()
{
//for remove space from string
if (!String.prototype.trim) {
String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
}

var username = document.forms["loginadmin"]["username"].value;
if (username == null || username == "" || username.length < 6) {
document.getElementById("username").focus();
return false;
}

var password = document.forms["loginadmin"]["password"].value;
if (password == null || password == "") {
document.getElementById("password").focus();
return false;
}

}
</script>
</head>
<body>
<div class="-bayan-wrp">
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

<h1>ورود مدیران</h1>

<div class="-bayan-content-form">
<form name="loginadmin" id="loginadmin" method="POST" action="loginad.php" onsubmit="return validateForm()">

<div class="-elm-cell">
<label class="-bayan-placeholder" for="username">نام کاربری</label>
<input type="text" id="username" name="username" class="uname-css" value="">
</div>

<div class="-elm-cell">
<label class="-bayan-placeholder" for="password">کلمه عبور</label>
<input type="password" id="password" name="password" class="-elm-text -elm-text-center" maxlength="36">
</div>


<div class="-bayan-content-right">
<input name="submit" type="submit" value="ورود" class="-elm-btn cyan">
</div>

</div>
</br>
</br>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
