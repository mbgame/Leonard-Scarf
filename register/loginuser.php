<?php
if(!isset($_SESSION['usernamelogin']))
{
session_start();
session_unset();
session_destroy();
}
?>
<!doctype html>
<html lang="fa" dir="rtl"> 
<head>
<meta charset='utf-8'>
<title>ورود کاربران</title>
<link rel='icon' type='image/x-icon' href='https://www.leonardscarf.com/favicon.ico'>
<link rel="canonical" href="https://www.leonardscarf.com" hreflang="fa-ir" />
<meta name='description' content='جهت ورود به سایت نام کاربری و پسورد خود را وارد نمایید,بعد از ورود میتوانید در قسمت جستجو تمامی محصولات را مشاهده نمایید,زیبایی و جذابیت همراه با لئونارد'>
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
var erusername = document.getElementById('unameInfo').innerHTML.trim();
var username = document.forms["login"]["username"].value;
if (username == null || username == "" || username.length < 6 || erusername.length!=0 ) {
// document.getElementById('usernameinfo').innerHTM="plz put 4 digit";
document.getElementById("username").focus();
return false;
}
var erpass = document.getElementById('passwordInfo').innerHTML.trim();
var password = document.forms["login"]["password"].value;
if (password == null || password == "" || erpass.length != 0) {
document.getElementById("password").focus();
return false;
}
var buytype = document.forms["login"]["buytype"].value;
if (buytype == null || buytype == "unknown" ) {
document.getElementById("buytype").focus();
return false;
}
}
</script>
<script>
pic1 = new Image(16, 16);
pic1.src="loader.gif";
$(document).ready(function(){
$("#username").change(function() {
var usr = $("#username").val();
if(usr.length > 5 )
{
$("#unameInfo").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
$.ajax({
type: "POST",
url: "check.php",
data: "username="+ usr,
success: function(msg){
$("#unameInfo").ajaxComplete(function(event, request, settings){
if(msg == 'OK')
{
$("#username").removeClass('object_error'); // if necessary
$("#username").addClass("object_ok");
$(this).html('');
$("#status").html('&nbsp;<img src="tick.gif" align="absmiddle">');
}
else
{
$("#username").addClass('object_error'); // if necessary
$("#username").removeClass("object_ok");
$(this).html('');
$("#status").html('');
$(this).html('نام کاربری وارد شده وجود ندارد');
}
});
}
});
}
else if(usr.length==0 || usr == null || usr == "")
{
$("#unameInfo").html(gettext('username_required'));
$("#unameInfo").show();
$("#username").removeClass('object_ok'); // if necessary
$("#username").addClass("object_error");
$("#status").html('');
}
else
{
$("#unameInfo").html(gettext('username_length'));
$("#username").removeClass('object_ok'); // if necessary
$("#username").addClass("object_error");
$("#status").html('');
}
});
});
</script>
</head>
<body>
<div class="-bayan-wrp">
<div class="-bayan-head-border"></div>
<div class="-bayan-head">
<ul class="-bayan-menu">
<li><a href="https://www.leonardscarf.com/contactus">تماس</a></li>
<li><a href="https://www.leonardscarf.com/register/register">عضویت</a></li>
<li><a href="https://www.leonardscarf.com/register/loginuser">ورود</a></li>
<li><a href="https://www.leonardscarf.com/register/confirm-late">کد تایید</a></li>
<li><a href="https://www.leonardscarf.com">صفحه اصلی</a></li>
</ul>
<div class="-bayan-clear-both"></div>
</div>
<div class="-bayan-main">
<div class="-bayan-content">
<div id="brs"></div>
<div class="-bayan-content-main">
<h1>ورود به سایت</h1>
<h2>جهت استفاده کامل از سایت لئونارد اسکارف لطفا نام کاربری و کلمه عبور خود را وارد نمایید </h2>
<div class="-bayan-content-form">
<form name="login" id="login" method="POST" action="login.php" onsubmit="return validateForm()">
<div class="-elm-cell">
<label class="-bayan-placeholder" for="username">نام کاربری</label>
<input type="text" id="username" name="username" class="uname-css" value=""
data-tips="نام کاربری شما باید ۶ تا ۲۵ حرف باشد و تنها استفاده از حروف کوچک لاتین، نقطه و یا خط زیر مجاز است.">	<span id="status"></span>
<div class="-field-error" id="unameInfo"></div>
</div>
<div class="-elm-cell">
<label class="-bayan-placeholder" for="password">کلمه عبور</label>
<input type="password" id="password" name="password" class="-elm-text -elm-text-center" maxlength="36"
data-tips="کلمه عبور را وارد کنید.">
<div class="-field-error" id="passwordInfo"></div>
</div>
<div class="-elm-cell">
<label class="-bayan-placeholder" for="buytype">نوع خرید</label>
<select id="buytype" name="buytype" class="-elm-select" " data-tips="لطفا نوع خرید را مشخص نمایید">
<option value="unknown">
نا مشخص
</option>
<option value="omde">
عمده فروشی
</option>
<option value="khorde">
خرده فروشی
</option>
<option value="taki" disabled>
تک فروشی
</option>
</select>
<div class="-field-error" id="buytypeInfo"></div>
</div>
<div class="-bayan-content-right">
<input name="submit" type="submit" value="ورود" class="-elm-btn cyan">
</div>
<div class="-bayan-form-opt-right">
<div class="register-link">
<a  href="https://www.leonardscarf.com/register/register">
<span class="-bayan-forgot-caret">›</span>
ثبت نام</a></div>
<div class="register-link">
<a class="forget" href="https://www.leonardscarf.com/register/forget">
<span class="-bayan-forgot-caret">›</span>
فراموشی کلمه عبور </a></div>
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