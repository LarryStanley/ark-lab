@extends("default")

@section("head")

@stop

@section("body")
	@include("nav")
	<div id="lassCover" style="background: url({{ $plan->image }}) no-repeat center center fixed; background-attachment: scroll; -moz-background-size: cover; -o-background-size: cover; -webkit-background-size: cover; background-size: cover;">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container white-text">
				<div class="valign center-align">
					<h2>{{ $plan->title }}</h2>
				</div>
				<div class="row">
					<div class="col m7 s12">
						<p>{!! html_entity_decode(nl2br(e($plan->content))) !!}</p>
					</div>
					<div class="col m5 s12">
						<h5>完成進度</h5>
						<span style="font-size: 30px;">
							{{ $plan->completion }}%
						</span>	
						<div class="progress">
					    	<div class="determinate" style="width: {{ $plan->completion }}%"></div>
					  	</div>	
					</div>
				</div>
				<div class="center-align">
										
				</div>	
			</div>
		</div>
	</div>
	@include("footer")
	
	@section("javascript")
		<script>
			loadCSS("/css/about.css");
		</script>
		<script>
			$(document).ready(function() {
			    
			});
		</script>
	@stop

@stop