<?php
session_start();
$_SESSION['fabric']= null;
$_SESSION['color']= null;
$_SESSION['pagenumber']=1;
?>
<!doctype html>
<html lang="fa">
<head>
<meta charset='utf-8'>
<title>روسری | شال و روسری لئونارد</title>
<link rel='icon' type='image/x-icon' href='https://www.leonardscarf.com/favicon.ico'>
<link rel="canonical" href="https://www.leonardscarf.com/scarf/index.php" />
<link rel="alternate" href="https://www.leonardscarf.com/scarf/index.php" hreflang="fa-ir" />
<meta name='description' content='جستجو بین انواع روسری لئونارد برترین برند ,با ارائه بهترین کیفیت و طراحی و رنگ بندی فوق العاده همتراز با برندهای بزرگ جهان دارای نمایندگی رسمی در سراسر کشور'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta name='keywords' content='shawl and scarf , shawl , scarf ,leonard ,شال و روسری , شال , روسری , لئونارد'>
<meta name='author' content='mohsen bashirzadeh'>
<!-- for leonard -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cookie">
<script src="../js/search/jquery-2.1.1.js"></script>
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
.header-distributed .langdiv a{font-size:20px;}}
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
.imagearchive {margin:30px;text-align:center;}
.miniimage {margin:10px;width:200px;height:250px;display:inline-block;vertical-align: top;}
.miniimage h4{margin-top:10px;color:white;font-family: 'Tahoma', Arial, sans-serif 12px;}
.miniimage img { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -ms-transition: all 1s ease; /* IE 9 */ -o-transition: all 1s ease; /* Opera */transition: all 1s ease;}
.miniimage:hover img { -webkit-transform:scale(1.25); -moz-transform:scale(1.25); -ms-transform:scale(1.25); -o-transform:scale(1.25); transform:scale(1.25);}
.filter-tab {position: static;height:40px;background-color: #ffffff;top: 200px;left: 0;width: 100%;box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08);z-index: 1;}
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
.fa-arrow-circle-down:before {content: "\f0ab";}
.fa-flag:before {content: "\f024";}
.fa-tag:before {content: "\f02b";}
.fa-usd:before {content: "\f155";}
.fa-color:before {content: "\f1fc";}
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
/*filter*/
.filter{width:100%;height:40px;background-color:#fff;z-index:100;}
.filter-menu{cursor: pointer;width:20%;height:40px;padding:10px;float:right;border-left:#b48608 3px solid;text-align:center;-webkit-transition: background 0.5s ease;-moz-transition: background 0.5s ease;-o-transition: background 0.5s ease; -ms-transition: background 0.5s ease;transition: background 0.5s ease;}
.filter-menu i{color:#000;}
.filter-menu:hover{background-color:#000;}
.filter-menu:hover a{color:#fff;}
.filter-menu:hover li a{color:#000;}
.filter-menu:hover ul{display: block;position:absolute;}
.filter-menu a{color: #000;font: 14px 'Tahoma', sans-serif;text-align: center;text-decoration: none;}
.sub-color{width:18%;}
.sub-fabric{width:18%;}
.sub-color li{border:2px #b48608 solid;border-right:none;border-left:none;height:30px;background-color:#fff;list-style-type:none;text-align:center;vertical-align:middle;-webkit-transition: background 0.5s ease;-moz-transition: background 0.5s ease;-o-transition: background 0.5s ease; -ms-transition: background 0.5s ease;transition: background 0.5s ease;}
.sub-color li:first-child:hover{background-color:#4286f4;}
.sub-color li:nth-child(2):hover{background-color:#ed1010;}
.sub-color li:nth-child(3):hover{background-color:#27ce3d;}
.sub-color li:nth-child(4):hover{background-color:#fff430;}
.sub-color li:nth-child(5):hover{background-color:#eaa1e0;}
.sub-color li:nth-child(6):hover{background-color:#7a7a7a;}
.sub-color li:nth-child(7):hover{background-color:#000000;}
.sub-color li:nth-child(8):hover{background-color:#ffffff;}
.sub-color li:nth-child(9):hover{background-color:#0d1256;}
.sub-color li:nth-child(10):hover{background-color:#f1f79b;}
.sub-color li:hover a{color:#fff;}
.sub-color li:nth-child(8):hover a{color:#999;}
.sub-color li:nth-child(10):hover a{color:#555;}
.sub-color{display:none;margin-top:10px;}
.sub-fabric li{border:2px #b48608 solid;border-right:none;border-left:none;height:30px;background-color:#fff;list-style-type:none;text-align:center;vertical-align:middle;-webkit-transition: background 0.5s ease;-moz-transition: background 0.5s ease;-o-transition: background 0.5s ease; -ms-transition: background 0.5s ease;transition: background 0.5s ease;}
.sub-fabric{display:none;margin-top:10px;}
.sub-fabric li:hover{background-color:#999;}
.sub-fabric li:hover a{color:#fff;}
.filter span{display:none;}
.fa-usd{display:none;}
.fa-tag{display:none;}
.fa-flag{display:none;}
.fa-color{display:none;}
@media only screen and (max-width : 900px),only screen and (max-device-width : 900px){
.sub-color{width:17%;}
.sub-fabric{width:17%;}
.filter-menu  a{font-size:1.3vw;}
.fa-arrow-circle-down{display:none;}
.filter-menu > a{display:none;}
.filter span{display:block;color:#000;}
.filter-menu:hover span{color:#fff;}
.filter-menu:hover i{color:#fff;}}
@media only screen and (max-width : 600px),only screen and (max-device-width : 600px){
.fa-usd{display:block;}
.fa-tag{display:block;}
.fa-flag{display:block;}
.fa-color{display:block;}
.filter span{display:none;}
.all span{display:block;}}
.pagination{width:100%;height:auto;text-align:center;margin-top:50px;}
.pagination ul{list-style: none;overflow: hidden;text-align:center;width:50%;margin: 0 auto;}
.pagination li{width:10%;height:auto;border-radius: 0.25em;display:inline-block;position:relative;margin:0 auto;border:2px #b48608 solid;-webkit-transition: background 0.5s ease;-moz-transition: background 0.5s ease;-o-transition: background 0.5s ease; -ms-transition: background 0.5s ease;transition: background 0.5s ease;}
.pagination a{color:#b48608;}
.pagination li:first-child,.pagination li:last-child{width:15%;}
.pagination li:active {-webkit-transform: scale(0.9);-moz-transform: scale(0.9);-ms-transform: scale(0.9);-o-transform: scale(0.9);transform: scale(0.9);}
.pagination li:hover{background-color:#999;cursor:pointer;}
.pagination li:hover a{color:#fff;}
.currentpage{background-color:#555;}
@media only screen and (max-width : 650px),only screen and (max-device-width : 650px){
.pagination li{display:none;} .pagination li:first-child,.pagination li:last-child{display:inline-block;}}
</style>
<script>
function reset(){
document.getElementById("colorname").innerHTML = 'نمایش بر اساس رنگ';
document.getElementById("fabricname").innerHTML = 'نمایش بر اساس جنس';
document.getElementById("regionname").innerHTML = 'نمایش بر اساس ملیت';
}
function changecolorname(str){
document.getElementById("colorname").innerHTML = str;
document.getElementById("regionname").innerHTML = 'نمایش بر اساس ملیت';
}
function changefabric(str){
document.getElementById("colorname").innerHTML = 'نمایش بر اساس رنگ';
document.getElementById("regionname").innerHTML = 'نمایش بر اساس ملیت';
document.getElementById("fabricname").innerHTML = str;
}
function changeregion(str){
document.getElementById("colorname").innerHTML = 'نمایش بر اساس رنگ';
document.getElementById("fabricname").innerHTML = 'نمایش بر اساس جنس';
document.getElementById("regionname").innerHTML = str;
}
function showcolor(str) {
if (str == "") {
document.getElementById("main-gallery").innerHTML = "موردی یافت نشد";
return;
} else {
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("main-gallery").innerHTML = this.responseText;
}
};
xmlhttp.open("GET","color.php?color="+str,true);
xmlhttp.send();
}
}
function showfabric(str) {
if (str == "") {
document.getElementById("main-gallery").innerHTML = "موردی یافت نشد";
return;
} else {
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("main-gallery").innerHTML = this.responseText;
}
};
xmlhttp.open("GET","fabric.php?fabric="+str,true);
xmlhttp.send();
}
}
function changepage(str) {
if (str == "") {
document.getElementById("main-gallery").innerHTML = "";
return;
} else {
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("main-gallery").innerHTML = this.responseText;
}
};
xmlhttp.open("GET","change-page.php?page="+str,true);
xmlhttp.send();
}
}
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
<main>
<div class="filter">
<div class="filter-menu">
<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
<i class="fa fa-color" aria-hidden="true"></i>
<a href="#" id="colorname">نمایش بر اساس رنگ  </a><span>رنگ</span>
<ul class="sub-color">
<li><a href="#blue" onclick="showcolor('آبی');changecolorname('آبی');">آبی</a></li>
<li><a href="#red" onclick="showcolor('قرمز');changecolorname('قرمز');">قرمز</a></li>
<li><a href="#green" onclick="showcolor('سبز');changecolorname('سبز');">سبز</a></li>
<li><a href="#yellow" onclick="showcolor('زرد');changecolorname('زرد');">زرد</a></li>
<li><a href="#purple" onclick="showcolor('صورتی');changecolorname('صورتی');">صورتی</a></li>
<li><a href="#gray" onclick="showcolor('طوسی');changecolorname('طوسی');">طوسی</a></li>
<li><a href="#black" onclick="showcolor('مشکی');changecolorname('مشکی');">مشکی</a></li>
<li><a href="#white" onclick="showcolor('سفید');changecolorname('سفید');">سفید</a></li>
<li><a href="#darkblue" onclick="showcolor('سرمه ای');changecolorname('سرمه ای');">سرمه ای</a></li>
<li><a href="#creme" onclick="showcolor('کرم');changecolorname('کرم');">کرم</a></li>

</ul></div>
<div class="filter-menu">
<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
<i class="fa fa-tag" aria-hidden="true"></i>
<a href="#" id="fabricname">نمایش بر اساس جنس  </a><span>جنس</span>
<ul class="sub-fabric">
<li><a href="#cotton" onclick="showfabric('نخی');changefabric('نخی');">نخی</a></li>
<li><a href="#silk" onclick="showfabric('ابریشم');changefabric('ابریشم');">ابریشم</a></li>
<li><a href="#linen" onclick="showfabric('لنین');changefabric('لنین');">لنین</a></li>
<li><a href="#gagard" onclick="showfabric('ژاگارد');changefabric('ژاگارد');">ژاگارد</a></li>
</ul></div>
<div class="filter-menu all">
<a href="#all" onclick="changepage(1);reset();" id="all">همه روسری ها</a><span onclick="changepage(1);reset();">همه</span>
</div>
<div class="filter-menu">
<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
<i class="fa fa-flag" aria-hidden="true"></i>
<a href="#" id="regionname">نمایش بر اساس ملیت  </a><span>ملیت</span>
<ul class="sub-fabric">
<li><a href="#iran" onclick="showfabric('ایرانی');changeregion('ایرانی');">ایرانی</a></li>
<li><a href="#turk" onclick="showfabric('ترک');changeregion('ترک');">ترک</a></li>
<li><a href="#italy" onclick="showfabric('ایتالیا');changeregion('لیسانس ایتالیا');">لیسانس ایتالیا</a></li>
<li><a href="#other" onclick="showfabric('دیگر');changeregion('کشورهای دیگر');">کشورهای دیگر</a></li>
</ul></div>
<div class="filter-menu">
<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
<i class="fa fa-usd" aria-hidden="true"></i>
<a href="#" id="regionname">نمایش بر اساس قیمت  </a><span>قیمت</span>
<ul class="sub-fabric">
<li><a href="#00-40" onclick="">تا 40 هزار تومان</a></li>
<li><a href="#40-60" onclick="">بین 40 تا 60 هزار تومان</a></li>
<li><a href="#60-80" onclick="">بین 60 تا 80 هزار تومان</a></li>
<li><a href="#80-200" onclick="">بیش از 80 هزار تومان</a></li>
</ul></div>
</div>
<h2 class="rules"><strong>روسری نخی</strong></h2>
<h3 class="content">روسری نخی تابستانه علاوه بر لطافت و سبکی باید دارای سایز مناسب و نیز طرح و رنگ بندی متنوعی باشد تا قابلیت انتخاب و گزینش زیادی در مقابل مصرف کننده قراردهد.این قابلیت به همراه مرغوبیت بالای اجناس لئونارد که همیشه در اولویت استاندارهای شرکت بوده و هست, در پارت جدید تابستانه گنجانده شده است...</h3>
<div class="imagearchive" id="main-gallery">
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-32"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-32-200.jpg" alt="روسری نخی طرح ترمه" title="روسری نخی طرح ترمه" width="200px" height="200px"><h4>روسری نخی طرح ترمه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-31"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-31-200.jpg" alt="روسری نخی طرح گل" title="روسری نخی طرح گل" width="200px" height="200px"><h4>روسری نخی طرح گل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-30"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-30-200.jpg" alt="روسری نخی بهاره طرح فانتزی" title="روسری نخی بهاره طرح فانتزی" width="200px" height="200px"><h4>روسری نخی بهاره طرح فانتزی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-29"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-29-200.jpg" alt="روسری توئیل پاییزه ال وی دست دوز" title="روسری توئیل پاییزه ال وی دست دوز" width="200px" height="200px"><h4>روسری توئیل پاییزه ال وی دست دوز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-28"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-28-200.jpg" alt="روسری نخی پاییزه طرح گلدار" title="روسری نخی پاییزه طرح گلدار" width="200px" height="200px"><h4>روسری نخی پاییزه طرح گلدار</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-27"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-27-200.jpg" alt="روسری نخی پاییزه طرح ال وی کیفی" title="روسری نخی پاییزه طرح ال وی کیفی" width="200px" height="200px"><h4>روسری نخی پاییزه طرح ال وی کیفی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-26"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-26-200.jpg" alt="روسری نخی پاییزه براق" title="روسری نخی پاییزه براق" width="200px" height="200px"><h4>روسری نخی پاییزه براق</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-25"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-25-200.jpg" alt="روسری نخی پائیزه براق طرح خالدار" title="روسری نخی پائیزه براق طرح خالدار" width="200px" height="200px"><h4>روسری نخی پائیزه براق طرح خالدار</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-24"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-24-200.jpg" alt="روسری نخی پاییزه حاشیه کار شده" title="روسری نخی پاییزه حاشیه کار شده" width="200px" height="200px"><h4>روسری نخی پاییزه حاشیه کار شده</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-23"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-23-200.jpg" alt="روسری نخی خامه دوزی طرح کلاه و دستکش" title="روسری نخی خامه دوزی طرح کلاه و دستکش" width="200px" height="200px"><h4>روسری نخی خامه دوزی طرح کلاه و دستکش</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-22"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-22-200.jpg" alt="روسری نخی پاییزه گل ریز خامه دوزی" title="روسری نخی پاییزه گل ریز خامه دوزی" width="200px" height="200px"><h4>روسری نخی پاییزه گل ریز خامه دوزی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-21"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-21-200.jpg" alt="روسری نخی براق گلدار پاییزه" title="روسری نخی براق گلدار پاییزه" width="200px" height="200px"><h4>روسری نخی براق گلدار پاییزه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-20"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-20-200.jpg" alt="روسری نخی پاییزه دو حاشیه گلیمی" title="روسری نخی پاییزه دو حاشیه گلیمی" width="200px" height="200px"><h4>روسری نخی پاییزه دو حاشیه گلیمی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-19"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-19-200.jpg" alt="روسری نخی پاییزه طرح گوچی" title="روسری نخی پاییزه طرح گوچی" width="200px" height="200px"><h4>روسری نخی پاییزه طرح گوچی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-18"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-18-200.jpg" alt="روسری نخی پائیزه طرح حاشیه گلیمی" title="روسری نخی پائیزه طرح حاشیه گلیمی" width="200px" height="200px"><h4>روسری نخی پائیزه طرح حاشیه گلیمی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-17"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-17-200.jpg" alt="روسری نخی پائیزه طرح جغد" title="روسری نخی پائیزه طرح جغد" width="200px" height="200px"><h4>روسری نخی پائیزه طرح جغد</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-16"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-16-200.jpg" alt="روسری نخی پاییزه طرح ال وی  دایره ای" title="روسری نخی پاییزه طرح ال وی  دایره ای" width="200px" height="200px"><h4>روسری نخی پاییزه طرح ال وی  دایره ای</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-15"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-15-200.jpg" alt="روسری نخی پائیزه طرح نیمانی طهران" title="روسری نخی پائیزه طرح نیمانی طهران" width="200px" height="200px"><h4>روسری نخی پائیزه طرح نیمانی طهران</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-14"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-14-200.jpg" alt="روسری نخی پائیزه عروسکی فندی" title="روسری نخی پائیزه عروسکی فندی" width="200px" height="200px"><h4>روسری نخی پائیزه عروسکی فندی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-13"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-13-200.jpg" alt="روسری نخی ال وی" title="روسری نخی ال وی" width="200px" height="200px"><h4>روسری نخی ال وی</h4></a></div>

<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(<?php if($_SESSION['pagenumber']>1){ echo $_SESSION['pagenumber']=$_SESSION['pagenumber']-1;} else{echo $_SESSION['pagenumber']=1;} ?>)"><i>Prev</i></a></li>
<li class="currentpage"><a href="#1"  onclick="changepage(1);">1</a></li>
<li><a href="#2" onclick="changepage(2);">2</a></li>
<li><a href="#3" onclick="changepage(3);">3</a></li>
<li><a href="#next" onclick="changepage(<?php if($_SESSION['pagenumber']<3){ echo $_SESSION['pagenumber']=$_SESSION['pagenumber']+1;} else{echo $_SESSION['pagenumber']=3;} ?>)"><i>Next</i></a></li>
</ul>
</div>
</div>
</main>
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
<!-- for filter -->
<script>var fixmeTop = $('.filter').offset().top;$(window).scroll(function() {var currentScroll = $(window).scrollTop();if (currentScroll >= fixmeTop) {$('.filter').css({position: 'fixed',top: '0',left: '0'});} else {$('.filter').css({position: 'static'});}});</script>
</body>
</html>