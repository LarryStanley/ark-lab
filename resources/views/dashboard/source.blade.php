@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui segments">
			<div class="ui segment">
				<p>開源資料專區</p>
			</div>
			<div class="ui horizontal segments">
				<div class="ui segment">
					<div class="image" style="text-align:center">
						<img src="/images/90-1.png" height="150px">
					</div>
					<div class="content">
						<a class="header">奶油蒼蠅 Butterfly</a>
						<div class="meta">
							<span class="date">2016/05/25 更新</span>
						</div>
						<div class="description">
							所有關於奶油蒼蠅的程式碼
						</div>
					</div>
					<div class="extra content">
						<a>
						  <i class="cloud download icon"></i>
						  下載
						</a>
					</div>
				</div>
				<div class="ui segment">
					<div class="image" style="text-align:center">
						<img src="/images/250-2.png" height="150px">
					</div>
					<div class="content">
						<a class="header">飛龍在天 Dragonfly</a>
						<div class="meta">
							<span class="date">2016/05/25 更新</span>
						</div>
						<div class="description">
							所有關於飛龍在天的程式碼
						</div>
					</div>
					<div class="extra content">
						<a>
						  <i class="cloud download icon"></i>
						  下載
						</a>
					</div>
				</div>
				<div class="ui segment">
					<div class="image" style="text-align:center">
						<img src="/images/turbo-2.png" height="150px">
					</div>
					<div class="content">
						<a class="header">狂暴蠻牛 Crazybull</a>
						<div class="meta">
							<span class="date">2016/05/25 更新</span>
						</div>
						<div class="description">
							所有關於狂暴蠻牛的程式碼
						</div>
					</div>
					<div class="extra content">
						<a>
						  <i class="cloud download icon"></i>
						  下載
						</a>
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

		$("#source").addClass("active");
	 });
	</script>
@stop