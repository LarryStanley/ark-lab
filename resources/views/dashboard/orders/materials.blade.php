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
				<div class="ui styled fluid accordion">
					@foreach($materials as $type)
				  	<div class="title">
				    	<i class="dropdown icon"></i>
				    	{{ $type->name }}
				  	</div>
				  	<div class="content">
				    	<div class="transition visible" style="display: block !important;">
				    		<div class="ui divided items">
					    		@foreach($type->materials as $material)
					    			<div class="item">
					    				<div class="middle aligned content">
					    					<div class="header">
					    						<h4>{{ $material->name }}</h4>
					    					</div>
					    					<div class="description">
					    						<div class="ui grid">
					    							<div class="twelve wide column">
							    						<a class="ui tiny teal label addStock" value="{{ $material->id }}">
															<i class="add icon"></i>
															{{ $material->stock }}
														</a>
													</div>
													<div class="four wide column">
														<button class="ui button right floated mini red deleteMaterialButton" value="{{ $material->id }}">刪除</button>
													</div>
					    						</div>
					    					</div>
					    					<div class="extra">
												{{ App\User::find( $material->updated_by )->name }} 於 {{ $material->updated_at }} 更新
					    					</div>
					    				</div>
									</div>
					    		@endforeach
				    		</div>
				    	</div>
				    	<button class="blue ui button small newMaterial" value="{{ $type->id }}">新增 {{ $type->name }} 的內容</button>
				  	</div>
				  	@endforeach
				</div>
			</div>
		</div>
	</div>

	<div class="ui modal" id="deleteMaterialModal">
		<div class="header">確認刪除？</div>
		<div class="content">
			你確認要刪除
			<div class="label ui" id="deleteMaterialName">
				
			</div>
			？
			<form action="/dashboard/order/materials/delete" id="deleteMaterialForm" method="POST">
				<input type="hidden" name="id">
				<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			</form>
		</div>
		<div class="actions">
			<div class="ui red button" id="deleteMaterialButton">
				刪除
			</div>
			<div class="ui cancel button">取消</div>
		</div>
	</div>

	<div class="ui modal" id="newMaterialModal">
		<div class="header">
			新增內容
		</div>
		<div class="content">
			新增
			<div class="label ui" id="materialTypeName">
				
			</div>
			內的原物料
			<form action="/dashboard/order/materials/newMaterials" method="POST" class="ui form" id="newMaterialContentForm">
				<div class="field">
					<label for="">原物料名稱</label>
					<input type="text" name="name">
					<input type="hidden" name="materials_type_id">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
				</div>
			</form>
		</div>
		<div class="actions">
			<div class="ui primary button">
				新增
			</div>
			<div class="ui cancel button">取消</div>
		</div>
	</div>

	<div class="ui modal" id="newMaterialStockModal">
		<div class="header">新增庫存</div>
		<div class="content">
			新增
			<div class="label ui" id="materialName">
			</div>
			的庫存，
			目前共有<div class="label teal ui" id="currentStock"></div>個
			<form action="/dashboard/order/materials/updateStock" method="POST" class="ui form" id="newMaterialForm">
				<div class="field">
					<label for="">庫存數量</label>
					<input type="number" value="0" name="stock">
					<input type="hidden" name="id">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
				</div>
			</form>
		</div>
		<div class="actions">
			<div class="ui primary button">
				新增
			</div>
			<div class="ui cancel button">取消</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {
		$("#order").addClass("active");
		$("#materials").addClass("active");
		$('select.dropdown').dropdown();
		$('.ui .accordion').accordion();

		$('.addStock').click(function() {
			$.ajax({
				url: '/api/materials/' + $(this).attr("value"),
				success: function(result) {
					$("#materialName").html(result.name);
					$("#currentStock").html(result.stock);
					$("#newMaterialForm input[name='id']").val(result.id);
					$("#newMaterialStockModal").modal('show');
				}
			});
		});

		$(".deleteMaterialButton").click(function() {
			$.ajax({
				url: '/api/materials/' + $(this).attr("value"),
				success: function(result) {
					$("#deleteMaterialName").html(result.name);
					$("#deleteMaterialForm input[name='id']").val(result.id);
					$("#deleteMaterialModal").modal('show');
				}
			})
		});
		
		$("#deleteMaterialButton").click(function() {
			$("#deleteMaterialForm").submit();
		});

		$(".newMaterial").click(function() {
			$.ajax({
				url: '/api/materials/type/' + $(this).attr("value"),
				success: function(result) {
					$("#materialTypeName").html(result.name);
					$("#newMaterialContentForm input[name='materials_type_id']").val(result.id);
					$("#newMaterialModal").modal('show');
				}
			})
		});
	 });
	</script>
@stop