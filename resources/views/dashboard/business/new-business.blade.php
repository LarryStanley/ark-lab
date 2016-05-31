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
					<form action="" class="ui form">
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
			type: 'date'
		});
	 });
	</script>
@stop