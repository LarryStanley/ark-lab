@extends("defaultSemantic")

@section("head")
@stop

@section("body")
	<div class="ui container">
		@include("dashboard/menu")
		<div class="ui grid">
			<div class="four wide column">
				@include("dashboard/business/menu")
			</div>
			<div class="twelve wide stretched column">
				<div class="ui segment">
					<form action="/dashboard/business/new-business" method="POST" class="ui form">
						<div class="two fields">
							<div class="field">
								<label>訂單編號</label>
								<input type="text">
							</div>
							<div class="field">
								<label>訂單日期</label>
								<div class="ui calendar date">
								    <div class="ui input left icon">
								    	<i class="calendar icon"></i>
								    	<input type="text" placeholder="訂單日期">
								    </div>
								</div>
							</div>
						</div>
						<div class="two fields">
							<div class="field">
								<label>採購類型</label>
								<select class="ui dropdown" name="" id="">
									<option value="non-school">非學校大量採購</option>
									<option value="school">學校大量採購</option>
								</select>
							</div>
							<div class="field">
								<label>採購單位</label>
								<select class="ui dropdown" name="" id="">
									@foreach($sell_units as $unit)
									<option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="two fields">
							<div class="field">
								<label for="">統一編號</label>
								<input type="number" placeholder="統一編號">
							</div>
							<div class="field">
								<label>發票寄出時間</label>
								<div class="ui calendar date">
								    <div class="ui input left icon">
								    	<i class="calendar icon"></i>
								    	<input type="text" placeholder="發票寄出日期">
								    </div>
								</div>
							</div>
						</div>
						<div class="two fields">
							<div class="field">
								<label for="">付款方式</label>
								<input type="text" placeholder="付款方式">
							</div>
							<div class="field">
								<label>交貨日期</label>
								<div class="ui calendar date">
								    <div class="ui input left icon">
								    	<i class="calendar icon"></i>
								    	<input type="text" placeholder="交貨日期">
								    </div>
								</div>
							</div>
						</div>
						<div class="two fields">
							<div class="field">
								<label>付款日</label>
								<div class="ui calendar date">
								    <div class="ui input left icon">
								    	<i class="calendar icon"></i>
								    	<input type="text" placeholder="付款日">
								    </div>
								</div>
							</div>
						</div>
						<h4 class="ui dividing header">課程需求</h4>
						<div class="two fields">
							<div class="field">
								<label>課程日期</label>
								<div class="ui calendar date">
								    <div class="ui input left icon">
								    	<i class="calendar icon"></i>
								    	<input type="text" placeholder="課程日期">
								    </div>
								</div>							
							</div>
							<div class="field">
								<label for="">課程編號</label>
								<input type="text" placeholder="課程編號">
							</div>
						</div>
						<div class="field">
							<label>課程報價</label>
							<input type="text" placeholder="報價金額">
						</div>
						<div class="inline field">
						    <div class="ui checkbox">
						    	<input type="checkbox" tabindex="0" class="hidden">
						    	<label>已給</label>
						    </div>
						</div>
						<div class="field">
							<label>課程備註</label>
						    <textarea rows="2" placeholder="課程備註"></textarea>
						</div>	
						<div class="field">
							<label>講師安排</label>
							<input type="text" placeholder="講師安排">
						</div>
						<h4 class="ui dividing header">訂單內容</h4>
						<div class="ui segment">
							<div class="ui dividing">清單</div>
							<div id="productResults" class="ui relaxed divided list">
							</div>						
						</div>
						<div class="fields">
							<div class="ten wide field">
								<label for="">商品內容</label>
								<select name="" id="productType" class="ui dropdown">
									@foreach($products as $product)
										<option value="{{ $product->id }}">{{ $product->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="four wide field">
								<label for="">數量</label>
								<div class="ui action input">
									<input type="number" placeholder="數量" value="1" id="productAmount">
									<button class="ui button" id="addProduct">
										<i class="icon add"></i>
									</button>
								</div>
							</div>
						</div>
						<input type="submit" class="ui button primary" value="新增">
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section("javascript")
	<script>
	 $(document).ready(function() {

		$("#business").addClass("active");
		$("#newBusiness").addClass("active");
		$('select.dropdown').dropdown();
		$('.ui.checkbox').checkbox();

		$(".date").calendar({
			type: 'date',
			monthFirst: false,
			formatter: {
			date: function (date, settings) {
				if (!date) return '';
			  		var day = date.getDate();
			  		var month = date.getMonth() + 1;
					var year = date.getFullYear();
					return year + '-' + month + '-' + day;
				}
			}
		});

		var productCount = 0;
		var productResults = [];

		$("#addProduct").click(function() {
			productResults.push({
				id: productCount,
				productId: $("#productType").val(),
				amount: $("#productAmount").val()
			});

			$("#productResults").append(
				'<div class="item" id="'+ productCount +'Item">\
					<div class="content">\
						<div class="header">'+ $("#productType option:selected").text() +'</div>\
						<div class="description"> <div class="ui label large">'+ $("#productAmount").val() +'個   <i class="delete icon deleteProduct" id="' + productCount + 'Label" value="' + productCount + '"></i></div><br />\
						</div>\
					</div>\
				</div>');

			$("#" + productCount + "Label").click(function() {
				$("#" + $(this).attr("value") + "Item").remove();
				var id = parseInt($(this).attr("value"));

				$.each(productResults, function(key, value) {
					if (value.id == id){
						productResults.splice(key, 1);
						return false;
					}
				});

				return false;
			});

			productCount++;
			return false;
		});
	 });
	</script>
@stop