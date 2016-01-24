@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/unslider.css">
	<link rel="stylesheet" href="/css/unslider-dots.css">
@stop

@section("body")
	<div class="navbar-fixed">
		<nav class="red darken-2">
			<div class="nav-wrapper">
				<div class="brand-logo fadeInFast" id="mark">
					<a href="#top" id="topButton">
						<img src="/images/mark.png" width="150px" alt="" style="margin-top: 5px;">		
					</a>
				</div>
				<a href="#" data-activates="mobile-bar" class="button-collapse"><i class="ion-navicon" style="margin-left: 5px;"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
					<li><a href="documents" name="documents" id="documentsButton">技術討論</a></li>
				</ul>
				<ul class="side-nav" id="mobile-bar">
			       	<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
					<li><a href="documents" name="documents" id="documentsButton">技術討論</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<div class="slider">
		<ul style="height: 100% !important; position: relative;">
			@foreach($sliders as $slider)
			<li style="background: url(/images/{{ $slider->image }}) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; ">
				<div class="center">
					<h2>{{ $slider->title }}</h2>
					<hr>
					<p style="font-size: 24px">{!! nl2br(e($slider->illustration)) !!}</p>
					@if($slider->link)
						<a href="{{ $slider->link }}" class="waves-effect waves-light btn cyan darken-2">閱讀更多</a>
					@endif
				</div>
			</li>
			@endforeach
		</ul>
 			@if(Auth::check())
				<button data-target='editSliderModal' class='editButton waves-effect waves-light btn modal-trigger cyan darken-2'>編輯橫幅</button>
			@endif
	</div>
	<div class="block">
		@foreach($blocks as $block)
		<a href="{{ $block->link }}">
			<div class="block-content">
				<div class="title">{{ $block->title }}</div>
				<img src="/images/{{ $block->image }}" alt="">
				<div class="illustration">{{ $block->illustration }}</div>
			</div>
		</a>
		@endforeach
		@if(Auth::check())
			<button data-target='editBlockModal' class='editButton waves-effect waves-light btn modal-trigger red darken-2'>編輯區塊</button>
		@endif
	</div>
	
	@if(Auth::check())
	<div ng-app="indexApp" ng-controller="IndexController as index">
		<div id="editSliderModal" class="modal modal-fixed-footer">
		    <div class="modal-content">
		      <h4>編輯橫幅</h4>
		      <hr>	
		      <table class="highlight">
		      	<thead>
		      		<tr>
		      			<td>順序</td>
		      			<td>背景圖片</td>
		      			<td>標題</td>
		      			<td>說明文字</td>
		      			<td>閱讀更多連結</td>
		      		</tr>
		      	</thead>
		      	<tbody>
		      		@foreach($sliders as $slider)
		      			<tr>
		      				<td>{{ $slider->order }}</td>
		      				<td><img src="/images/{{ $slider->image }}" alt="" style="height: 100px"></td>
		      				<td>{{ $slider->title }}</td>
		      				<td>{!! nl2br(e($slider->illustration)) !!}</td>
		      				<td><a href="{{ $slider->link }}" target="_blank">{{ $slider->link }}</a></td>
		      			</tr>
		      		@endforeach
		      	</tbody>
		      </table>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action waves-effect waves-green btn-flat">確定</a>
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">取消</a>
		    </div>
	  	</div>
		<div id="editBlockModal" class="modal modal-fixed-footer" style="width: 90%;">
		    <div class="modal-content">
		      <h4>編輯區塊</h4>
		      <hr>	
		      <table class="highlight">
		      	<thead>
		      		<tr>
		      			<td>順序</td>
		      			<td>背景圖片</td>
		      			<td>標題</td>
		      			<td>說明文字</td>
		      			<td>連結</td>
		      			<td>刪除</td>
		      		</tr>
		      	</thead>
		      	<tbody>
	      			<tr ng-repeat="(key,block) in index.blocks">
	      				<td>[[ block.order ]]</td>
	      				<td><img src="/images/[[ block.image ]]" alt="" style="height: 100px"></td>
	      				<td>
							<input placeholder="標題" type="text" class="validate" ng-model="block.title" style="width:100px;">
	      				</td>
	      				<td>
				         	<textarea ng-model="block.illustration" class="materialize-textarea"></textarea>
	      				</td>
	      				<td>
							<input placeholder="連結" type="text" class="validate" ng-model="block.link" style="width:100px;"><br>
	      					<a href="[[ block.link ]]" target="_blank">預覽連結</a>
	      				</td>
	      				<td>
	      					<button class="btn-floating waves-effect waves-light red darken-2" ng-click="index.deleteBlock(key)">
		      					<i class="ion-ios-trash-outline"></i>
		      				</button>
		      			</td>
	      			</tr>
		      	</tbody>
		      </table>
		      <h5>新增區塊</h5>
  		      <hr>
		      <form ng-submit="index.newBlock()" enctype="multipart/form-data" id="blockForm">
		      	<div class="row">
		      		<div class="col m4 s12 input-field">
						<input name="title" id="blockNewTitle" placeholder="標題" type="text" class="validate" ng-model="index.newTitle" >
		      		</div>
		      		<div class="col m4 s12 input-field">
						<input placeholder="說明文字" type="text" class="validate" ng-model="index.newIllustration" ><br>
		      		</div>
		      		<div class="col m4 s12 input-field">
						<input placeholder="連結" type="text" class="validate" ng-model="index.newLink"><br>
		      		</div>
		      		<h6>背景圖片</h6>
		      		<div class="col m4 s12 input-field">
		      			<input id="newBlockImage" type="file" name="photo">
		      		</div>
				    <button class="btn red darken-2 waves-effect" type="submit" style="float: right" >新增</button>
		      	</div>
		      </form>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action waves-effect waves-green btn-flat" ng-click="index.saveBlock()" onclick="Materialize.toast('儲存中', 4000)">確定</a>
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" ng-click="index.cancelBlock()">取消</a>
		    </div>
	  </div>
	</div>
  	@endif
          
@stop

@section("javascript")
	<script src="/js/unslider-min.js"></script>
	<script src="/js/index.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.slider').unslider({
				nav: false,
				arrows: {
					//  Unslider default behaviour
					prev: '<a class="unslider-arrow prev"><i class="ion-ios-arrow-back"></i></a>',
					next: '<a class="unslider-arrow next"><i class="ion-ios-arrow-forward"></i></a>'
				}

			});
		})
	</script>
@stop