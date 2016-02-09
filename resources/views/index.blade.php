@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/unslider.css">
	<link rel="stylesheet" href="/css/unslider-dots.css">
@stop

@section("body")
	<div class="navbar-fixed" style="position: absolute">
		<nav class="transparent">
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
					<li><a href="plans" name="plans" id="plansButton">方舟計畫</a></li>
				</ul>
				<ul class="side-nav" id="mobile-bar">
			       	<li><a href="about" name="about" id="aboutButton">關於我們</a></li>
					<li><a href="education" name="education" id="educationButton">教育推廣</a></li>
					<li><a href="products" name="products" id="productsButton">產品介紹</a></li>
					<li><a href="flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
					<li><a href="plans" name="plans" id="planButton">方舟計畫</a></li>
			    </ul>
			</div>
		</nav>
	</div>
	<div class="slider">
		<ul style="height: 100% !important; position: relative;">
			@foreach($sliders as $slider)
			<li style="background: url({{ $slider->image }}) no-repeat center center fixed; background-size: cover; height: 100% !important; position: relative; ">
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
				<button data-target='editBlockModal' class='editButton waves-effect waves-light btn modal-trigger cyan darken-2' ng-click="index.showSliderEditor()">編輯橫幅</button>
			@endif
	</div>
	<div class="block">
		@foreach($blocks as $block)
		<a href="{{ $block->link }}">
			<div class="block-content">
				<div class="title">{{ $block->title }}</div>
				<img src="{{ $block->image }}" alt="">
				<div class="illustration">{{ $block->illustration }}</div>
			</div>
		</a>
		@endforeach
		@if(Auth::check())
			<button data-target='editBlockModal' class='editButton waves-effect waves-light btn modal-trigger red darken-2' ng-click="index.showBlockEditor()">編輯區塊</button>
		@endif
	</div>
	<footer class="page-footer blue-grey darken-1" style="margin-top: 0; position: absolute; top: 100%; width: 100%">
	  <div class="container">
	      <div class="row">
	        <div class="col l6 s12">
	          <h5 class="white-text">Ark Lab 多旋翼工坊</h5>
	          <p class="grey-text text-lighten-4">
	            <a href="/about#contactus" class="cyan-text">聯絡我們</a>
	          </p>
	        </div>
	        <div class="col l4 offset-l2 s12">
	          <h5 class="white-text">相關連結</h5>
	          <ul>
	            <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/ArkLab.OpenSkyler">Facebook</a></li>
	            <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/ArkLab.OpenSkyler">Google+</a></li>
	          </ul>
	        </div>
	      </div>
	  </div>
	  <div class="footer-copyright">
	    <div class="container white-text">
	       Ark Lab © 2015 Copyright
	    </div>
	  </div>
	</footer>
	
	@if(Auth::check())
		<div id="editBlockModal" class="modal modal-fixed-footer" style="width: 90%;">
		    <div class="modal-content">
		      <h4>編輯區塊</h4>
		      <hr>	
		      <table class="highlight beSorted">
		      	<thead>
		      		<tr>
		      			<td>標題</td>
		      			<td>說明文字</td>
		      			<td>背景圖片</td>
		      			<td>連結</td>
		      			<td>刪除</td>
		      		</tr>
		      	</thead>
		      	<tbody ui-sortable ng-model="index.blocks">
	      			<tr ng-repeat="(key,block) in index.blocks" >
	      				<td>
							<input placeholder="標題" type="text" class="validate" ng-model="block.title" style="width:100px;">
	      				</td>
	      				<td>
				         	<textarea row="2" ng-model="block.illustration" class="materialize-textarea"></textarea>
	      				</td>
	      				<td>
	      					<img src="[[ block.image ]]" alt="" style="height: 100px">
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
		      <form ng-submit="index.newBlock()" method="POST" enctype="multipart/form-data" id="blockForm">
		      	<div class="row">
		      		<div class="col m4 s12 input-field">
						<input name="title" id="blockNewTitle" placeholder="標題" type="text" class="validate" ng-model="index.newTitle" >
		      		</div>
		      		<div class="col m4 s12 input-field">
						<textarea row="2" placeholder="說明文字" class="materialize-textarea" type="text" class="validate" ng-model="index.newIllustration" ></textarea>
		      		</div>
		      		<div class="col m4 s12 input-field">
						<input placeholder="連結" type="text" class="validate" ng-model="index.newLink"><br>
		      		</div>
		      		<div class="col m8 s12 input-field">
			      		<h6>背景圖片</h6>
		      			<div class="row">
		      				<div class="col m4 s12">
			      				<button class="btn waves-effect cyan darken-2" type="file" ngf-select="uploadFiles($file, $invalidFiles)" accept="image/*" ngf-max-height="6000" ngf-max-size="10MB">
							    	選擇檔案
							    </button>
		      				</div>
		      				<div class="col m4 s12">
		      					<div style="font:smaller; display: inline-block;">[[f.name]] [[errFile.name]] [[errFile.$error]] [[errFile.$errorParam]]
							    	<div class="progress" ng-show="f.progress >= 0">
										<div class="determinate" style="width:[[f.progress]]%"></div>
							        </div>
							  	</div>     
		      				</div>
							[[errorMsg]]
							<div class="col m12 s12">
								<div class="preview fadeIn">
									<div class="preloader-wrapper small active" id="previewLoading" style="display:none">
									    <div class="spinner-layer spinner-green-only">
									    	<div class="circle-clipper left">
										        <div class="circle"></div>
										    </div>
										    <div class="gap-patch">
										        <div class="circle"></div>
									      	</div>
									      	<div class="circle-clipper right">
									        	<div class="circle"></div>
									      	</div>
									    </div>
									  </div>
									<img src="[[ index.imageName ]]" alt="" style="height: 100px; display: none">
								</div>
							</div>
		      			</div>
		      		</div>
	      		    {!! csrf_field() !!}
				    <button class="btn red darken-2 waves-effect" type="submit" style="float: right" >新增</button>
		      	</div>
		      </form>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action waves-effect waves-green btn-flat" ng-click="index.saveBlock()" onclick="Materialize.toast('儲存中', 4000)">確定</a>
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" ng-click="index.cancelBlock()">取消</a>
		    </div>
	  </div>
  	@endif
          
@stop

@section("javascript")
	<script src="/js/unslider-min.js"></script>
	<script src="/js/ng-file-upload.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
	<script src="/js/sortable.js"></script>
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