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
						<button class="ui button right floated mini red deleteMaterialCategoryButton" value="{{ $type->id }}">刪除{{ $type->name }}</button>
				  	</div>
				  	@endforeach
				</div>
				<button class="blue ui button small" id="newMaterialCategory" style="margin-top:10px">新增原物料種類</button>
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

	<div class="ui modal" id="deleteMaterialCategoryModal">
		<div class="header">確認刪除？</div>
		<div class="content">
			你確認要刪除
			<div class="label ui" id="deleteMaterialCategoryName">
				
			</div>
			？
			<form action="/dashboard/order/materials/category/delete" id="deleteMaterialCategoryForm" method="POST">
				<input type="hidden" name="id">
				<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			</form>
		</div>
		<div class="actions">
			<div class="ui red button" id="deleteMaterialCategoryButton">
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

	<div class="ui modal" id="newCategoryModal">
		<div class="header">新增種類</div>
		<div class="content">
			<form action="/dashboard/order/materials/newCategory" method="POST" class="ui form" id="newCategoryForm">
				<label for="">原物料名稱</label>
				<input type="text" name="name">
				<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			</form>
		</div>
		<div class="actions">
			<div class="ui primary button">新增</div>
			<div class="ui cancel button">取消</div>
		</div>
	</div>

	<div class="ui modal" id="newMaterialStockModal">
		<div class="ui inverted dimmer" >
			<div class="ui text loader">新增中...</div>
		</div>
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
					$("#newMaterialForm input[name='stock']").val("0");
					$("#newMaterialStockModal").modal('show');
				}
			});
		});

		$("#newMaterialForm").submit(function(e) {
			$("#newMaterialStockModal .dimmer").addClass("active");
			var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");
		    $.ajax({
		        url : formURL,
		        type: "POST",
		        data : postData,
		        success:function(data, textStatus, jqXHR) {
    				$("#newMaterialStockModal .dimmer").removeClass("active");
		        	$("#newMaterialStockModal").modal("hide");
		        	$("a[value='"+ data.id +"']").html('<i class="add icon"></i>' + data.stock);
		        },
		        error: function(jqXHR, textStatus, errorThrown) {
		        }
		    });
		    e.preventDefault(); //STOP default action
		});

		$("#newMaterialStockModal .actions .primary").click(function() {
			$("#newMaterialForm").submit();
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

		$(".deleteMaterialCategoryButton").click(function() {
			$.ajax({
				url: '/api/materials/type/' + $(this).attr("value"),
				success: function(result) {
					$("#deleteMaterialCategoryName").html(result.name);
					$("#deleteMaterialCategoryForm input[name='id']").val(result.id);
					$("#deleteMaterialCategoryModal").modal('show');
				}
			})
		});
		
		$("#deleteMaterialButton").click(function() {
			$("#deleteMaterialForm").submit();
		});

		$("#deleteMaterialCategoryButton").click(function() {
			$("#deleteMaterialCategoryForm").submit();
		});

		$("#newMaterialCategory").click(function() {
			$("#newCategoryModal").modal("show");
		});

		$("#newCategoryModal .primary .button").click(function() {
			$("#newCategoryForm").submit();
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