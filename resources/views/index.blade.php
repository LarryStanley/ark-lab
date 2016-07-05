@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/unslider.css">
@stop

@section("body")
	<div class="navbar-fixed" style="position: absolute">
		<nav class="transparent">
			<div class="nav-wrapper">
				<div class="brand-logo fadeInFast" id="mark">
					<a href="#top" id="topButton">
						<img src="/images/mark.png" width="150px" alt="" style="margin-top: 5px;">		
					</a>
				</div>
				<a href="#" data-activates="mobile-bar" class="button-collapse"><i class="ion-navicon" style="margin-left: 5px;"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="plans" name="plans" id="plansButton">方舟計畫</a></li>
					<li><a href="/login" name="login" id="loginButton">登入</a></li>
				</ul>
				<ul class="side-nav" id="mobile-bar">
			       	<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="plans" name="plans" id="planButton">方舟計畫</a></li>
					<li><a href="/login" name="login" id="loginButton">登入</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<div class="slider">
		<!--<ul style="height: 100% !important; position: relative;">
			@foreach($sliders as $slider)
			<li style="background: url({{ $slider->image }}) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; ">
				<div class="center">
					<h2>{{ $slider->title }}</h2>
					<hr>
					<p style="font-size: 24px">{!! nl2br(e($slider->illustration)) !!}</p>
					@if($slider->link)
						<a href="{{ $slider->link }}" class="waves-effect waves-light btn cyan darken-2">閱讀更多</a>
					@endif
				</div>
			</li>
			@endforeach
		</ul>
 			@if(Auth::check())
				<button data-target='editBlockModal' class='editButton waves-effect waves-light btn modal-trigger cyan darken-2' ng-click="index.showSliderEditor()">編輯橫幅</button>
			@endif !-->
		<ul style="position: relative; height: 100% !important; width: 100%; left: 0px; margin-top: 0;" class="unslider-wrap unslider-carousel">
						<li style="position: relative; height: 100% !important; width: 100%; background: url(&quot;http://i.imgur.com/tuixvZE.jpg&quot;) 50% 50% / cover no-repeat fixed;" class="unslider-active">
				<div class="center">
					<h2>Ark Lab 多旋翼工坊</h2>
					<hr>
					<p style="font-size: 24px">開放原始碼｜自造多旋翼<br>
拉近天空與你我的距離</p>
									</div>
			</li>
					</ul>
	</div>
	<div class="block">
		@foreach($blocks as $block)
		<a href="{{ $block->link }}">
			<div class="block-content">
				<div class="title">{{ $block->title }}</div>
				<img src="{{ $block->image }}" alt="">
				<div class="illustration">{{ $block->illustration }}</div>
			</div>
		</a>
		@endforeach
	</div>
	<!--<footer class="page-footer blue-grey darken-1" style="margin-top: 0; position: absolute; top: 100%; width: 100%">
	  <div class="container">
	      <div class="row">
	        <div class="col l6 s12">
	          <h5 class="white-text">Ark Lab 多旋翼工坊</h5>
	          <p class="grey-text text-lighten-4">
	            <a href="/about#contactus" class="cyan-text">聯絡我們</a>
	          </p>
	        </div>
	        <div class="col l4 offset-l2 s12">
	          <h5 class="white-text">相關連結</h5>
	          <ul>
	            <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/ArkLab.OpenSkyler">Facebook</a></li>
	            <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/ArkLab.OpenSkyler">Google+</a></li>
	          </ul>
	        </div>
	      </div>
	  </div>
	  <div class="footer-copyright">
	    <div class="container white-text">
	       Ark Lab © 2015 Copyright
	    </div>
	  </div>
	</footer>!-->
          
@stop

@section("javascript")

	<script src="/js/unslider-min.js"></script>
	<script src="/js/ng-file-upload.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
	<script src="/js/sortable.js"></script>
	<script src="/js/index.js"></script>
	<script>
		/*jQuery(document).ready(function($) {
			$('.slider').unslider({
				nav: false,
				arrows: {
					//  Unslider default behaviour
					prev: '<a class="unslider-arrow prev"><i class="ion-ios-arrow-back"></i></a>',
					next: '<a class="unslider-arrow next"><i class="ion-ios-arrow-forward"></i></a>'
				}

			});
		})*/
	</script>
@stop