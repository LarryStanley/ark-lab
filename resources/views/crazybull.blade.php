@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="crazybull">
		<div class="intro valign-wrapper">
			<div class="valign center-align" style="width:100%">
				<h1>Crazybull</h1>
				<p>NTD 1700 起</p>
			</div>
			<img src="http://i.imgur.com/4Qtd5qU.png" alt="" height="65%">
		</div>
		<div class="detailsIntro">
			<div class="container">
				<div class="center-align">
					<h2>站立 戰力 戰慄</h2>
					<p>不只自走車，更乘載夢想</p>
					<hr>
				</div>
				<div class="row">
					<div class="col m4 s12 center-align">
						減速比<br>
						<span class="number">1:50</span>
					</div>
					<div class="col m4 s12 center-align">
						電池<br>
						<span class="number">600</span>mAh
					</div>
					<div class="col m4 s12 center-align">
						RF遙控<br>
						<span class="number">250</span>m
					</div>
					<div class="col m12 s12 center-align">
						<img src="http://i.imgur.com/VkvX6Nt.png" alt="" width="50%">
					</div>
				</div>
			</div>
		</div>
		<div class="moduelIntro">
			<div class="container center-align">
				<h3>可插拔模組</h3>
				<p style="font-size: 22px">玩法更多樣了</p>
				<div class="row center-align">
					<div class="col m3">
						<h5>超音波感測模組</h5>
						<img src="http://i.imgur.com/uzvA3Li.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>濕度感測模組</h5>
						<img src="http://i.imgur.com/amjGkeJ.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>紅外線收發模組</h5>
						<img src="http://i.imgur.com/bsiH0Us.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>光度感測模組</h5>
						<img src="http://i.imgur.com/7prhb7E.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>聲音感測模組</h5>
						<img src="http://i.imgur.com/hJWUxMT.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>雷射模組</h5>
						<img src="http://i.imgur.com/MRUpN0N.png" alt="" width="70%">
					</div>
					<div class="col m3">
						<h5>伺服馬達</h5>
						<img src="http://i.imgur.com/9gJOvVg.png" alt="" width="70%">
					</div>
				</div>
			</div>
		</div>
		<div class="type center-align">
			<h2>千變萬化</h2>
			<div class="container">
				<div class="row">
					<div class="col m6 s12 l6 center-align">
						<h3>站立模式</h3>
						<p class="left-align">兩個輪子和牛眼輪的設計賦予了兩種運動姿態的選擇 當CrazyBull放置在地面上時
							，他如同一台自走車 可以透過外掛到單擺車來隨心所欲的設計自己得自走車 </p>
					</div>
					<div class="col m6 s12 l6 center-align">
						<img src="http://i.imgur.com/4Qtd5qU.png" alt="" width="40%">
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col m6 s12 l6 center-align">
						<img src="http://i.imgur.com/9xnWULC.png" alt="" width="40%">
					</div>
					<div class="col m6 s12 l6">
						<h3>自走車模式</h3>
						<p class="left-align">而當他立起來時CrazyBull儼然就是一台SegWay 可以透過慣性感測元件來使他做不同的運動型式</p>
					</div>
				</div>
			</div>
		</div>
		<div class="preOrder">
			<div class="page-mask valign-wrapper">
				<div class="container">
					<div class="valign center-align">
						<h2>Welcome to Arduino</h2>
						<a href="http://class.ruten.com.tw/user/index00.php?s=dreamwalker1226" style="font-size: 22px;">立即預購</a>
					</div>
				</div>
			</div>
		</div>
		<div class="otherProducts">
			<div class="container center-align">
				<h2>其他產品</h2>
				<div class="row">
					<div class="col m4 s12 butterfly">
						<h3>Butterfly</h3>
						<hr width="45%">
						<p>翻轉教育</p>
						<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="35%"><br>	
						<a href="/products/butterfly">進一步瞭解</a>
					</div>
					<div class="col m4 s12 dragonfly">
						<h3>Dragonfly</h3>
						<hr width="45%">
						<p>更大 更好 更快</p>
						<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="35%"><br>	
						<a href="/products/dragonfly">進一步瞭解</a>
					</div>
					<div class="col m4 s12 arknanoIntro">
						<h3>Ark Nano</h3>
						<hr width="45%">
						<p>慣性感測 · 藍芽遙控 · <span style="font-size: 18px;">Arduino</span></p>
						<img src="http://i.imgur.com/z0QHZG3.png" alt="" width="35%"><br>
						<a href="/products/arknano">進一步瞭解</a>
					</div>
				</div>
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	@stop
@stop