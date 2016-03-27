<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{!! csrf_token() !!}"/>

	<title><?php if(!empty($title)) echo $title." - ";?>ArkLab 多旋翼工坊</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta property="og:title" content="ArkLab 多旋翼工坊 - Open Skyler" />
	<meta property="og:site_name" content="ArkLab 多旋翼工坊"/>
	<meta property="og:url" content="http://arklab.tw"/>
	<meta name="description" content="ArkLab 多旋翼工坊 - Open Skyler 開放原始碼｜自造多旋翼 拉近天空與你我的距離">
	<meta name="keywords" content="開放原始碼 自造多旋翼 多軸 四軸 飛行器 無人機 奶油蒼蠅 Arklab arklab arkLab ArkLab">
	<meta property="og:description" content="ArkLab 多旋翼工坊 - Open Skyler 開放原始碼｜自造多旋翼 拉近天空與你我的距離" />
	<meta property="og:image" content='<?php if(!empty($ogImage)) echo $ogImage; else echo "http://arklab.tw/images/fbimage.png";?>'>
	<meta property="og:type" content="article" />

	
	@yield("head")

</head>
<body <?php if(!empty($ngApp)) echo "ng-app='".$ngApp."'";?> <?php if(!empty($ngController)) echo 'ng-controller="'.$ngController.'"';?>>
	
	@yield("body")

	<script>
		!function(e){"use strict";var n=function(n,t,o){function i(e){return a.body?e():void setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var s=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=s[s.length-1]}var f=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=f.length;t--;)if(f[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
		loadCSS('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
		loadCSS('http://fonts.googleapis.com/icon?family=Material+Icons');
		loadCSS('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/css/materialize.min.css');
	</script>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.modal-trigger').leanModal();
			$('.button-collapse').sideNav();
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-74958342-1', 'auto');
	  ga('send', 'pageview');

	</script>
	@yield("javascript")

	<script>
	</script>
</body>
</html>