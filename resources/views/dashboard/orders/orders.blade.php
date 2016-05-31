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
				<table class="ui selectable celled table">
					<thead>
						<tr>
							<th>流水號</th>
							<th>購買人</th>
							<th>版本</th>
							<th>序號</th>
							<th>出貨時間</th>
							<th>購買時間</th>
							<th>負責人</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $order)
							<tr>
								<td>{{ $order->id }}</td>
								<td>
									@if($order->register)
										{{ Auth::user()->userName($order->user_id) }}
									@else
										尚未註冊
									@endif
								</td>
								<td>{{ $order->type }}</td>
								<td>{{ $order->order_number }}</td>
								<td>{{ $order->created_at }}</td>
								<td>{{ $order->shipped_time }}</td>
								<td>{{Auth::user()->userName($order->recorder_id)}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
	 	$("#serialModalButton").click(function() {
			$("#serialModal").modal('show');
		});

		$("#orders").addClass("active");
		$("#order").addClass("active");
	 });
	</script>
@stop