@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="butterfly">
		<div class="introCover">
			<div class="valign-wrapper" style="height: 100%;">
				<div class="valign center-align" style="width: 100%;">
					<h1>Butterfly</h1>
					<p>讓 <strong>Arduino</strong> 飛行一直都是這麼容易</p>
				</div>
			</div>
			<img src="http://i.imgur.com/bQZHfeZ.png" alt="" height="65%">
		</div>
		<div class="container detailsIntro">
			<div class="center-align">
				<h2>歸零，重整</h2>
				<p>建立全新的機體架構、加入模組化設計理念，使其在飛行上更適性、更穩定也更有彈性</p>
				<hr>
			</div>
			<div class="row">
				<div class="col m4 s12 center-align">
					最大升力<br>
					<span class="number">73</span>g
				</div>
				<div class="col m4 s12 center-align">
					遙控距離<br>
					<span class="number">250</span>m
				</div>
				<div class="col m4 s12 center-align">
					藍芽遙控距離<br>
					<span class="number">10</span>m
				</div>
				<div class="col m12 s12 center-align">
					<img src="http://i.imgur.com/6lGk5Ct.png" alt="" width="70%">
				</div>
			</div>
		</div>
		<div class="computerCompileCover">
			<div class="page-mask valign-wrapper">
				<div class="container">
					<div class="valign center-align">
						<h2>開放原始碼</h2>
						<p>編程是如此迅速容易</p>
					</div>
				</div>
			</div>
		</div>
		<div class="stemCover">
			<div class="valign-wrapper" style="height: 100%;">
				<div class="container">
					<div class="valign center-align">
						<h2>翻轉教育</h2>
						<hr>	
						<p>
							STEM <br>
							Science Techonolgy Engineer Math <br>
							成為最夯的自造者就從奶油蒼蠅開始
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="phoneIntro">
			<div class="container">
				<h2 class="center-align">就是讓你愛不釋手</h2>
				<p class="center-align">你可以輕易使用藍牙控制奶油蒼蠅</p>
				<div class="row valign-wrapper">
					<div class="col m6 s12 valign center-align">
						<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="70%">
					</div>
					<div class="col m6 s12 center-align">
						<img src="http://i.imgur.com/x5w6zC8.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="preOrderButterfly">
			<div class="page-mask valign-wrapper">
				<div class="container">
					<div class="valign center-align">
						<h2>Be a Maker</h2>
						<a href="/products/order" style="font-size: 22px;">立即預購</a> <br><br>
						<a href="/products/">查看其他產品</a>
					</div>
				</div>
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	@stop
@stop