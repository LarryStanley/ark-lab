@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="flyProjectCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="row">
					<div class="col m12  center-align" >
						<h1 class="valign fadeIn">飛行業務</h1>
						<p class="fadeIn">
							飛行器讓我們以嶄新的視角，探索這片土地。<br>	
							透過安裝不同儀器，飛行器能有許多變化。<br>
							裝上鏡頭，我們能夠紀錄世界的美麗。<br>
							搭配感測器，飛行器替我們監測環境，守護家園。<br>
							使用蜂鳴器，嚇跑偷吃稻麥的鳥兒。<br>
							你有什麼新奇的主意嗎？我們一起來發掘飛行器的新用途。<br>
						</p>
						<hr style="margin-bottom: 20px;">
					</div>
					<div class="col m4 s12 center-align">
						<button class="btn waves-effect light-blue darken-2">環境監控</button>
					</div>
					<div class="col m4 s12 center-align">
						<button class="btn waves-effect cyan darken-2">攝影紀錄</button>
					</div>
					<div class="col m4 s12 center-align">
						<button class="btn waves-effect teal darken-2">空中表演</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("footer")
@stop