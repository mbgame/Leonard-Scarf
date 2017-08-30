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
if (empty($_SESSION['msg'])) {
    // If a "remote" address is set, we know that this is not a CLI call
    header('HTTP/1.1 403 Forbidden');
    die('Access denied. Go away, shoo!');
}
require_once("db_con.php");

     echo '<div class="-bayan-wrp">
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

	<h1>فعالسازی :</h1>

        <h2>جهت تکمیل فرایند ثبت نام لطفا کد 4 رقمی ارسال شده به شماره همراه یا ایمیل را در کادر زیر وارد نموده و سپس بر روی دکمه ارسال کلیک نمایید </h2>
	
	<div class="-bayan-content-form">
	<form name="activation" id="activation" method="POST" action="laststep.php" onsubmit="return validateForm2()">

	<div class="-elm-cell">
	<label class="-bayan-placeholder" for="activationcode">کد فعال سازی</label>
	<input type="text" id="activationcode" name="activationcode" class="-elm-text ltr" value="" maxlength="4"  data-tips="کد را به صورت لاتین وارد نمایید">
	<div  id="activationcodeInfo"></div>
	</div>

	<div class="-bayan-content-right">
	<input name="submitt" type="submit" value="ارسال" class="-elm-btn cyan">
	</div>

	<div class="-bayan-content-left"></div>
	<div class="-bayan-clear-both"></div>

	</form>
	</div>
        </div>
	</div>
	</div>
';

mysqli_close($mysqli);
?>
</body>
</html>