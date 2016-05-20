@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui segments">
			<div class="ui segment">
				<p>出貨記錄</p>
			</div>
			<div class="ui segment">
				<table class="ui celled table">
					<thead>
						<tr>
							<th>流水號</th>
							<th>購買人</th>
							<th>版本</th>
							<th>序號</th>
							<th>出貨時間</th>
							<th>購買時間</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $order)
							<tr>
								<td>{{ $order->id }}</td>
								<td>
									@if($order->name)
										{{ $order->name }}
									@else
										尚未註冊
									@endif
								</td>
								<td>{{ $order->type }}</td>
								<td>{{ $order->order_number }}</td>
								<td>{{ $order->created_at }}</td>
								<td>{{ $order->shipped_time }}</td>
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
	 });
	</script>
@stop