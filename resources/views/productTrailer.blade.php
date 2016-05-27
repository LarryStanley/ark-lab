@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="productTrailerCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="valign center-align">
					<h1 style="font-size: 200px; font-family: HelveticaNeue;" class="hide-on-small-only">Flying Soon</h1>
					<h1 style="font-size: 100px; font-family: HelveticaNeue;" class="hide-on-med-and-up">Flying Soon</h1>
					<p style="font-size: 20px;">飛行，一直都是這麼容易 <br> 4/10 Arduino 無人機系列即將發表</p>
					<a href="http://goods.ruten.com.tw/item/show?21609986141973" class="btn waves-effect red darken-2" target="_blank">查看目前商場</a>
				</div>
			</div>
		</div>
	</div>
	@include("footer")
	
	@section("javascript")

	@stop

@stop