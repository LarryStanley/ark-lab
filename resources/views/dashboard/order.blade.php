@extends("default")

@section("head")
@stop

@section("body")
	<h1 style="margin: 5px 5px 5px 5px"><img src="/images/mark.png" alt="" width="15%"></h1>
	<div class="row">
		@include("dashboard/collection")
		<div class="col m9">
			<a class="btn-floating waves-effect waves-light blue darken-3 modal-trigger" ng-click="order.newOrder()" href="#orderModal" ><i class="material-icons">add</i></a>
		</div>
	</div>

	<div id="orderModal" class="modal">
    <div class="modal-content">
      <h4>新增出貨</h4>
      <ul class="collection">
      	<li class="collection-item">流水號：
      		<span class="red-text text-darken-2">
      			[[order.orderNumber]]
      		</span>
      	</li>
      	<li class="collection-item">
      		出貨時間：
      		<input type="text" ng-model="order.shippedTime">
      	</li>
      </ul>
      <div>
      	種類：
  		<div class="row">
  			<div class="col m3">
  				<input type="radio" id="butterflyRadio" ng-model="order.type" value="butterfly" name="type">
				<label for="butterflyRadio">Butterfly</label>    
  			</div>
  			<div class="col m3">
  				<input type="radio" id="dragonflyRadio" ng-model="order.type" value="dragonfly" name="type">
				<label for="dragonflyRadio">Dragonfly</label>      	
  			</div>
  			<div class="col m3">
  				<input type="radio" id="crazybullRadio" ng-model="order.type" value="crazybull" name="type">
      			<label for="crazybullRadio">CrazyBull</label>
  			</div>
  			<div class="col m3">
  				<input type="radio" id="arknanoRadio" ng-model="order.type" value="arknano" name="type">
				<label for="arknanoRadio">Arknano</label>   
  			</div>
  		</div>
		<select ng-model="order.style" name="version" ng-options="style.styleName for style in order.data[order.type].styles track by style.id">
	    </select>
	    <label>選擇規格</label>
      </div>
    </div>
    <div class="modal-footer">
		<a href="#!" class="modal-action waves-effect waves-green btn-flat" ng-click="order.postNewOrder()">[[ order.postStat ]]</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">取消</a>
    </div>
  </div>

@stop
@section("javascript")
<script>
	$(document).ready(function() {
	   $('select').material_select();
	});

	angular.module('orderApp', [])
	  .controller('OrderController', function($scope, $http) {
	    var order = this;
	    	order.postStat = "新增";
	    	order.type = "butterfly";
			order.data = {
                butterfly: {
                    name: "butterfly",
                    styleName: "奶油蒼蠅 Butterfly",
                    slogan: "翻轉教育",
                    url: "/products/butterfly",
                    styles: [
                        {
                            styleName: "啟航版 - Arduino Nano 核心",
                            id: "Ark90-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano 升級核心",
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
                            styleName: "啟航版 - Arduino Nano 核心",
                            id: "Ark250-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano 升級核心",
                            id: "Ark250-B"
                        },
                        {
                            styleName: "續航版 - Ark Nano 升級核心、Ark 模組擴充包",
                            id: "Ark250-C"
                        },
                        {
                            styleName: "旗艦版 - Ark Nano升級核心、Ark模組擴充包、Wifi cam、250軸距轉90軸距機架",
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
                            styleName: "啟航版 - Arduino Nano核心",
                            id: "ArkTurbo-A"
                        },
                        {
                            styleName: "蛻變版 - Ark Nano升級核心",
                            id: "ArkTurbo-B"
                        },
                        {
                        	styleName: "續航版 - Ark Nano升級核心、Ark 模組擴充包",
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
                            styleName: "Ark Nano",
                            id: "ArkNano"
                        }
                    ]
                }
            };
	    order.newOrder = function() {
	    	order.orderNumber = Math.random().toString(36).substring(2, 10).toUpperCase();
	    	order.shippedTime = new Date().toLocaleString(); 
	    }

	    order.postNewOrder = function() {
	    	if (order.postStat != "新增中...") {
	    		order.postStat = "新增中...";
	    	}
	    }

	    $scope.$watch('order.type', function(value) {
			$('select').material_select('destroy');
			order.style = order.data[order.type].styles[0];
			$scope.$watch(order.style, function() {
				$scope.$evalAsync(function() {
    			    $('select').material_select();
			    });
			});
		});
	  })
	  .config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	});
</script>
@stop