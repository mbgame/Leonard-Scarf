<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset='utf-8'>
<title>ثبت نام</title>
<link rel='icon' type='image/x-icon' href='http://www.leonardscarf.com/favicon.ico'>
<link rel='canonical' href="https://www.leonardscarf.com" hreflang="fa-ir" />
<meta name='description' content='شما میتوانید در این بخش ثبت نام کرده و پس از دریافت کد از طریق شماره همراه ,ثبت نام  را تکمیل کرده و از بخش جستجو تمام محصولات شال و روسری را مشاهده بفرمایید.'>
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
<script src="js/unameval.js" charset="utf-8"></script>
<script src="js/capchaval.js" charset="utf-8"></script>
<script>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script type="text/javascript">
function checkbuytype() {
var e = document.getElementById("buytype");
var selected = e.options[e.selectedIndex].value;
    if ( selected == "omdebuy") {
        document.getElementById('omde').style.display = 'block';
        document.getElementById('khorde').style.display = 'none';
        document.getElementById('taki').style.display = 'none';
    }
    else if (selected=="khordebuy") {
        document.getElementById('khorde').style.display = 'block';
        document.getElementById('omde').style.display = 'none';
        document.getElementById('taki').style.display = 'none';
    }
    else if (selected=="takibuy") {
        document.getElementById('taki').style.display = 'block';
        document.getElementById('omde').style.display = 'none';
        document.getElementById('khorde').style.display = 'none';
    }
    else{ document.getElementById('omde').style.display = 'none';
         document.getElementById('khorde').style.display = 'none';
         document.getElementById('taki').style.display = 'none';
        }
}
function validateForm()
{
//for remove space from string
if (!String.prototype.trim) {
    String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
}

    var erfirstname = document.getElementById('first_nameInfo').innerHTML.trim();
    var firstname = document.forms["register"]["first_name"].value;
    if (firstname == null || firstname == "" || erfirstname.length != 0  ) {
    document.getElementById("first_name").focus();
         return false;
     }

    var erlastname = document.getElementById('last_nameInfo').innerHTML.trim();
    var lastname = document.forms["register"]["last_name"].value;
    if (lastname == null || lastname == ""  || erlastname.length != 0 ) {
    document.getElementById("last_name").focus();
         return false;
     }

    var unameRegex =/^[a-z]([._-]?[a-z0-9]+)*$/ ;
    var erusername = document.getElementById('unameInfo').innerHTML.trim();
    var username = document.forms["register"]["username"].value;
    if (username == null || username == "" || erusername.length != 0 ) {
    document.getElementById("username").focus();
         return false;
     }
     else if(!username.match(unameRegex))
     {
    $("#unameInfo").html(gettext('username_length'));
    $("#username").removeClass('object_ok'); // if necessary
    $("#username").addClass("object_error");
    $("#status").html('');
    document.getElementById("username").focus();
         return false;

}

    var ermail = document.getElementById('emailInfo').innerHTML.trim();
    var email_address = document.forms["register"]["email_address"].value;
    if (email_address == null || email_address == "" || ermail.length != 0) {
    document.getElementById("email_address").focus();
         return false;
     }

    var erpass = document.getElementById('pass1Info').innerHTML.trim();
    var password = document.forms["register"]["password"].value;
    if (password == null || password == "" || erpass.length != 0) {
    document.getElementById("password").focus();
         return false;
     }

    var erpasscon = document.getElementById('pass2Info').innerHTML.trim();
    var password_confirm = document.forms["register"]["password_confirm"].value;
    if (password_confirm == null || password_confirm == "" || erpasscon.length != 0) {
    document.getElementById("password_confirm").focus();
         return false;
     }

    var ermob = document.getElementById('mobileInfo').innerHTML.trim();
    var mobile = document.forms["register"]["mobile"].value;
    if (mobile == null || mobile == "" || ermob.length != 0) {
    document.getElementById("mobile").focus();
         return false;
     }

    var ertel = document.getElementById('telephoneInfo').innerHTML.trim();
    var telephone = document.forms["register"]["telephone"].value;
    if (telephone == null || telephone == "" || ertel.length != 0) {
    document.getElementById("telephone").focus();
         return false;
     }

    var eraddress = document.getElementById('addressInfo').innerHTML.trim();
    var address = document.forms["register"]["address"].value;
    if (address == null || address == "" || eraddress.length != 0) {
    document.getElementById("address").focus();
         return false;
     }

    var buytype = document.forms["register"]["buytype"].value;
    if (buytype == null || buytype == "unknown" ) {
    document.getElementById("buytype").focus();
         return false;
     }

//omde foroooshy///////////////////////////////////////
var e = document.getElementById("buytype");
var selected = e.options[e.selectedIndex].value;
if(selected == "omdebuy")
{
    var eraccount = document.getElementById('account_numberInfo').innerHTML.trim();
    var account = document.forms["register"]["account_number"].value;
    if (account == null || account == "" || eraccount.length != 0) {
    document.getElementById("account_number").focus();
         return false;
     }

    var erkasabe = document.getElementById('kasabeInfo').innerHTML.trim();
    var kasabe = document.forms["register"]["kasabe"].value;
    if (kasabe == null || kasabe == "" || erkasabe.length != 0) {
    document.getElementById("kasabe").focus();
         return false;
     }
}

/////////////////////////////////////////////////////////
//khorde foroooshy///////////////////////////////////////
var e = document.getElementById("buytype");
var selected = e.options[e.selectedIndex].value;
if(selected == "khordebuy")
{
    var erpostal = document.getElementById('postalcodeInfo').innerHTML.trim();
    var postalcode = document.forms["register"]["postalcode"].value;
    if (postalcode == null || postalcode == "" || erpostal.length != 0) {
    document.getElementById("postalcode").focus();
         return false;
     }
}

/////////////////////////////////////////////////////////
    var ercaptcha = document.getElementById('captchaInfo').innerHTML.trim();
    var captcha = document.forms["register"]["captcha_code"].value;
    if (captcha == null || captcha == "" || ercaptcha.length != 0) {
    document.getElementById("captcha_code").focus();
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
	<h1>فرم عضویت</h1>
	
	<div class="-bayan-content-form">
	<form name="register" id="register" method="POST"  action="data.php"  onsubmit="return validateForm()">

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="first_name">نام</label>
	<input type="text" id="first_name" name="first_name" class="-elm-text rtl" >
	<div class="-field-error" id="first_nameInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="last_name">نام خانوادگی</label>
	<input type="text" id="last_name" name="last_name" class="-elm-text rtl" value="">
	<div class="-field-error" id="last_nameInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="username">نام کاربری</label>
	<input type="text" id="username" name="username" class="uname-css" value=""
					data-tips="نام کاربری شما باید ۶ تا ۲۵ حرف باشد و تنها استفاده از حروف کوچک لاتین، نقطه و یا خط زیر مجاز است."><span id="status"></span>	
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
	<label class="-bayan-placeholder" for="password">کلمه عبور</label>
	<div class="-bayan-password-strength">
        <div class="-bayan-password-strength-box">
        <ul class="color">
        <li class="pwd-srtn-1"></li>
        <li class="pwd-srtn-2"></li>
        <li class="pwd-srtn-3"></li>
        <li class="pwd-srtn-4"></li>
        </ul>
        <ul class="normal">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        </ul>
        </div>
        <input type="password" id="password" name="password" class="-elm-text -elm-text-center" maxlength="36"
						data-tips="کلمه عبور می بایست حداقل ۸ حرف باشد.">
        </div>
	<div class="-field-error" id="pass1Info"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="password_confirm">تکرار کلمه عبور</label>
	<input type="password" id="password_confirm" name="password_confirm" class="-elm-text -elm-text-center" maxlength="36"
					data-tips="کلمه عبور را تکرار کنید.">
	<div class="-field-error" id="pass2Info"></div>
	</div>
			

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="mobile">موبایل</label>
	<input type="text" id="mobile" name="mobile" class="-elm-text" value=""	maxlength="11"  data-tips="لطفا شماره همراه خود را به صورت 09123334455 وارد کنید.">
	<div class="-field-error" id="mobileInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="telephone">تلقن</label>
	<input type="text" id="telephone" name="telephone" class="-elm-text" value=""	maxlength="11"  data-tips="لطفا شماره تلفن را همراه با کد شهر به صورت 02122334455 وارد کنید.">
	<div class="-field-error" id="telephoneInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="address">آدرس</label>
	<input type="text" id="address" name="address" class="-elm-text" value=""	maxlength="100"  data-tips="لطفا آدرس خود را وارد نمایید">
	<div class="-field-error" id="addressInfo"></div>
	</div>

	<div class="-elm-cell">
	<span class="-bayan-placeholder">تاریخ تولد</span>
	<span class="-bayan-field-wrap -bayan-composite-date">
	<input type="text" name="date_of_birth-year" value="" placeholder="سال" maxlength="4" class="-elm-text -elm-text-center -elm-text-mini" autocomplete="off" data-tips="سال را به صورت چهار رقمی (مانند ۱۳۹۳) وارد کنید.">
	<input type="text" name="date_of_birth-month" value="" placeholder="ماه" maxlength="2" class="-elm-text -elm-text-center -elm-text-mini" autocomplete="off">
	<input type="text" name="date_of_birth-day" value="" placeholder="روز" maxlength="2" class="-elm-text -elm-text-center -elm-text-mini" autocomplete="off">
	</span>
	<div class="-field-error" id="birthdayInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="gender">جنسیت</label>
	<select id="gender" name="gender" class="-elm-select">
					
    
        <option value="o" >
            نا مشخص
        </option>
    
        <option value="m" >
            مرد
        </option>
    
        <option value="f" >
            زن
        </option>
    

	</select>
	<div class="-field-error"></div>
	</div>


	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="buytype">نوع خرید</label>
	<select id="buytype" name="buytype" class="-elm-select" onchange="checkbuytype()" data-tips="لطفا نوع خرید را مشخص نمایید"> 
					
    
        <option value="unknown">
            نا مشخص
        </option>
    
        <option value="omdebuy">
            عمده فروشی
        </option>
    
        <option value="khordebuy">
            خرده فروشی
        </option>

        <option value="takibuy" disabled>
            تک فروشی
        </option>

	</select>
	<div class="-field-error" id="buytypeInfo"></div>
	</div>

        <div id="omde" style="display:none">

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="account_number">شماره حساب</label>
	<input type="text" id="account_number" name="account_number" class="-elm-text" value=""	maxlength="13"  data-tips="شماره حساب بانکی خود را جهت استعلام وارد نمایید">
	<div class="-field-error" id="account_numberInfo"></div>
	</div>

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="kasabe">کسبه</label>
	<input type="text" id="kasabe" name="kasabe" class="-elm-text" value=""	maxlength="70"  data-tips="چند نفر از کسبه معتبر بازار که تا کنون با ایشان کار کرده اید را نام ببرید">
	<div class="-field-error" id="kasabeInfo"></div>
	</div>

	</div>

        <div id="khorde" style="display:none">

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="postalcode">کد پستی</label>
	<input type="text" id="postalcode" name="postalcode" class="-elm-text" value=""	maxlength="10"  data-tips="کد پستی 10 رقمی را وارد نمایید">
	<div class="-field-error" id="postalcodeInfo"></div>
	</div>

        </div>

        <div id="taki" style="display:none">
        </div>
	<div class="-elm-cell">
	<label class="-bayan-placeholder">کد امنیتی</label>
        <p>
        <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' alt="کد امنیتی" ><br>
        <label>لطفا عدد بالا را به انگلیسی وارد نمایید :</label><br>

        <input type="text" id="captcha_code" name="captcha_code" maxlength="4" autocomplete="off" value="" class="-elm-text -elm-text-center"><span id="capstatus"></span>
        <br>
        <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
        </p>
	<div class="-field-error" id="captchaInfo"></div>
	</div>
	<div class="-bayan-content-right">
	<input name="submit" type="submit" value="ثبت نام" class="-elm-btn cyan">
	</div>
	<div class="-bayan-content-left"></div>
	<div class="-bayan-clear-both"></div>
	</form>
	</div>
	</div>
	</div>
	</div>
</div>
</body></html>