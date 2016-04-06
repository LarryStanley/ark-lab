@extends("default")

@section("head")
@stop

@section("body")
	<div class="container">
		<h1>Ark Lab</h1>
		<div class="row">
			<div class="col m3">
				<div class="collection">
					<a href="#!" class="collection-item">預購名單<span class="badge">{{ count($preOrderData) }}</span></a>
				</div>
			</div>
			<div class="col m9">
				@foreach($preOrderData as $order)
					<div class="col s12 m12">
			         	<div class="card grey lighten-4">
			            	<div class="card-content blue-grey-text text-darken-3">
			            		<span class="card-title">{{ $order->name }}</span>
								<ul>
									<li>訂購版本: {{ $order->type }} {{ $order->version }}</li>
									<li>訂購數量: {{ $order->amount }}</li>
									<li>
										飛客計畫: 
										@if($order->flyer)
											參與
										@else
											不參與
										@endif
									</li>
									<li>Email: <a href="mailto:{{ $order->email }}">{{ $order->email }}</a></li>
									<li>聯絡電話: {{ $order->phone }}</li>
									<li>寄送地址: <a href="http://maps.google.com/?q={{ $order->address }}" target="_blank">{{ $order->address }}</a></li>
									<li>訂購時間: {{ $order->created_at }}</li>
								</ul>
				            </div>
				            <!--<div class="card-action">
								<a href="#">This is a link</a>
								<a href="#">This is a link</a>
				            </div>!-->
			        	</div>
			        </div>
		        @endforeach
			</div>
		</div>
	</div>
@stop