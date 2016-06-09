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
				<div class="ui divided items">
					@foreach($products as $product)
						<div class="item">
							<div class="content">
								<h3 class="header">{{ $product->name }}</h3>
								<div class="description">
									<span>庫存數量：
									</span>
									<a class="ui teal label newStockLabel" id="{{ $product->id }}Label">
										<i class="add icon"></i>
										{{ $product->stock }}
									</a>
									<div class="ui modal" id="{{ $product->id }}LabelModal">
										<div class="header">新增庫存</div>
										<div class="content">
											新增
											<div class="label ui">
												{{ $product->name }}
											</div>
											的庫存，
											目前共有<div class="label teal ui">{{ $product->stock }}</div>個
											<form action="/dashboard/order/products/updateStock" method="POST" class="ui form" id="{{ $product->id }}Form">
												<div class="field">
													<label for="">庫存數量</label>
													<input type="number" value="0" name="stock">
													<input type="hidden" value="{{ $product->id }}" name="id">
													<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
												</div>
											</form>
										</div>
										<div class="actions">
											<div class="ui primary button updateStockButton" value="{{ $product->id }}">
												新增
											</div>
											<div class="ui cancel button">取消</div>
										</div>
									</div>
								</div>
								<div class="extra">
									{{ App\User::find( $product->updated_by )->name }} 於 {{ $product->updated_at }} 更新
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<button class="ui button" id="newProductButton">新增商品</button>
				<div class="ui modal" id="newProductModal">
					<div class="header">新增商品</div>
					<div class="content">
						<form action="/dashboard/order/products/new-product" method="POST" class="ui form">
							<div class="field">
								<label for="">商品名稱</label>
								<input type="text" placeholder="商品名稱" name="name">
								<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							</div>
						</form>
					</div>
					<div class="actions">
						<div class="ui primary button" id="newProductButton">
							新增
						</div>
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
		$("#order").addClass("active");
		$("#products").addClass("active");
		$('select.dropdown').dropdown();

		$(".newStockLabel").click(function() {
			var id = $(this).attr("id");
			$("#" + id + "Modal").modal("show");
		});

		$(".updateStockButton").click(function() {
			var value = $(this).attr("value");
			$("#" + value + "Form").submit();
		});

		$("#newProductButton").click(function() {
			$("#newProductModal").modal("show");
		});
	 });
	</script>
@stop