<?php
session_start();
$_SESSION['loadmore']=null;
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!doctype html>
<html lang="fa">
<head>
<meta charset='utf-8'>
<title>تماس با ما</title>
<link rel='icon' type='image/x-icon' href='https://www.leonardscarf.com/favicon.ico'>
<link rel="canonical" href="https://www.leonardscarf.com/contactus.php" />
<link rel="alternate" href="https://www.leonardscarf.com/contactus.php" hreflang="fa-ir" />
<meta name="description" content='تماس با شرکت لئونارد,برترین برند انواع شال و روسری با ارائه بهترین کیفیت و طراحی و رنگ بندی فوق العاده همتراز با برندهای بزرگ جهان دارای نمایندگی در سراسر کشور'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta name='keywords' content='شال و روسری , شال , روسری , لئونارد'>
<meta name='author' content='mohsen bashirzadeh'>
<!-- for leonard -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cookie">
<link rel="stylesheet" href="css/contacts/style.css">
<style>
/*header*/
.header-distributed .langdiv{text-align:center;float:right;width:150px;height:60px;}
.header-distributed .langdiv h2{font-size:16px;color:#ffffcc;}
.header-distributed .langdiv a{font-size:18px;color:#737373;}
.header-distributed .langdiv a:hover{color:#b48608;}
.header-distributed{background-color: #000000;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);box-sizing: border-box;width: 100%;text-align: left;font: bold 16px sans-serif;height: 100px;padding: 30px 25px;margin-top: 5px;margin-bottom: 5px;}
.header-distributed .header-left,.header-distributed .header-center,.header-distributed .header-right{display: inline-block;vertical-align: top;}
.header-distributed .header-left{width: 40%;text-align:left;float:left;}
.header-distributed h2{color:#ffffcc;font: normal 40px 'Cookie', cursive;margin: 0;}
.header-distributed h2 span{color:  #b48608;}
.header-distributed h1{color: #ffffcc;font-size: 24px ;padding: 5px 5px;margin: 0;}
.header-distributed h1 strong{font-weight: 15px;}
.header-distributed .header-right{width: 50%;text-align: right;margin-top: 30px;}
@media (max-width: 800px) {
.header-distributed{height: 135px;}
.header-distributed h1{font-size: 18px;}
.header-distributed .header-left,.header-distributed .header-center,.header-distributed .header-right{display: block;width: 100%;margin-top: 10px;margin-bottom: 10px;text-align: center;}
.header-distributed .langdiv{width:100%;margin-top:10px;margin-bottom:10px;}
.header-distributed .langdiv h2{font-size:18px;}
.header-distributed .langdiv a{font-size:20px;}
}
* {padding: 0;margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;box-sizing: border-box;}
nav {width: 90%;margin: 20px auto;}
nav ul {list-style: none;overflow: hidden;}
nav small {color: #aaa; font: 12px Tahoma, sans-serif;text-transform: none;}
nav li a {background: #000;border: 1px solid #b48608;border-top:none;border-bottom:none;color: #ffffcc;display: block;float: right;font: 15px 'Tahoma', sans-serif;padding: 10px;text-align: center;text-decoration: none;width: 12.5%;-webkit-transition: background 0.5s ease;-moz-transition: background 0.5s ease;-o-transition: background 0.5s ease;-ms-transition: background 0.5s ease;transition: background 0.5s ease;}
nav li a:hover {background: #999;color:#000;}
nav li a:hover small{color:#ffffcc;}
nav li:first-child a {border-right:none;}
nav li:last-child a {border-left:none;}
@media only screen and (max-width : 1220px),only screen and (max-device-width : 1220px){
nav li a {font-size: 13px;}
nav small {font-size: 11px;}}
@media only screen and (max-width : 930px),only screen and (max-device-width : 930px){
nav li a {width: 25%;border-bottom: 1px solid #b48608;font-size: 14px;}
nav li:last-child a, nav li:nth-child(4) a {border-left:none;}
nav li:last-child a, nav li:nth-child(5) a {border-right:none;}
nav li:nth-child(5) a, nav li:nth-child(6) a, nav li:nth-child(7) a, nav li:nth-child(8) a {border-bottom:none;}}
@media only screen and (max-width : 580px),only screen and (max-device-width : 580px){
nav li a {width: 50%;font-size: 14px;padding-top: 12px;padding-bottom: 12px;}
nav li:nth-child(even) a {border-left: none;}
nav li:nth-child(odd) a {border-right: none;}
nav li:nth-child(5) a, nav li:nth-child(6) a {border-bottom: 1px solid #b48608;}}
/*body*/
a {text-decoration:none;}
body {background: #000000;color: #ffffcc;overflow: scroll;overflow-x:hidden;overflow-y:auto;}
hr.style-two {width:100%;border: 0;height: 2px;background-image: linear-gradient(to right, rgba(255, 255, 255, 200), rgba(1, 1, 1, 0), rgba(100, 100, 1, 100));}
hr.style-one {border: 0;height: 1px;background-image: linear-gradient(to left, rgba(255, 255, 255, 200), rgba(1, 1, 1, 0.5), rgba(100, 100, 1, 100));}
.rules{text-align: right; direction: rtl;}
h2.rules {font-family: 'Tahoma', Arial, sans-serif; font-weight: 200; font-size: 22px; margin-top: 50px; margin-right: 30px;margin-bottom: 50px; color: #b48608;}
h3.content{font-family: 'Raleway', Arial, sans-serif;font-weight: 150;font-size: 16px;margin-top: 15px;margin-right: 50px;margin-left: 50px;line-height: 180%;color: #737373;text-align: right;direction:rtl;}
@media only screen and (max-width: 800px) {h2.rules{font-size:18px;margin:20px;text-align:center;}h3.content{margin:20px;text-align:center;font-size:16px;}}
/*footer*/
.fa {display: inline-block;font: normal normal normal 14px/1 FontAwesome;font-size: inherit;text-rendering: auto; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;}
.fa-flip-vertical { -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform: scale(1, -1); -ms-transform: scale(1, -1);transform: scale(1, -1);}
.fa-envelope:before {content: "\f0e0";}
.fa-phone:before {content: "\f095";}
.fa-map-marker:before {content: "\f041";}
.fa-facebook:before {content: "\f09a";}
.fa-paper-plane-o:before {content: "\f1d8";}
.fa-paper-plane:before {content: "\f1d9";}
.fa-instagram:before {content: "\f16d";}
.fa-google:before {content: "\f1a0";}
.fa-cogs:before {content: "\f085";}
.footer-up{background-color: #000000;width: 100%;text-align: center;font-family:'Tahoma', Geneva, sans-serif;font-size:16px;padding: 0px 50px;}
.footer-up .footer-center{display: inline-block;vertical-align: top;width: 100%;}
.footer-up .footer-links{color:  #ffffcc;margin: 20px 0 12px;padding: 0;}
.footer-up .footer-links a{display:inline-block;line-height: 2.8;text-decoration: none;color:  inherit;}
.footer-up .footer-links a:hover { color: #767676;}
.footer-distributed{background-color: #000000;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);box-sizing: border-box;width: 100%;text-align: right;font: bold 16px sans-serif;padding: 0px 50px;margin-top: 100px;}
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{display: inline-block;vertical-align: top;}
.footer-distributed .footer-left{width: 40%;}
.footer-distributed h2{color:  #ffffff;font: normal 36px 'Cookie', cursive;margin: 0;}
.footer-distributed h2 span{color:  #b48608;}
.footer-distributed .footer-links{color:  #ffffff;margin: 20px 0 12px;padding: 0;}
.footer-distributed .footer-links a{display:inline-block;line-height: 1.8;text-decoration: none;color:  inherit;}
.footer-distributed .footer-links a:hover { color: #767676;}
.footer-distributed .footer-company-name{color:  #8f9296;font-size: 14px;font-weight: normal;margin: 0;}
.footer-distributed .footer-center{width: 35%;}
.footer-distributed .footer-center i{background-color:  #33383b;color: #ffffff;font-size: 25px;width: 38px;height: 38px;border-radius: 50%;text-align: center;line-height: 42px;margin: 10px 15px;vertical-align: middle;}
.footer-distributed .footer-center i.fa-envelope{font-size: 17px;line-height: 38px;}
.footer-distributed .footer-center p{display: inline-block;color: #ffffff;vertical-align: middle;margin:0;text-align: right;}
.footer-distributed .footer-center p span{display:block;font-weight: normal;font-size:14px;line-height:2;}
.footer-distributed .footer-center p a{color:  #5383d3;text-decoration: none;;}
.footer-distributed .footer-right{width: 20%;text-align: right;}
.footer-distributed .footer-company-about{line-height: 20px;color:  #92999f;font-size: 13px;font-weight: normal;margin: 0;}
.footer-distributed .footer-company-about span {display: block;color:  #ffffff;font-size: 14px;font-weight: bold;margin-bottom: 20px;}
.footer-distributed .footer-company-about  a{color:  #ffffff;}
.footer-distributed .footer-company-about span :hover{color: #767676;}
.footer-distributed .footer-icons{margin-top: 25px;}
.footer-distributed .footer-icons a{display: inline-block;width: 35px;height: 35px;cursor: pointer;background-color:  #33383b;border-radius: 2px;font-size: 20px;color: #ffffff;text-align: center;line-height: 35px;margin-right: 3px;margin-bottom: 5px;}
.footer-distributed .footer-icons a:hover{background-color: #767676; -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)"; -webkit-transform: scale(-1, 1); -ms-transform: scale(-1, 1);transform: scale(-1, 1);}
@media (max-width: 880px) {
.footer-distributed{font: bold 14px sans-serif;}
.footer-distributed .footer-left,.footer-distributed .footer-center,.footer-distributed .footer-right{display: block;width: 100%;margin-bottom: 40px;text-align: center;}
.footer-distributed .footer-center p{text-align: center;}
.footer-distributed .footer-center i{margin-right: 0;}}
</style>
<script>
$(document).ready(function() {
$('#contact').on('submit', function(e) {
e.preventDefault();
var values = $(this).serialize();
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "register/mail.php",
data: values,
cache: false,
success: function(result){
document.getElementById("note").innerHTML="پیام شما با موفقیت ارسال شد ";
}
});
return false;
});
});
</script>
</head>
<body>
<header class="header-distributed">
<div class="header-center">
<h1><strong>شال و روسری</strong> لئونارد </h1>
</div>
<div class="header-left">
<h2>Leonard<span>Scarf</span></h2>
</div>
<div class="langdiv">
<h2>تغییر زبان</h2><hr /><h2><span><a href="https://www.leonardscarf.com/en/">English </a>|<a href="https://www.leonardscarf.com"> Persian</a></span></h2>
</div>
</header>
<hr class="style-two">
<nav>
<ul itemscope itemtype="https://www.schema.org/SiteNavigationElement">
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com">صفحه اصلی<br /> <small>شال و روسری</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/search/">جستجو<br /> <small>تمام ارشیو</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/scarf/">روسری<br /> <small>جستجو روسری</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/shawl/">شال<br /> <small>جستجو شال</small></a></li>
<?php if (!isset($_SESSION['usernamelogin'])) { ?>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/register/register">ثبت نام<br /> <small>عضویت</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/register/loginuser">ورود<br /> <small>کاربر</small></a></li>
<?php } else { 	?>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/register/logout"><?php echo $_SESSION['usernamelogin']; ?><br /> <small>خروج</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/pricelist">لیست قیمت<br /> <small>شال و روسری</small></a></li>
<?php } ?>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/contactus">تماس با لئونارد<br /> <small>تماس بگیرید</small></a></li>
<li itemprop="name"><a itemprop="url" href="https://www.leonardscarf.com/about">درباره لئونارد<br /> <small>توضیحات</small></a></li>
</ul>
</nav>
<!--address-->
<div class="address">
<h2>آدرس</h2>
<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d405.1314166348577!2d51.422864!3d35.675738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9dd14fd78f8d2cd9!2z2LTYp9mEINmIINix2YjYs9ix24wg2YTYptmI2YbYp9ix2K8!5e0!3m2!1sen!2sir!4v1482082959976" height="310" style =' width:100%; frameborder:0;  scrolling:no; border:10;'  ></iframe></div>
<p>خیابان 15 خرداد بازار بزرگ<br>بازار جعفری راسته اصلی پلاک 24</p>
</div>
<!--phone-->
<div class="phone">
<h2>اطلاعات تماس</h2>
<p>شماره تماس : <span>02155555555</span>
<br>
شماره فکس : <span>02155555555</span>
<br>
پست الکترونیک : <a style="	color: #FFFFCC;" href="mailto:leonardscarf@gmail.com">leonardscarf@gmail.com</a>
<br>
وبسایت : <a style="	color: #FFFFCC;" href="https://www.leonardscarf.com">https://www.leonardscarf.com</a>
</p>
</div>
<div class="contact" >
<h2>با ما در ارتباط باشید</h2>
<form id="contact">
<input name="name" placeholder="نام خود را وارد نمایید" class="name" required />
<input name="email" placeholder="ایمیلتان را وارد نمایید" class="email" type="email" required />
<textarea rows="4" cols="50" name="message" placeholder="پیغام خود را وارد نمایید" class="message" required></textarea>
<input name="submit" class="btn" type="submit" value="ارسال" />
</form>
<div id="note"></div>
</div>
<br>
<br>
<br>
<footer class="footer-distributed" dir="rtl">
<hr class="style-one">
<div class="footer-left">
<h2>Leonard<span>Scarf</span></h2>
<p class="footer-links">
<a href="https://www.leonardscarf.com/index" title="صفحه اصلی">صفحه اصلی</a>&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/register/register" title="ثبت نام">ثبت نام</a>&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/register/loginuser" title="ورود به سایت">ورود به سایت</a>&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/contactus" title="تماس با ما">تماس با ما</a>&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/about" title="درباره ما">درباره ما</a>&nbsp;&nbsp;
</p>
<p class="footer-company-name">»Leonard Scarf &copy; 2015</p>
</div>
<div class="footer-center">
<div>
<i class="fa fa-map-marker"></i>
<p>ایران , تهران<span>15 خرداد بین الحرمین روبری مسجد بین الحرمین کوچه تکیه پلاک 3 (جنب سرای عزیزیان)</span></p>
</div>
<div>
<i class="fa fa-phone"></i>
<p dir="ltr">+982155555555</p>
</div>
<div>
<i class="fa fa-envelope"></i>
<p><a href="mailto:admin@leonardscarf.com.com">admin@leonardscarf.com</a></p>
</div>
</div>
<div class="footer-right">
<p class="footer-company-about">
<span><a href="https://www.leonardscarf.com/about" title="درباره شرکت لئونارد">درباره شرکت لئونارد</a></span>
لئونارد ارائه کننده برترین مدلهای شال و روسری
</p>
<div class="footer-icons">
<a href="https://www.facebook.com/leonardazin" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="https://telegram.me/joinchat/CEmNSjvmKui9SUKYbzrrqw" title="Telegram"><i class="fa fa-paper-plane"></i></a>
<a href="https://www.instagram.com/leonardscarf/?ref=badge" title="Instagram"><i class="fa fa-instagram"></i></a>
<a href="https://plus.google.com/118304422008766935997" title="Google plus"><i class="fa fa-google"></i></a>
</div>
</div>
</footer>
<div class="footer-up">
<hr class="style-two">
<div class="footer-center" dir="rtl">
<p class="footer-links">
<a href="https://www.leonardscarf.com/honours" title="افتخارات">افتخارات</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/rules" title="قوانین و مقررات">قوانین و مقررات</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/complaints" title="شکایات">شکایات</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.leonardscarf.com/sitemap.php" title="نقشه سایت">نقشه سایت</a>&nbsp;&nbsp;&nbsp;&nbsp;
</p>
</div>
</div>
</body>
</html>