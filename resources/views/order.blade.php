@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="preOrder" ng-app="order" ng-controller="OrderController as order">
		<div class="intro valign-wrapper">
			<div class="container">
				<div class="valign"  style="width: 100%;">
					<h1 class="center-align">預購開始</h1>
					<hr style="width: 50%">
					<p class="center-align">
						90% off 立即選取</p>

					<form action="">
						<div class="row">
							<div class="type">
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="butterflyRadio" ng-model="order.type" value="butterfly" name="type">
								    <label for="butterflyRadio">
										<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="75%">
								    	<div class="butterflyText">
								    		Butterfly
								    	</div>
								    </label>
								</div>
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="dragonflyRadio" ng-model="order.type" value="dragonfly" name="type" checked>
								    <label for="dragonflyRadio">
								    	<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="75%">
								    	<div class="dragonflyText">
									    	Dragonfly
								    	</div>
								    </label>
								</div>
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="crazybullRadio" ng-model="order.type" value="crazybull" name="type">
								    <label for="crazybullRadio">
							    		<img src="http://i.imgur.com/zPiB3x1.png" alt="" width="75%">
								    	<div class="crazybullText">
									    	Crazybull	
								    	</div>
								    </label> 
								</div>
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="arknanoRadio" ng-model="order.type" value="arknano" name="type">
								    <label for="arknanoRadio">
								    	<img src="http://i.imgur.com/z0QHZG3.png" alt="" width="75%">
										<div class="arknanoText">
											Ark Nano		
										</div>
								    </label> 
								</div>
							</div>
						</div>
						<h3 class="center-align">[[ order.data[order.type].styleName ]]</h3>
						<div class="row details">
							<div class="input-field col l6 m6 s12">
						    	<select ng-model="order.currentStyle" ng-options="style.styleName for style in order.data[order.type].styles track by style.id">
							    </select>
							    <label>選擇規格</label>
						 	</div>
							<div class="input-field col l6 m6 s12">
						    	<select>
									<option value="1">1</option>
							     	<option value="2">2</option>
							    </select>
							    <label>數量</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的大名" id="" type="text" class="validate" ng-model="order.name"  required="" aria-required="true">
								<label for="name">姓名</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的電子信箱" id="" type="email" id="emailInput" class="validate" ng-model="order.email"  required="" aria-required="true">
								<label for="email" >Email</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的聯絡電話" id="" type="tel" id="phoneInput" class="validate"ng-model="order.phone"  required="" aria-required="true">
								<label for="phone">電話</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的收件地址" id="" type="text" id="addressInput" class="validate" ng-model="order.address"  required="" aria-required="true">
								<label for="address">收件地址</label>
						 	</div>
						</div>
						<div class="center-align">
							<input type="submit" class="btn red darken-2" value="確認預購">							
						</div>
					</form>
				</div>
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	<script>
	  $(document).ready(function() {
	    $('select').material_select();
	  });

	  angular.module('order', [])
		.controller('OrderController', function($scope, $http) {
			var order = this;

			order.data = {
				butterfly: {
					name: "butterfly",
					styleName: "奶油蒼蠅 Butterfly",
					styles: [
						{
							styleName: "普通版-Arduino Nano核心",
							id: "1"
						},
						{
							styleName: "蛻變版-Ark Nano升級核心",
							id: "2"

						}
					]
				},
				dragonfly: {
					name: "dragonfly",
					styleName: "飛龍在天 Dragonfly",
					styles: [
						{
							styleName: "普通版-Arduino Nano核心",
							id: "1"
						},
						{
							styleName: "蛻變版-Ark Nano升級核心",
							id: "2"
						},
						{
							styleName: "升級版-Ark Nano升級核心、Ark模組擴充包",
							id: "3"

						},
						{
							styleName: "旗艦版-Ark Nano升級核心、Ark模組擴充包、Wifi cam、250軸距轉90軸距機架",
							id: "4"
						}
					]
				},
				crazybull: {
					name: "crazybull",
					styleName: "狂暴蠻牛 Crazybull",
					styles: [
						{
							styleName: "普通版-Arduino Nano核心",
							id:"1"
						},
						{
							styleName: "蛻變版-Ark Nano升級核心、Ark模工組擴充包",
							id:"2"
						}
					]
				},
				arknano: {
					name: "arknano",
					styleName: "Ark Nano",
					styles: [
						{
							styleName: "Ark Nano",
							id:"1"
						},
						{
							styleName: "Ark Nano Pro",
							id:"2"
						},
						{
							styleName: "ArkNano Professional",
							id:"3"
						}
					]

				}
			}

			order.type = "butterfly";
			order.currentStyle = order.data[order.type].styles[0];

			$scope.$watch('order.type', function(value) {
				$('select').material_select('destroy');
				order.currentStyle = order.data[order.type].styles[0];
				$scope.$watch(order.currentStyle, function() {
					$scope.$evalAsync(function() {
	    			    $('select').material_select();
				    });
				});
			});

		}).config(function($interpolateProvider){
			$interpolateProvider.startSymbol('[[').endSymbol(']]');
		});
	  </script>
	@stop
@stop