@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="envirnmentCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">環境計畫</h1>
			<p>
				曾經，我們用飛行器守護河川。<br>
				透過飛行器檢採水體，運用軟體與網路整合，<br>
				即時回傳汙染情形，揪出不肖廠商<br>
				現在，我們要監測每一分每一秒我們都在呼吸的空氣。<br>
				在天空中檢查大氣中的氣體汙染，並利用網路集結眾人之力。<br>
				在此，我們誠摯地邀請各方飛手，<br>
				一起在不同的地點起飛，守護這片蒼穹之下的人們
			</p>	
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div class="center-align">
		    <hr>
		</div>
	</div>
	@include("footer")
@stop