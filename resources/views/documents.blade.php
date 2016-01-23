@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="documentsCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">技術討論</h1>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div>
			<h2>常見問題</h2>
		    <hr>
		</div>
	</div>
	@include("footer")
@stop