@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="dragonfly">
		<div class="dragonIntro valign-wrapper">
			<div class="container">
				<div class="center-align valign">
					<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="55%">
					<h2>Ark - 250</h2>
					<p>更大、更好、更快</p>
				</div>
			</div>
		</div>
		<div class="container center-align">
			<h3>可插拔模組</h3>
			<p style="font-size: 22px">玩法更多樣了</p>
			<div class="row valign-wrapper">
				<div class="col m8">
					<img src="http://i.imgur.com/IPSodGN.png" alt="" width="100%">
				</div>
				<div class="col m4 valign">
					<ul>
						<li>超音波感測模組</li>
						<li>濕度感測模組</li>
						<li>紅外線收發模組</li>
						<li>光度感測模組</li>
						<li>聲音感測模組</li>
						<li>雷射模組</li>
						<li>伺服馬達</li>
					</ul>
					<a href="">模組詳細資訊 >></a>
				</div>
			</div>
		</div>
	</div>
	@include("footer")

	@section("javascript")
	@stop
@stop