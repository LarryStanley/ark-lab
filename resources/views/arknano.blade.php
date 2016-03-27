@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="arknano">
		<div class="intro valign-wrapper">
			<div class="valign center-align" style="width:100%">
				<h1>Ark Nano</h1>
				<p>
					慣性感測 · 藍芽遙控 · Arduino <br>
					NTD 1300 起
				</p>	
			</div>
		</div>
		<div class="container">
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
					<p class="blue-text text-darken-2">敬請期待</p>
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
					<p class="blue-text text-darken-2">敬請期待</p>
				</div>
			</div>
		</div>
		<div class="otherProducts">
			<h2 class="center-align">相容各種無人載具</h2>
			<div class="container">
				<div class="row">
					<div class="col m6 s12 center-align hide-on-small-only">
						<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="65%">
					</div>
					<div class="col m6 s12 valign">
						<h3 class="center-align butterfly">Butterfly</h3>
						<p>
							建立全新的機體架構、加入模組化設計理念，<br>
							使其在飛行上更適性、更穩定也更有彈性<br>
							搭配與 Arduino Nano 規格相容的 ARK Nano 核心。<br>
							機體軟硬件結合更多的通訊傳輸模組如<br>
							Bluetooth HC06、RF-2.4G 及可外掛手機 WiFi 影像模組等。
						</p>
						<div class="center-align">
							<a href="/products/butterfly">查看更多</a>							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col m6 s12 valign">
						<h3 class="center-align dragonfly">Dragonfly</h3>
						<p>搭配與 Nano 規格相容的 Aark Nano 核心。<br>
							與 ButterFly 3.0 共構，<br>		
							融入不同架構且模組化多點式拆卸機架，<br>
							大扭轉角及張力的葉扇，<br>
							超越 ButterFly3.0 垂直升力及倍數附載。
						</p>
						<div class="center-align hide-on-small-only">
							<a href="/products/dragonfly">查看更多</a>								
						</div>
					</div>
					<div class="col m6 s12 center-align hide-on-small-only">
						<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="65%">
					</div>
				</div>
				<div class="row">
					<div class="col m6 s12 valing hide-on-small-only">
						<img src="http://i.imgur.com/zPiB3x1.png" alt="" width="65%">
					</div>
					<div class="col m6 s12">
						<h3 class="center-align crazybull">Crazybull</h3>
						<p>
							搭配與 Arduino Nano 規格相容的 Ark Nano 核心。<br>
							結合 WiFi 影像模組、RGB LED、RF 2.4G 無線通訊模組、HC06 Bluetooth 模組等，增加其在自走車時的通訊及多元運用的彈性；搭配可卸式牛眼輪模組，上結合LED及紅外線感測元件，節省主板元件占用空間，達到精簡化及高效能配置。搭配 Arduino Nano 或者 Ark Nano，應用上皆可以達到遙控車及自走尋跡車。
							轉接板可安配聲音、光敏、溫(濕)度、超音波及紅外線壁障模組等，打破以往地面搖控載具的限制，提升更多元的模組搭配及擴充開發應用。<br>
							搭配 Ark Nano 可使其從三點式著陸，改變運動形式為直立二輪平衡車。<br>
						</p>
						<div class="center-align"><a href="/products/crazybull">查看更多</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="preOrder">
			<div class="page-mask valign-wrapper">
				<div class="container">
					<div class="valign center-align">
						<h2>左右世界、操縱未來</h2>
						<a href="/products/preorder" style="font-size: 22px;">立即預購</a> <br><br>
					</div>
				</div>
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	@stop
@stop