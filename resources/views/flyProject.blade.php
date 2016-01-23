@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="flyProjectCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">飛行業務</h1>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div class="center-align">
	    	飛行器讓我們以嶄新的視角，探索這片土地。<br>	
			透過安裝不同儀器，飛行器能有許多變化。<br>
			裝上鏡頭，我們能夠紀錄世界的美麗。<br>
			搭配感測器，飛行器替我們監測環境，守護家園。<br>
			使用蜂鳴器，嚇跑偷吃稻麥的鳥兒。<br>
			你有什麼新奇的主意嗎？我們一起來發掘飛行器的新用途。<br>
		    <hr>
		</div>
	</div>
	@include("footer")
@stop