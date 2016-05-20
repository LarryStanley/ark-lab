@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui segment">
			<div class="ui items">
				@foreach($history as $order)
			  <div class="item">
			    <div class="image">
			    		@if ($order->type == 'Ark90-B' || $order->type == 'Ark90-A')
			    			<img src="/images/90-1.png" alt="" style="height: auto; width: 70%;">
						@elseif ($order->type == 'Ark250-B' || $order->type == 'Ark250-A' || $order->type == 'Ark250-C' || $order->type == 'Ark250-D')
			    			<img src="/images/250-2.png" alt="" style="height: auto; width: 70%;">
						@elseif ($order->type == 'ArkTurbo-B' || $order->type == 'ArkTurbo-A' || $order->type == 'ArkTurbo-C')
			    			<img src="/images/turbo-2.png" alt="" style="height: auto; width: 70%;">
						@elseif ($order->type == 'ArkNano')
			    			<img src="/images/nano-3.png" alt="" style="height: auto; width: 70%;">
			    		@endif
			    </div>
			    <div class="content">
			    	<a class="header" href="/dashboard/source">
			    		@if ($order->type == 'Ark90-B' || $order->type == 'Ark90-A')
			    			奶油蒼蠅 Butterfly
						@elseif ($order->type == 'Ark250-B' || $order->type == 'Ark250-A' || $order->type == 'Ark250-C' || $order->type == 'Ark250-D')
							飛龍在天 Dragonfly
						@elseif ($order->type == 'ArkTurbo-B' || $order->type == 'ArkTurbo-A' || $order->type == 'ArkTurbo-C')
							狂暴蠻牛 Crazybull
						@elseif ($order->type == 'ArkNano')
							ArkNano
			    		@endif
			    	</a>
				    <div class="meta">
						<span>序號：{{$order->order_number}}</span>
				    </div>
					<div class="description">
						<p>註冊日期：{{ date("Y-m-d", strtotime($order->shipped_time)) }}</p>
						<p>保固截止：{{ date("Y-m-d", strtotime("+ 1 year", strtotime($order->shipped_time))) }}</p>	
					</div>
					<div class="extra">
					</div>
			    </div>
			  </div>
			  @endforeach
			</div>
		</div>
		<div class="ui segment">
			<p>
				立即輸入產品序號來新增購買紀錄
			</P>
			<button class="ui primary button" id="serialModalButton">新增購買</button>
			<div class="ui modal" id="serialModal">
				<div class="header">輸入序號</div>
				<div class="content">
					<p>產品序號將會附在您的產品盒內</p>
					<form id="addBuyForm" method="POST">
						<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<div class="ui input" id="serial">
							<input name="serial" type="text" placeholder="產品序號">
						</div>
					</form>
				</div>
				<div class="actions">
				    <div class="ui primary button" id="submitSerial">確定</div>
				    <div class="ui cancel button">取消</div>
				</div>
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

		$("#history").addClass("active");

		$("#submitSerial").click(function(){
			submitSerial();
		});

		$("#addBuyForm").submit(function(event){
			submitSerial();
		});

		function submitSerial() {
			$("#dialog").remove();
			$("#serial").removeClass("error");
			$("#serial").addClass("left icon loading disabled");
			$("#serial").append('<i class="search icon" id="searchIcon"></i>');
			$.ajax({
				url: '/dashboard/new-buy',
				type: 'POST',
				data: $( "#addBuyForm" ).serialize(),
				success: function(result) {
					$("#serial").removeClass("left icon loading disabled");
					$("#searchIcon").remove();
					if(result.state == "success"){
						$("#addBuyForm").append("<div id='dialog' style='margin-top:5px'>新增成功</div>");
					 	window.location = "/dashboard/history";
					} else if(result.state == "register") {
						$("#serial").addClass("error");
						$("#addBuyForm").append("<div id='dialog' style='color: red; margin-top:5px'>此產品已註冊</div>");
					} else {
						$("#serial").addClass("error");
						$("#addBuyForm").append("<div id='dialog' style='color: red'; margin-top:5px>序號不存在</div>");
					}
				}
			});
			event.preventDefault();
			return false;
		}
	 });
	</script>
@stop