@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui grid">
			<div class="four wide column">
				@include("dashboard/orders/orderMenu")
			</div>
			<div class="twelve wide stretched column">
				<div class="ui divided items">
					@foreach($products as $product)
						<div class="item">
							<div class="content">
								<h3 class="header">{{ $product->name }}</h3>
								<div class="description">
									<span>庫存數量：
									</span>
									<a class="ui blue large label">
										<i class="add icon"></i>
										{{ $product->stock }}
									</a>
								</div>
								<div class="extra">
									{{ Auth::user()->userName( $product->updated_by ) }} 於 {{ $product->updated_at }} 更新
								</div>

							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
		$("#order").addClass("active");
		$("#products").addClass("active");
		$('select.dropdown').dropdown();
	 });
	</script>
@stop