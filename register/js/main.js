var jqueryUrl = (location.protocol=='http:')?
	"/js/jquery-1.8.2.min.js":
	"http://leonardscarf.com/register/js/jquery-1.8.2.min.js";
function addLoadEvent(e){var t=window.onready||function(){};window.onready=function(){window.onready=t;e();window.onready()};if(document.addEventListener){var n=function(){document.removeEventListener("DOMContentLoaded",n,false);window.onready()};document.addEventListener("DOMContentLoaded",n,false);window.addEventListener("load",function(){window.onready()},false)}else if(document.attachEvent){var n=function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",n);window.onready()}};document.attachEvent("onreadystatechange",n);window.attachEvent("onload",function(){window.onready()})}}(function(g){function j(a,d){if(!a)for(var b=0,c=g.getElementsByTagName("script");b<c.length;){if(a=eval("("+c[b].getAttribute("data-nbl")+")")){k=c[b].parentNode;break}b++}a&&f(a,d||l)}function l(){}var m={},n,f,k=g.head||g.body||g.documentElement;f=function(e,t){var r=typeof e;if("string"==r)n(e,t);else if(e instanceof Array)for(var i=e.length,s=function(){--i||t()},r=0;r<e.length;r++)f(e[r],s);else if("function"==r)e(t);else if("object"==r&&e.load)f(e.load,function(){e.callback&&e.callback();e.then?f(e.then,t):t()});else throw"Bad item type "+e};n=function(e,t){function n(){m[s]=!0;t&&t()}var r,i,s=e.replace(/.+\/|\.min\.js|\.js|\?.+|\W/gi,""),o={j:{b:"script",a:"src"},cs:{b:"link",a:"href",c:"stylesheet"},i:{b:"img",a:"src"}};i=(i=e.match(/\.(cs|j)s($|\?)/i))?i[1].toLowerCase():"i";m[s]?n():(r=g.createElement(o[i].b),r.setAttribute(o[i].a,e),o[i].c?(r.setAttribute("rel",o[i].c),n()):r.onload=r.onreadystatechange=function(){if(!this.readyState||/de|te/.test(this.readyState))this.onload=this.onreadystatechange=l,n()},k.appendChild(r))};window.nbl={l:j};j()})(document);

function initLanguage() {
	$(document).click(function () {
		$('.-bayan-lang-box').removeClass("selected");
		$('.-bayan-lang-list').hide();
	});
	$(window).scroll(function () {
		$('.-bayan-lang-box').removeClass("selected");
		$('.-bayan-lang-list').hide();
	});
	$('.-bayan-lang-box').click(function () {
			var langList = $(".-bayan-lang-list"),
				langBoxHeight = $(this).height() + 1,
				langListHeight = langList.height() + 1,
				windowOfElmSize = $(this).offset().top,
				boxAndList = langBoxHeight + langListHeight,
				documentScroll = $(document).scrollTop(),
				windowHeight = $(window).height(),
				diff = (windowOfElmSize - documentScroll) + boxAndList;
			if (diff < windowHeight) {
				langList.css("top", langBoxHeight + "px");
			}
			else if (diff >= windowHeight) {
				langList.css("top", "-" + langListHeight + "px");
			}
			$(this).toggleClass("selected");
			langList.toggle();
			return false;
		}
	);
}

function initChackBrowser() {
	if ($.browser.msie == true && $.browser.version == '6.0' || $.browser.version == '7.0') {
		$('#brs').append('<div class="-bayan-message-box cat-error" style="margin-bottom:0 !important;"><div class="-mess-text">لطفا مرورگر خود را اپدیت نمایید.</div></div>');
		$('.-bayan-head a,.-bayan-head ul,.-bayan-content-left,.-bayan-content-right,.-bayan-main.services,.-bayan-footer-content-right').css("display", "none");
	}
}

function bindJq() {
	$('.-bayan-content').find('input[type=text],input[type=password],select,.-bayan-focusable').first().focus();
	initLanguage();
	initChackBrowser();
	try {
		initLogin();
	} catch (err) {}
	try {
		initValidation();
	}catch (err) {}
	try {
		initRegistration();
	}catch (err) {}
	try {
		showIf();
	} catch (err) {}
	try {
		initApp();
	}catch (err) {}
}

if (window.jQuery) {
	$(bindJq);
} else {
	addLoadEvent(function(){nbl.l({load:jqueryUrl,callback:bindJq})});
}
