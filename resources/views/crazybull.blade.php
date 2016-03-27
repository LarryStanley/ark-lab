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
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	@stop
@stop