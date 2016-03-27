@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("navwhite")
	<div class="allProducts">
		<div class="preOrderBlock valign-wrapper">
			<div class="valign center-align" style="width: 100%;">
				<h1>即刻預購</h1>
				<hr style="width: 40%;">	
				<p>90% off</p>
				<a href="/products/preorder" class="btn red darken-2">前往預購</a>
			</div>
		</div>
		<div class="butterfly valign-wrapper block">
			<div class="valign center-align" style="width:100%;">
				<h1>Butterfly</h1>
				<hr width="25%">
				<p>翻轉教育</p>
				<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="20%"><br>
				<a href="/products/butterfly">進一步瞭解</a>
			</div>
		</div>
		<div class="dragonfly valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Dragonfly</h1>
				<hr width="25%">
				<p>更大 更好 更快</p>
				<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="20%"><br>	
				<a href="/products/dragonfly">進一步瞭解</a>
			</div>
		</div>
		<div class="crazybull valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Crazybull</h1>
				<hr width="25%">
				<p>不只是自走車</p>
				<img src="http://i.imgur.com/zPiB3x1.png" alt="" width="20%"><br>
				<a href="/products/crazybull">進一步瞭解</a>
			</div>
		</div>
		<div class="arknano valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Ark Nano</h1>
				<hr width="25%">
				<p>慣性感測 · 藍芽遙控 · <span style="font-size: 18px;">Arduino</span></p>
				<img src="http://i.imgur.com/z0QHZG3.png" alt="" width="20%"><br>
				<a href="/products/arknano">進一步瞭解</a>
			</div>
		</div>
	</div>
	@include("footer")

	@section("javascript")
	@stop

@stop