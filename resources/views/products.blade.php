@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="productsCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">產品介紹</h1>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div class="center-align">
	    	<h3>奶油蒼蠅 2.0</h3>
			<ul>
				<li>可插拔核心：機身可更換，豐富多變化。</li>
				<li>手機遙控器：手機藍芽遙控，人人都是飛手。</li>
				<li>掌上型機身：輕巧好攜帶，練飛最佳利器</li>
				<li>可編譯程式：不只是玩具，更是程式學習的法寶。</li>
			</ul>
		    <hr>
		</div>
	</div>
	@include("footer")
@stop