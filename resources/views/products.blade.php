@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
	<link rel="stylesheet" href="/css/onepage-scroll.css">
@stop

@section("body")
	@include("nav")
	<div class="main">
		<div id="ark90Cover">
			<div class="valign-wrapper" style="width:100%; height: 100%;">
				<div class="container">
					<div class="valign center-align" style="text-align: center;">
						<h1>奶油蒼蠅 3.0</h1>
						<p style="font-size: 20px; z-index: 10;">讓 Arduino 飛行，一直都是這麼容易</p>
						<img src="http://i.imgur.com/jXqgae8.png" alt="" width="45%"><br>	
						<a href="#details" class="btn red darken-2 waves-effect">瞭解更多</a>
					</div>
				</div>
			</div>
		</div>
		<div id="ark90Details">
			<div class="valign-wrapper" style="width:100%;">
				<div class="container">
					<p class="center-align valign">
						<span style="font-size: 36px;">讓你的Arduino 起飛 ・ 奶油蒼蠅3.0 </span><br>
						全新的奶油蒼蠅做了硬體整合 <br>
						插拔核心部份再一次進化 <br>
						Ark NANO 與 Arduino NANO 由於角位設計相同 <br>
						使擁有 Arduino nano 的玩家也可以無痛接軌來操控奶油蒼蠅 <br>
						擴充性高也代表有更多新的玩法<br>
					</p>
					<div class="row">
						<div class="col m4 s12 center-align">
							<h3>ArkNano</h3>
							<img src="/images/arknano.png" alt="" width="120px">
							<ul>
								<li>九軸感測器</li>
								<li>主核心芯片 ATmega328p-AU</li>
								<li>九軸感測器芯片</li>
								<li>藍芽通訊</li>
							</ul>
						</div>
						<div class="col m4 s12 center-align">
							<h3>ArkNano Pro</h3>
							<img src="/images/arknanopro.png" alt="" width="120px">
							<ul>
								<li>九軸 + 氣壓高度感測器</li>
								<li>主核心芯片 ATmega328p-AU</li>
								<li>九軸感測器芯片</li>
								<li>藍芽通訊</li>
							</ul>
						</div>
						<div class="col m4 s12 center-align">
							<h3 style="font-size: 28px">ArkNano Professional</h3>
							<img src="/images/arknanoprofessional.png" alt="" width="120px">
							<ul>
								<li>九軸 + 氣壓高度感測器</li>
								<li>主核心芯片 STM32</li>
								<li>九軸感測器芯片</li>
								<li>藍芽通訊</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arkEduCover">
			<div class="valign-wrapper page-mask">
				<div class="container">
					<div class="valign center-align">
						<p style="font-size: 36px; margin-bottom: 5px;">
							奶油蒼蠅<br>讓你我都是自造者
						</p>
						<a href="/education" class="btn waves-effect cyan darken-2">
							工作坊內容
						</a>
					</div>				
				</div>
			</div>
		</div>
	</div>
	@include("footer")

	@section("javascript")
		<script src="/js/jquery.onepage-scroll.min.js"></script>
		<script>

		</script>
	@stop
@stop