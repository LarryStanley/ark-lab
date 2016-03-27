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
					<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="45%">
					<h1>Dragonfly</h1>
					<p>
						更大、更好、更快 <br>
						NTD 3000 起
					</p>
				</div>
			</div>
		</div>
		<div class="container detailsIntro">
			<div class="center-align">
				<h2>大負載成就無限可能</h2>
				<p>升級奶油蒼蠅最佳選擇，250軸距動力加強，讓玩法更多元了</p>
				<hr>
			</div>
			<div class="row">
				<div class="col m4 s12 center-align">
					最大承載重量<br>
					<span class="number">160</span>g
				</div>
				<div class="col m4 s12 center-align">
					遙控距離<br>
					<span class="number">250</span>m
				</div>
				<div class="col m4 s12 center-align">
					藍芽遙控距離<br>
					<span class="number">10</span>m
				</div>
				<div class="col m12 s12">
					<img src="http://i.imgur.com/IPSodGN.png" alt="" width="100%">
				</div>
			</div>
		</div>
		<div class="moduelIntro">
			<div class="container center-align">
				<h3>可插拔模組</h3>
				<p style="font-size: 22px">玩法更多樣了</p>
				<div class="row center-align">
					<div class="col m3 s6">
						<h5>超音波模組</h5>
						<img src="http://i.imgur.com/uzvA3Li.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>濕度感測模組</h5>
						<img src="http://i.imgur.com/amjGkeJ.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>紅外線模組</h5>
						<img src="http://i.imgur.com/bsiH0Us.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>光度感測模組</h5>
						<img src="http://i.imgur.com/7prhb7E.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>聲音感測模組</h5>
						<img src="http://i.imgur.com/hJWUxMT.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>雷射模組</h5>
						<img src="http://i.imgur.com/MRUpN0N.png" alt="" width="70%">
					</div>
					<div class="col m3 s6">
						<h5>伺服馬達</h5>
						<img src="http://i.imgur.com/9gJOvVg.png" alt="" width="70%">
					</div>
				</div>
			</div>
		</div>
		<div class="preOrder">
			<div class="page-mask valign-wrapper">
				<div class="container">
					<div class="valign center-align">
						<h2>Biggest Make Perfect</h2>
						<a href="/products/preorder" style="font-size: 22px;">立即預購</a> <br><br>
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
					<div class="col m4 s12 crazybull">
						<h3>Crazybull</h3>
						<hr width="45%">
						<p>不只是自走車</p>
						<img src="http://i.imgur.com/zPiB3x1.png" alt="" width="35%"><br>
						<a href="/products/crazybull">進一步瞭解</a>
					</div>
					<div class="col m4 s12 arknano">
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