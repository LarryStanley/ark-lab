@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui segments">
			<div class="ui segment">
				<p>歡迎來到 ArkLab 多旋翼工坊</p>
			</div>
			<div class="ui segment">
				<p>
					第一次購買 ArkLab 的產品嗎？<br>
					立即輸入產品序號來新增購買紀錄<br>
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
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
	 	$("#serialModalButton").click(function() {
			$("#serialModal").modal('show');
		});

		$("#overall").addClass("active");

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