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
				<div class="ui segments">
					<div class="ui segment">
						<p>新增出貨</p>
						<form action="/dashboard/new-order" class="ui form" method="POST" id="newOrderForm">
							<div class="two fields">
								<div class="field">
									<label>產品型號</label>
									<select name="productType" id="" class="ui fluid dropdown" style="width:100%;">
										@foreach($products as $product)
										<option value="{{ $product->id }}">{{ $product->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="field">
									<label>數量</label>
								    <input type="number" name="number" placeholder="輸入出貨數量" value="1">
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<label for="">出貨單位</label>
									<select name="" id="" class="ui fluid dropdown">
										@foreach($units as $unit)
											<option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<button class="ui button" type="submit">送出</button>
						</form>
					</div>
					<div class="ui segment" id="results" style="display:none">
						產生序號如下：<br>
						<div id="serialResults">
							
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
		$("#newOrder").addClass("active");
		$("#order").addClass("active");
		$('select.dropdown').dropdown();
		
		$("#newOrderForm").submit(function(event) {
			$(".form").addClass("loading");
			$("#serialResults").empty();
			$.ajax({
				url: '/dashboard/order/new-order',
				type: 'POST',
				data: $( this ).serialize(),
				success: function(result) {
					$.each(result, function(key,serial) {
						$("#serialResults").append("<div class='ui large label'>"+ serial +"</div>");
					});
					$(".form").removeClass("loading");
					$("#results").show();
				}
			});
			event.preventDefault();
		});
	 });
	</script>
@stop