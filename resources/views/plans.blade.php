@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="plansCover">
		<div class="valign-wrapper page-mask" style="width:100%; height: 100%;">
			<div class="container">
				<div class="center-align valign">
					<h1>方舟計畫</h1>
					<p style="font-size: 20px">改變世界，由此開始</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h3>專案紀錄</h3>
		<div class="row">
			@foreach($arkPlans as $plan)
				<div class="col m4 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="{{ $plan->image }}">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{ $plan->title }}<i class="material-icons right">more_vert</i></span>
							<p>
								完成度 {{ $plan->completion }}%
								 <div class="progress">
									<div class="determinate" style="width: {{ $plan->completion }}%"></div>
								</div>
								<a href="/plans/{{ $plan->url }}">查看更多</a>
							</p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{ $plan->title }}<i class="material-icons right">close</i></span>
							<p>{{ $plan->content }}
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	@include("footer")
	
	@section("javascript")
		
		<script>
			$(document).ready(function() {
			    
			});
		</script>
	@stop

@stop