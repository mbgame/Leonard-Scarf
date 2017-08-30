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
	<title>فراموشی رمز عبور</title>

	<link rel='icon' 
	type='image/x-icon'
	href='http://www.leonardscarf.com/favicon.ico'>

        <link rel="canonical" href="http://www.leonardscarf.com" hreflang="fa-ir" />
        <meta name='description' content='چنانچه رمز عبور خود را فراموش کرده اید , در این قسمت میتوانید آن را بازیابی نموده و سپس وارد سایت شده و از تمامی امکانات سایت استفاده بفرمایید .'>
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
function validateForm()

{

//for remove space from string
if (!String.prototype.trim) {
String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
}

var erusername = document.getElementById('unameInfo').innerHTML.trim();
var username = document.forms["forget"]["username"].value;
if (username == null || username == "" || username.length < 6 || erusername.length!=0 ) {
// document.getElementById('usernameinfo').innerHTM="plz put 4 digit";
document.getElementById("username").focus();
return false;
}

    var emailRegex =/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/ ;
    var ermail = document.getElementById('emailInfo').innerHTML.trim();
    var email_address = document.forms["forget"]["email_address"].value;
    if (email_address == null || email_address == "" || ermail.length != 0) {
    document.getElementById("email_address").focus();
         return false;
     }
     else if(!email_address.match(emailRegex))
     {
    //$("#emailInfo").html(gettext('email_valid'));
    $("#email_address").removeClass('object_ok'); // if necessary
    $("#email_address").addClass("object_error");
    document.getElementById("email_address").focus();
         return false;
     }
else
{
    $("#email_address").addClass('object_ok'); // if necessary
    $("#email_address").removeClass("object_error");
}

var buytype = document.forms["forget"]["buytype"].value;
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

<h1>فراموشی رمز عبور</h1>


<h2>چنانچه رمز عبور خود را فراموش کرده اید,نام کاربری و ایمیل خود را وارد نمایید </h2>

<div class="-bayan-content-form">
<form name="forget" id="forget" method="POST" action="forgetpass.php" onsubmit="return validateForm()">

<div class="-elm-cell">
<label class="-bayan-placeholder" for="username">نام کاربری</label>
<input type="text" id="username" name="username" class="uname-css" value=""
data-tips="نام کاربری شما باید ۶ تا ۲۵ حرف باشد و تنها استفاده از حروف کوچک لاتین، نقطه و یا خط زیر مجاز است.">	<span id="status"></span>
<div class="-field-error" id="unameInfo"></div>
</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="email_address">ایمیل</label>
	<input type="text" id="email_address" name="email_address" class="-elm-text" value=""
					data-tips="لطفا ایمیل معتبر وارد کنید.">
	<div style="display: none" id="emailWarning">
	<div class="-field-warning">دقت نمایید که معمولا آدرس ایمیل با www شروع نمی‌شود. در صورتیکه مطمئن نیستید www را از ابتدای آدرس ایمیل حذف نمایید.</div>
	</div>
	<div class="-field-error" id="emailInfo"></div>
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
<input name="submit" type="submit" value="ارسال" class="-elm-btn cyan">
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
