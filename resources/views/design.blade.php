@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">

	<style>

		html, body {
			font-family: 'cwTeXHei', sans-serif;

		}
	
		h1 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 36px;
		}

		h2 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 24px;
		}

		h3 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 18px;
		}

		p {
			font-family: 'cwTeXHei', sans-serif;
		}

		.color {
			color: white;
			height: 100px;
			width: 250px;
			text-align:center; 
			line-height: 100px;
			margin: 0px 0px 0px 0px;
		}

	</style>
@stop

@section("body")
	<div class="container">
		<h1>Ark Lab 網頁設計規範</h1>
		<h2>色彩規範</h2>
		<hr>
		<h3>主色調</h3>
		<div class="row">
			<div class="col m4 s6">
				<div class="color" style="background-color: #D32F2F">#D32F2F 700 red darken-2</div>
				<div class="color" style="background-color: #F44336">#F44336 500 red</div>
			</div>
			<div class="col m4 s6">
				<div class="color" style="background-color: #0097A7">#0097A7 700</div>
				<div class="color" style="background-color: #00BCD4">#00BCD4 500</div>
			</div>
			<div class="col m4 s6">
				<div class="color" style="background-color: #455A64">#455A64 700</div>
				<div class="color" style="background-color: #607D8B">#607D8B 500</div>
			</div>
		</div>
		<h2>字體</h2>
		<hr>
		<p>考慮使用 Google 的黑體</p>
	</div>
@stop