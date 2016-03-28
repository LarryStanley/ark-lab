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
						10% off 立即選取</p>

					<form action="/products/preorder" method="POST">
						<div class="row">
							<div class="type">
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="butterflyRadio" ng-model="order.type" value="butterfly" name="type">
								    <label for="butterflyRadio">
										<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="70%">
								    	<div class="butterflyText">
								    		Butterfly
								    	</div>
								    </label>
								</div>
								<div class="col l3 m6 s6 center-align">
									<input type="radio" id="dragonflyRadio" ng-model="order.type" value="dragonfly" name="type" checked>
								    <label for="dragonflyRadio">
								    	<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="70%">
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
						<p class="center-align">
							[[ order.data[order.type].slogan ]]<br>
							<a style="font-size: 16px;" href="[[ order.data[order.type].url ]]" target="_blank">瞭解更多</a>
						</p>
						<div class="row details">
							<div class="input-field col l6 m6 s12">
						    	<select ng-model="order.currentStyle" name="version" ng-options="style.styleName for style in order.data[order.type].styles track by style.id">
							    </select>
							    <label>選擇規格</label>
						 	</div>
							<div class="input-field col l6 m6 s12">
						    	<select name="amount">
									<option value="1">1</option>
							     	<option value="2">2</option>
							     	<option value="3">3</option>
							     	<option value="4">4</option>					
			     			     	<option value="5">5</option>
							    </select>
							    <label>數量</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的大名" id="" name="name" type="text" class="validate" ng-model="order.name"  required="" aria-required="true">
								<label for="name">姓名</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的電子信箱" id="" name="email" type="email" id="emailInput" class="validate" ng-model="order.email"  required="" aria-required="true">
								<label for="email" >Email</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的聯絡電話" id="" name="phone" type="tel" id="phoneInput" class="validate"ng-model="order.phone"  required="" aria-required="true">
								<label for="phone">電話</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						    	<input placeholder="您的收件地址" id="" name="address" type="text" id="addressInput" class="validate" ng-model="order.address"  required="" aria-required="true">
								<label for="address">收件地址</label>
						 	</div>
						 	<div class="input-field col l6 m6 s12">
						 		<p>
							    	<input type="checkbox" id="flyer" class="filled-in" name="flyer"/ value="1">
									<label for="flyer">我是飛客，我會參與奶油蒼蠅五折舊換新，送愛到偏鄉計畫</label>
							    </p>
							    <p style="font-size:14px;">※持有奶油蒼蠅2.0的飛客，可參與舊換新<br>送愛心計畫 以五折取得最新奶油蒼蠅3.0 <br>(此辦法僅適用於購買奶油蒼蠅)</p>	
						 	</div>
						</div>
						<div class="center-align">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    slogan: "翻轉教育",
                    url: "/products/butterfly",
                    styles: [
                        {
                            styleName: "啟航版 - Arduino Nano 核心 NTD 2300 10%off",
                            id: "Ark90-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano 升級核心 NTD 3300 10%off",
                            id: "Ark90-B"
                        }
                    ]
                },
                dragonfly: {
                    name: "dragonfly",
                    styleName: "飛龍在天 Dragonfly",
                    slogan: "更大 更好 更快",
                    url: "/products/dragonfly",
                    styles: [
                        {
                            styleName: "啟航版 - Arduino Nano 核心 NTD 3000 10%off",
                            id: "Ark250-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano 升級核心 NTD 4000 10%off",
                            id: "Ark250-B"
                        },
                        {
                            styleName: "續航版 - Ark Nano 升級核心、Ark 模組擴充包 NTD 4300 10%off",
                            id: "Ark250-C"
                        },
                        {
                            styleName: "旗艦版 - Ark Nano升級核心、Ark模組擴充包、Wifi cam、250軸距轉90軸距機架 NTD 7000 10%off",
                            id: "Ark250-D"
                        }
                    ]
                },
                crazybull: {
                    name: "crazybull",
                    styleName: "狂暴蠻牛 Crazybull",
                    slogan: "不只是自走車",
                    url: "/products/crazybull",
                    styles: [
                        {
                            styleName: "啟航版 - Arduino Nano核心 NTD1700 10%off",
                            id: "ArkTurbo-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano升級核心 NTD2700 10%off",
                            id: "ArkTurbo-B"
                        },
                        {
                        	styleName: "續航版 - Ark Nano升級核心、Ark 模組擴充包 NTD3200 10%off",
                        	id: "ArkTurbo-C"
                        }
                    ]
                },
                arknano: {
                    name: "arknano",
                    styleName: "Ark Nano",
                    slogan: "慣性感測 · 藍芽遙控 · Arduino",
					url: "/products/arknano",
                    styles: [
                        {
                            styleName: "Ark Nano NTD1300 10%off",
                            id: "ArkNano"
                        }
                    ]
                }
            };

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