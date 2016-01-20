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
	<div class="slider" style="height: 100% !important; position: absolute;">
		<ul style="height: 100% !important; position: relative;">
			<li style="background: url(/images/about.jpg) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; "></li>
			<li style="background: url(/images/coscup.jpg) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; "></li>
		</ul>
	</div>
@stop

@section("javascript")
	<script src="/js/unslider-min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.slider').unslider({
				nav: false
			});
		})
	</script>
@stop