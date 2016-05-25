@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui grid">
			<div class="four wide column">
				@include("dashboard/orderMenu")
			</div>
			<div class="twelve wide stretched column">
				<p>新增出貨種類</p>
				<div class="ui top attached tabular menu">
					<a class="item active" data-tab="sell">經銷</a>
					<a class="item" data-tab="self">自銷</a>

				</div>
				<div class="ui bottom attached tab segment active" data-tab="sell">
					<form action="/dashboard/new-order" class="ui form" method="POST" id="newOrderForm">
						<div class="two fields">
							<div class="field">
								<label>經銷廠商</label>
								<select name="type" id="" class="ui fluid dropdown" style="width:100%;">
									<option value="">IC Shop</option>
								</select>
							</div>
							<div class="field">
								<label>日期</label>
								<input type="text" >
							</div>
						</div>
						
						<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<button class="ui button" type="submit">送出</button>
					</form>
				</div>
				<div class="ui bottom attached tab segment" data-tab="self">
					<form action="/dashboard/new-order" class="ui form" method="POST" id="newOrderForm">
						<div class="two fields">
							<div class="field">
								<label>種類</label>
								<select name="type" id="" class="ui fluid dropdown" style="width:100%;">
									<option value="">露天</option>
								</select>
							</div>
							<div class="field">
								<label>日期</label>
								<input type="text" >
							</div>
						</div>
						
						<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<button class="ui button" type="submit">送出</button>
					</form>
				</div>		
			</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
		$("#order").addClass("active");
		$("#newOrderCategory").addClass("active");
		$('select.dropdown').dropdown();
		$('.menu .item').tab();
		$("#newOrderForm").submit(function(event) {
			$(".form").addClass("loading");
			$("#serialResults").empty();
			$.ajax({
				url: '',
				type: 'POST',
				data: $( this ).serialize(),
				success: function(result) {
					
				}
			});
			event.preventDefault();
		});
	 });
	</script>
@stop