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
								<button class="ui button right floated icon mini editButton" ng-click="products.showEditModal({{ $product->id }})"><i class="setting icon"></i></button>
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

	<div class="ui modal" id="editProductContent">
		<div class="ui inverted dimmer">
			<div class="ui text loader">儲存中...</div>
		</div>
		<div class="header">編輯商品內容</div>
		<div class="content">
			<div class="form ui" id="contentForm">
				<div class="fields" ng-repeat="(index,content) in products.currentProductContent">
					<div class="twelve wide field">
						<div class="ui disabled input">
							<input type="text" ng-model="content.name">
						</div>
					</div>
					<div class="three wide field">
						<div class="ui right labeled input">
							<input type="number" ng-model="content.count">
							<div class="ui basic label">
								個
							</div>							
						</div>
					</div>
					<div class="one wide field">
						<button class="red button ui icon" ng-click="products.removeContent(index)"><i class="remove icon"></i></button>
					</div>
				</div>
			</div>
			<div class="form ui" id="addContentForm">
				<div class="fields">
					<div class="twelve wide field">
						<label>新增內容物</label>
						<select name="content" id="" class="ui dropdown" ng-model="products.newProductContentId">
							@foreach($materials as $type)
								@foreach($type->materials as $material)
								<option value="{{ $material->id }}" class="item">{{$material->name}}</option>
							@endforeach
							@endforeach
						</select>
					</div>
					<div class="four wide field">
						<label for="">數量</label>
						<div class="action ui input">
							<input type="number" value="1" name="count" ng-model="products.newProductContentCount">
							<button class="ui button addContentButton" ng-click="products.addProductContent()">新增</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actions">
			<div class="ui primary button" ng-click="products.saveProductContent()">儲存</div>
			<div class="ui cancel button">取消</div>
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

	 angular.module('productsApp', [])
	 	.controller('ProductsController', function($scope) {
	 		var products = this;
	 		products.currentProductContent = [];
	 		products.newProductContentCount = 1;

	 		products.showEditModal = function(id) {
		 		products.currentProductId = id;
		 		$.getJSON('/api/products/' + id, function(result) {
		 			products.currentProductContent = result.content;
		 			$scope.$apply();
		 			$("#editProductContent").modal("show");
		 		});
	 		}

	 		products.addProductContent = function() {
	 			var exist = false;
	 			angular.forEach(products.currentProductContent, function(value, key) {
	 				if (value.id == products.newProductContentId) {
	 					exist = true;
	 					return false;
	 				}
	 			});

	 			if (!exist) {
		 			products.currentProductContent.push({
		 				id: products.newProductContentId,
		 				name: $("select[name='content'] option:selected").text(),
		 				count: products.newProductContentCount
		 			});
	 			}
	 		}

	 		products.removeContent = function(index) {
	 			products.currentProductContent.splice(index, 1);
	 		}

	 		products.saveProductContent = function() {
	 			$("#editProductContent .dimmer").addClass("active");
	 			var postData = {
	 				productId : products.currentProductId,
	 				content: products.currentProductContent,
	 				_token: $("input[name='_token']").val()
	 			};

	 			if (products.currentProductContent.length > 0){
		 			$.ajax({
						url: '/dashboard/order/products/updateProductContent',
						type: 'POST',
						data: postData,
						dataType: 'json',
						success: function(result) {
				 			$("#editProductContent .dimmer").removeClass("active");
				 			$("#editProductContent").modal("hide");
						}
					});
	 			}
	 		}

	 	}).config(function($interpolateProvider){
			$interpolateProvider.startSymbol('[[').endSymbol(']]');
		});;
	</script>
@stop