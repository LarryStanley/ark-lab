@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/unslider.css">
	<link rel="stylesheet" href="/css/unslider-dots.css">
@stop

@section("body")
	<div class="navbar-fixed">
		<nav class="red darken-2">
			<div class="nav-wrapper">
				<div class="brand-logo fadeInFast" id="mark">
					<a href="#top" id="topButton">
						<img src="/images/mark.png" width="150px" alt="" style="margin-top: 5px;">		
					</a>
				</div>
				<a href="#" data-activates="mobile-bar" class="button-collapse"><i class="fa fa-bars" style="margin-left: 5px;"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
					<li><a href="documents" name="documents" id="documentsButton">技術討論</a></li>
				</ul>
				<ul class="side-nav" id="mobile-bar">
			       	<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
					<li><a href="documents" name="documents" id="documentsButton">技術討論</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<div class="slider">
		<ul style="height: 100% !important; position: relative;">
			<li style="background: url(/images/home-background.jpg) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; ">
				<div class="center">
					<h2>Ark Lab 多旋翼工坊</h2>
					<p style="font-size: 24px">開放原始碼｜自造多旋翼<br>
	 				拉近天空與你我的距離</p>
				</div>
			</li>
		</ul>
	</div>
	<div class="block">
		<a href="">
			<div class="block-content">
				<div class="title">教育推廣</div>
				<img src="/images/quad.jpg" alt="">
				<div class="illustration">透過有趣的多旋翼推廣Maker教育</div>
			</div>
		</a>
		<a href="">
			<div class="block-content">
				<div class="title">環境計劃</div>
				<img src="/images/envirnment.jpg" alt="">
				<div class="illustration">守護這片蒼穹</div>
			</div>
		</a>
		<a href="">
			<div class="block-content">
				<div class="title">奶油蒼蠅</div>
				<img src="/images/butterfly.jpg" alt="">
				<div class="illustration">2.0</div>
			</div>
		</a>
		<a href="">
			<div class="block-content">
				<div class="title">技術討論</div>
				<img src="/images/documents.jpg" alt="">
				<div class="illustration">Maker 就是要爬文</div>
			</div>
		</a>
	</div>
	
@stop

@section("javascript")
	<script src="/js/unslider-min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.slider').unslider({
				nav: false,
				arrows: {
					//  Unslider default behaviour
					prev: '<a class="unslider-arrow prev"><i class="ion-ios-arrow-back"></i></a>',
					next: '<a class="unslider-arrow next"><i class="ion-ios-arrow-forward"></i></a>'
				}

			});
		})
	</script>
@stop