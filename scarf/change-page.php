<?php
session_start();
$page = $_GET['page'];
$_SESSION['pagenumber']=$page;
if($page=="1"){
$_SESSION['fabric']= null;
$_SESSION['color']= null;
echo '
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
<li><a href="#prev" onclick="changepage(1)"><i>Prev</i></a></li>
<li class="currentpage"><a href="#1"  onclick="changepage(1);">1</a></li>
<li><a href="#2" onclick="changepage(2);">2</a></li>
<li><a href="#3" onclick="changepage(3);">3</a></li>
<li><a href="#next" onclick="changepage(2)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="2"){
echo '
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-12"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-12-200.jpg" alt="روسري نخي  لبه دانتل" title="روسري نخي  لبه دانتل" width="200px" height="200px"><h4>روسري نخي  لبه دانتل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-11"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-11-200.jpg" alt="روسری نخی ساده جناقی" title="روسری نخی ساده جناقی" width="200px" height="200px"><h4>روسری نخی ساده جناقی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-10"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-10-200.jpg" alt="روسری نخی دانتل گلدار" title="روسری نخی دانتل گلدار" width="200px" height="200px"><h4>روسری نخی دانتل گلدار</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-9"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-9-200.jpg" alt="روسری نخی طرح گل وترمه" title="روسری نخی طرح گل وترمه" width="200px" height="200px"><h4>روسری نخی طرح گل وترمه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-8"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-8-200.jpg" alt="روسری نخی طرح فندی ریشه سوزنی" title="روسری نخی طرح فندی ریشه سوزنی" width="200px" height="200px"><h4>روسری نخی طرح فندی ریشه سوزنی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-7"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-7-200.jpg" alt="روسری نخی طرح گل درشت وسط پر" title="روسری نخی طرح گل درشت وسط پر" width="200px" height="200px"><h4>روسری نخی طرح گل درشت وسط پر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-6"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-6-200.jpg" alt="روسری نخی طرح چهارخانه" title="روسری نخی طرح چهارخانه" width="200px" height="200px"><h4>روسری نخی طرح چهارخانه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-5"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-5-200.jpg" alt="روسری نخی طرح گل ریز وسط پر" title="روسری نخی طرح گل ریز وسط پر" width="200px" height="200px"><h4>روسری نخی طرح گل ریز وسط پر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-4"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-4-200.jpg" alt="روسری نخی طرح سنتی گل" title="روسری نخی طرح سنتی گل" width="200px" height="200px"><h4>روسری نخی طرح سنتی گل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-3"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-3-200.jpg" alt="روسری نخی طرح خط و خال" title="روسری نخی طرح خط و خال" width="200px" height="200px"><h4>روسری نخی طرح خط و خال</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-2-200.jpg" alt="روسری نخی طرح سنتی" title="روسری نخی طرح سنتی" width="200px" height="200px"><h4>روسری نخی طرح سنتی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-1-200.jpg" alt="شال و روسری لئونارد" title="شال و روسری لئونارد" width="200px" height="200px"><h4>روسری نخی چهار طرح گوشه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/gagard/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/gagard/scarf-gagard-2-200.jpg" alt="روسری کتان ژاگارد سایز 140" title="روسری کتان ژاگارد سایز 140" width="200px" height="200px"><h4>روسری کتان ژاگارد سایز 140</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/gagard/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/gagard/scarf-gagard-1-200.jpg" alt="روسری ژاگارد طرح ساده" title="روسری ژاگارد طرح ساده" width="200px" height="200px"><h4>روسری ژاگارد طرح ساده</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/linen/scarf-3"><img src="https://www.leonardscarf.com/images/scarf/linen/scarf-linen-3-200.jpg" alt="روسری لنین طرح لوئیز ویتون" title="روسری لنین طرح لوئیز ویتون" width="200px" height="200px"><h4>روسری لنین طرح لوئیز ویتون</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/linen/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/linen/scarf-linen-2-200.jpg" alt="روسری نخی لنین طرح ساده" title="روسری نخی لنین طرح ساده" width="200px" height="200px"><h4>روسری نخی لنین طرح ساده</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/linen/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/linen/scarf-linen-1-200.jpg" alt="روسری لنین | شال و روسری" title="روسری لنین | شال و روسری" width="200px" height="200px"><h4>روسری لنین | شال و روسری</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-21"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-21-200.jpg" alt="روسری ساتن ابریشم لئونارد" title="روسری ساتن ابریشم لئونارد" width="200px" height="200px"><h4>روسری ساتن ابریشم لئونارد</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-20"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-20-200.jpg" alt="روسری ابریشم توئیل طرح شکوفه" title="روسری ابریشم توئیل طرح شکوفه" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح شکوفه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-19"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-19-200.jpg" alt="روسری ابریشم مامی طرح گل" title="روسری ابریشم مامی طرح گل" width="200px" height="200px"><h4>روسری ابریشم مامی طرح گل</h4></a></div>
<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(1)"><i>Prev</i></a></li>
<li><a href="#1"  onclick="changepage(1);">1</a></li>
<li class="currentpage"><a href="#2" onclick="changepage(2);">2</a></li>
<li><a href="#3" onclick="changepage(3);">3</a></li>
<li><a href="#next" onclick="changepage(3)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="3"){
echo '
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-18"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-18-200.jpg" alt="روسری ابریشم توئیل طرح زنجیر" title="روسری ابریشم توئیل طرح زنجیر" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح زنجیر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-17"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-17-200.jpg" alt="روسری ابریشم توئیل طرح ساعت" title="روسری ابریشم توئیل طرح ساعت" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح ساعت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-16"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-16-200.jpg" alt="روسری ابریشم توئیل طرح کمربندی" title="روسری ابریشم توئیل طرح کمربندی" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح کمربندی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-15"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-15-200.jpg" alt="روسری ابریشم توئیل طرح شکوفه" title="روسری ابریشم توئیل طرح شکوفه" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح شکوفه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-14"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-14-200.jpg" alt="روسری ابریشم مامی" title="روسری ابریشم مامی" width="200px" height="200px"><h4>روسری ابریشم مامی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-13"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-13-200.jpg" alt="روسری ابریشم توییل دست دوز" title="روسری ابریشم توییل دست دوز" width="200px" height="200px"><h4>روسری ابریشم توییل دست دوز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-12"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-12-200.jpg" alt="روسری ابریشم مامی طرح توپی و راه راه" title="روسری ابریشم مامی طرح توپی و راه راه" width="200px" height="200px"><h4>روسری ابریشم مامی طرح توپی و راه راه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-11"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-11-200.jpg" alt="روسری ابریشم دست دوز سایز 90" title="روسری ابریشم دست دوز سایز 90" width="200px" height="200px"><h4>روسری ابریشم دست دوز سایز 90</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-10"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-10-200.jpg" alt="روسری ابریشم نخ سایز 140" title="روسری ابریشم نخ سایز 140" width="200px" height="200px"><h4>روسری ابریشم نخ سایز 140</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-9"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-9-200.jpg" alt="روسری ابریشم دو رو" title="روسری ابریشم دو رو" width="200px" height="200px"><h4>روسری ابریشم دو رو</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-8"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-8-200.jpg" alt="روسری ابریشم سایز 120 لئونارد" title="روسری ابریشم سایز 120 لئونارد" width="200px" height="200px"><h4>روسری ابریشم سایز 120 لئونارد</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-7"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-7-200.jpg" alt="روسری ابریشم دست دوز" title="روسری ابریشم دست دوز" width="200px" height="200px"><h4>روسری ابریشم دست دوز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-6"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-6-200.jpg" alt="روسری ابریشم مات طرح گل و ترمه" title="روسری ابریشم مات طرح گل و ترمه" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل و ترمه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-5"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-5-200.jpg" alt="روسری ابریشم دست دوز طرح گل ریز" title="روسری ابریشم دست دوز طرح گل ریز" width="200px" height="200px"><h4>روسری ابریشم دست دوز طرح گل ریز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-4"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-4-200.jpg" alt="روسری ابریشم مات طرح گل درشت" title="روسری ابریشم مات طرح گل درشت" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل درشت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-3"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-3-200.jpg" alt="روسری ابریشم مات" title="روسری ابریشم مات" width="200px" height="200px"><h4>روسری ابریشم مات</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-2-200.jpg" alt="روسری ابریشم مات طرح 330" title="روسری ابریشم مات طرح 330" width="200px" height="200px"><h4>روسری ابریشم مات طرح 330</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-1-200.jpg" alt="روسری ابریشم مات طرح گل درشت" title="روسری ابریشم مات طرح گل درشت" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل درشت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-0"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-0-200.jpg" alt="شال و روسری لئونارد" title="شال و روسری لئونارد" width="200px" height="200px"><h4>روسری ابریشم طرح فرگامو</h4></a></div>
<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(2)"><i>Prev</i></a></li>
<li><a href="#1"  onclick="changepage(1);">1</a></li>
<li><a href="#2" onclick="changepage(2);">2</a></li>
<li class="currentpage"><a href="#3" onclick="changepage(3);">3</a></li>
<li><a href="#next" onclick="changepage(3)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="11"){
echo '
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
<li><a href="#prev" onclick="changepage(11)"><i>Prev</i></a></li>
<li class="currentpage"><a href="#1"  onclick="changepage(11);">1</a></li>
<li><a href="#2" onclick="changepage(21);">2</a></li>
<li><a href="#next" onclick="changepage(21)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="21"){
echo '
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-12"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-12-200.jpg" alt="روسري نخي  لبه دانتل" title="روسري نخي  لبه دانتل" width="200px" height="200px"><h4>روسري نخي  لبه دانتل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-11"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-11-200.jpg" alt="روسری نخی ساده جناقی" title="روسری نخی ساده جناقی" width="200px" height="200px"><h4>روسری نخی ساده جناقی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-10"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-10-200.jpg" alt="روسری نخی دانتل گلدار" title="روسری نخی دانتل گلدار" width="200px" height="200px"><h4>روسری نخی دانتل گلدار</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-9"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-9-200.jpg" alt="روسری نخی طرح گل وترمه" title="روسری نخی طرح گل وترمه" width="200px" height="200px"><h4>روسری نخی طرح گل وترمه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-8"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-8-200.jpg" alt="روسری نخی طرح فندی ریشه سوزنی" title="روسری نخی طرح فندی ریشه سوزنی" width="200px" height="200px"><h4>روسری نخی طرح فندی ریشه سوزنی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-7"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-7-200.jpg" alt="روسری نخی طرح گل درشت وسط پر" title="روسری نخی طرح گل درشت وسط پر" width="200px" height="200px"><h4>روسری نخی طرح گل درشت وسط پر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-6"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-6-200.jpg" alt="روسری نخی طرح چهارخانه" title="روسری نخی طرح چهارخانه" width="200px" height="200px"><h4>روسری نخی طرح چهارخانه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-5"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-5-200.jpg" alt="روسری نخی طرح گل ریز وسط پر" title="روسری نخی طرح گل ریز وسط پر" width="200px" height="200px"><h4>روسری نخی طرح گل ریز وسط پر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-4"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-4-200.jpg" alt="روسری نخی طرح سنتی گل" title="روسری نخی طرح سنتی گل" width="200px" height="200px"><h4>روسری نخی طرح سنتی گل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-3"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-3-200.jpg" alt="روسری نخی طرح خط و خال" title="روسری نخی طرح خط و خال" width="200px" height="200px"><h4>روسری نخی طرح خط و خال</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-2-200.jpg" alt="روسری نخی طرح سنتی" title="روسری نخی طرح سنتی" width="200px" height="200px"><h4>روسری نخی طرح سنتی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/cotton/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/cotton/scarf-cotton-1-200.jpg" alt="شال و روسری لئونارد" title="شال و روسری لئونارد" width="200px" height="200px"><h4>روسری نخی چهار طرح گوشه</h4></a></div>
<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(11)"><i>Prev</i></a></li>
<li><a href="#1"  onclick="changepage(11);">1</a></li>
<li class="currentpage"><a href="#2" onclick="changepage(21);">2</a></li>
<li><a href="#next" onclick="changepage(21)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="12"){
echo '
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-21"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-21-200.jpg" alt="روسری ساتن ابریشم لئونارد" title="روسری ساتن ابریشم لئونارد" width="200px" height="200px"><h4>روسری ساتن ابریشم لئونارد</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-20"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-20-200.jpg" alt="روسری ابریشم توئیل طرح شکوفه" title="روسری ابریشم توئیل طرح شکوفه" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح شکوفه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-19"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-19-200.jpg" alt="روسری ابریشم مامی طرح گل" title="روسری ابریشم مامی طرح گل" width="200px" height="200px"><h4>روسری ابریشم مامی طرح گل</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-18"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-18-200.jpg" alt="روسری ابریشم توئیل طرح زنجیر" title="روسری ابریشم توئیل طرح زنجیر" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح زنجیر</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-17"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-17-200.jpg" alt="روسری ابریشم توئیل طرح ساعت" title="روسری ابریشم توئیل طرح ساعت" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح ساعت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-16"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-16-200.jpg" alt="روسری ابریشم توئیل طرح کمربندی" title="روسری ابریشم توئیل طرح کمربندی" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح کمربندی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-15"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-15-200.jpg" alt="روسری ابریشم توئیل طرح شکوفه" title="روسری ابریشم توئیل طرح شکوفه" width="200px" height="200px"><h4>روسری ابریشم توئیل طرح شکوفه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-14"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-14-200.jpg" alt="روسری ابریشم مامی" title="روسری ابریشم مامی" width="200px" height="200px"><h4>روسری ابریشم مامی</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-13"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-13-200.jpg" alt="روسری ابریشم توییل دست دوز" title="روسری ابریشم توییل دست دوز" width="200px" height="200px"><h4>روسری ابریشم توییل دست دوز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-12"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-12-200.jpg" alt="روسری ابریشم مامی طرح توپی و راه راه" title="روسری ابریشم مامی طرح توپی و راه راه" width="200px" height="200px"><h4>روسری ابریشم مامی طرح توپی و راه راه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-11"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-11-200.jpg" alt="روسری ابریشم دست دوز سایز 90" title="روسری ابریشم دست دوز سایز 90" width="200px" height="200px"><h4>روسری ابریشم دست دوز سایز 90</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-10"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-10-200.jpg" alt="روسری ابریشم نخ سایز 140" title="روسری ابریشم نخ سایز 140" width="200px" height="200px"><h4>روسری ابریشم نخ سایز 140</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-9"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-9-200.jpg" alt="روسری ابریشم دو رو" title="روسری ابریشم دو رو" width="200px" height="200px"><h4>روسری ابریشم دو رو</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-8"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-8-200.jpg" alt="روسری ابریشم سایز 120 لئونارد" title="روسری ابریشم سایز 120 لئونارد" width="200px" height="200px"><h4>روسری ابریشم سایز 120 لئونارد</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-7"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-7-200.jpg" alt="روسری ابریشم دست دوز" title="روسری ابریشم دست دوز" width="200px" height="200px"><h4>روسری ابریشم دست دوز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-6"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-6-200.jpg" alt="روسری ابریشم مات طرح گل و ترمه" title="روسری ابریشم مات طرح گل و ترمه" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل و ترمه</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-5"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-5-200.jpg" alt="روسری ابریشم دست دوز طرح گل ریز" title="روسری ابریشم دست دوز طرح گل ریز" width="200px" height="200px"><h4>روسری ابریشم دست دوز طرح گل ریز</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-4"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-4-200.jpg" alt="روسری ابریشم مات طرح گل درشت" title="روسری ابریشم مات طرح گل درشت" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل درشت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-3"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-3-200.jpg" alt="روسری ابریشم مات" title="روسری ابریشم مات" width="200px" height="200px"><h4>روسری ابریشم مات</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-2"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-2-200.jpg" alt="روسری ابریشم مات طرح 330" title="روسری ابریشم مات طرح 330" width="200px" height="200px"><h4>روسری ابریشم مات طرح 330</h4></a></div>
<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(12)"><i>Prev</i></a></li>
<li class="currentpage"><a href="#12"  onclick="changepage(12);">1</a></li>
<li><a href="#22" onclick="changepage(22);">2</a></li>
<li><a href="#next" onclick="changepage(22)"><i>Next</i></a></li>
</ul>
</div>
';}
if($page=="22"){
echo '
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-1"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-1-200.jpg" alt="روسری ابریشم مات طرح گل درشت" title="روسری ابریشم مات طرح گل درشت" width="200px" height="200px"><h4>روسری ابریشم مات طرح گل درشت</h4></a></div>
<div class="miniimage"><a href="https://www.leonardscarf.com/view/scarf/silk/scarf-0"><img src="https://www.leonardscarf.com/images/scarf/silk/scarf-silk-0-200.jpg" alt="شال و روسری لئونارد" title="شال و روسری لئونارد" width="200px" height="200px"><h4>روسری ابریشم طرح فرگامو</h4></a></div>

<div class="pagination" id="pagination">
<ul>
<li><a href="#prev" onclick="changepage(12)"><i>Prev</i></a></li>
<li><a href="#12"  onclick="changepage(12);">1</a></li>
<li class="currentpage"><a href="#22" onclick="changepage(22);">2</a></li>
<li><a href="#next" onclick="changepage(22)"><i>Next</i></a></li>
</ul>
</div>
';}
?>