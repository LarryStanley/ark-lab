@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui segments">
			<div class="ui segment">
				<p>新增出貨</p>
				<form action="/dashboard/new-order" class="ui form" method="POST" id="newOrderForm">
					<div class="two fields">
						<div class="field">
							<label>產品型號</label>
							<select name="productType" id="" class="ui fluid dropdown" style="width:100%;">
								<option value="Ark90-A">Butterfly 啟航版 - Arduino Nano 核心</option>
								<option value="Ark90-B">Butterfly 蛻變版 - Ark Nano 升級核心</option>	
								<option value="Ark250-A">Dragonfly 啟航版 - Arduino Nano 核心</option>
								<option value="Ark250-B">Dragonfly 蛻變版 - Ark Nano 升級核心</option>
								<option value="Ark250-C">Dragonfly 續航版 - Ark Nano 升級核心</option>
								<option value="Ark250-D">Dragonfly 旗艦版 - Ark Nano升級核心</option>
								<option value="ArkTurbo-A">Crazybull 啟航版 - Arduino Nano核心</option>
								<option value="ArkTurbo-B">Crazybull 蛻變版 - Ark Nano升級核心</option>
								<option value="ArkTurbo-C">Crazybull 續航版 - Ark Nano升級核心、Ark 模組擴充包</option>	
								<option value="ArkNano">Ark Nano</option>
							</select>
						</div>
						<div class="field">
							<label>數量</label>
						    <input type="number" name="number" placeholder="輸入出貨數量" value="1">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<label for="">出貨種類</label>
							<select name="" id="" class="ui fluid dropdown">
								<option value="經銷">經銷</option>
								<option value="自銷">自銷</option>
							</select>
						</div>
						<div class="field">
							<label for="">出貨單位</label>
							<select name="" id="" class="ui fluid dropdown">
								<option value="露天">露天</option>
								<option value="上課用">上課用</option>
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
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
		$("#newOrder").addClass("active");
		$('select.dropdown').dropdown();

		$("#newOrderForm").submit(function(event) {
			$(".form").addClass("loading");
			$("#serialResults").empty();
			$.ajax({
				url: '/dashboard/new-order',
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