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
				@foreach($types as $type)
					<div class="ui top attached header">
						{{$type->type_name}}
					</div>
					<div class="ui attached segment">
						@foreach($type->list as $unit)
						<div class="ui label" id="unit{{ $unit->id }}Label">
							<i class="setting icon" id="unit{{ $unit->id }}"></i>	
							{{$unit->unit_name}}	
							 <div class="ui modal" id="unit{{ $unit->id }}Modal">
								<div class="header">刪除銷售單位</div>
								<div class="content">
									是否刪除 <div class="ui label">{{ $unit->unit_name }}</div> ? <br>
									刪除後可能會引響出貨記錄等等
									<div class="ui inverted dimmer">
								    	<div class="ui text loader">刪除中</div>
									</div>
								</div>
								<div class="actions">
									<div class="ui red button deleteUnit" value="{{$unit->id}}">刪除</div>
									<div class="ui cancel button">取消</div>
								</div>
							</div>
					
						</div>
						@endforeach
					</div>
				@endforeach
				<div class="column">
					<button class="ui button" id="newSellUnitButton" style="margin-top:5px">新增銷售單位</button>
					<div class="ui modal" id="sellUnitModal">
						<div class="header">新增銷售單位</div>
						<div class="content">
							<form  action="/dashboard/order/new-unit" id="addSellForm" method="POST" class="ui form" action="/dashboard/order/new-unit">
								<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
								<div class="field">
									<div class="two fields">
										<div class="field">
											<label>銷售種類</label>
											<select name="type" id="" class="ui dropdown">
												@foreach($types as $type)
												<option value="{{$type->id}}">{{ $type->type_name }}</option>
												@endforeach
											</select>
										</div>
										<div class="field">
											<label for="">單位名稱</label>
											<div class="ui input" id="newUnit">
												<input name="unit" type="text" placeholder="名稱">
											</div>
										</div>									
									</div>
									<div class="two fields">
										<div class="field">
											<label for="">聯絡電話</label>
											<div class="ui input">
												<input type="text" placeholder="電話">
											</div>
										</div>
										<div class="field">
											<label for="">聯絡地址</label>
											<div class="ui input">
												<input type="text" placeholder="地址">
											</div>
										</div>
									</div>
									<div class="two fields">
										<div class="field">
											<label for="">窗口姓名</label>
											<div class="ui input">
												<input type="text" placeholder="姓名">
											</div>
										</div>
										<div class="field">
											<label for="">統一編號</label>
											<div class="ui input">
												<input type="number" placeholder="統一編號">
											</div>
										</div>
									</div>
									<div class="field">
										<label for="">聯絡 Email</label>
										<div class="ui input">
											<input type="email" placeholder="email">
										</div>
									</div>
									<div class="field">
										<label for="">備註</label>
										<textarea name="" id="" rows="3"></textarea>
									</div>
								</div>
							</form>
						</div>
						<div class="actions">
						    <div class="ui primary button" id="submitUnit">確定</div>
						    <div class="ui cancel button">取消</div>
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
	 	$("#newSellUnitButton").click(function() {
			$("#sellUnitModal").modal('show');
		});

	 	$("#submitUnit").click(function() {
	 		$("#addSellForm").submit();
	 	});

	 	$('select.dropdown').dropdown();

		$("#units").addClass("active");
		$("#order").addClass("active");

		$(".setting").click(function() {
			$("#" + $(this).attr("id") + "Modal").modal('show');
		});

		$(".deleteUnit").click(function() {
			var id = $(this).attr('value');
			$("#unit" + id + "Modal .content .dimmer .loader").addClass("active");
			$.ajax({
				url: '/dashboard/order/delete-unit',
				type: 'delete',
				data: { id: $(this).attr('value'), _token: $("#csrf-token").attr("value") },
				success: function(result) {
					$("#unit" + id + "Modal").modal('hide');
					$("#unit" + id + "Label").remove();
				}
			});
		});
	 });
	</script>
@stop