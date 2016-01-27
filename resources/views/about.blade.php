@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="aboutCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">關於我們</h1>
			<p class="center-align">
	    		Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，<br>大幅降低技術門檻，拉近天空與你我的距離。<br>
				透過全新的視角我們將重新認識這片土地。<br>
				並運用在不同層面上如水質監測、空氣品質監測等，<br>讓多旋翼飛行器融入生活之中。
				自由開放與分享是我們的精神，<br>更希望能持續推波助瀾。<br>如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！<br>	
		    </p>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div>
		    <h2 style="font-size: 36px;">創立紀實</h2>
		    <hr>
		    <div class="row fadeIn" id="aboutLogs" ng-repeat="(index,log) in about.createdLogs">
		    	<div class="col m3 s12">
		    		<p style="font-size: 18px;"><i class="ion-ios-circle-filled"></i> [[ log.created_time ]]</p>
		    	</div>
		    	<div class="col m8 s12">
		    		<div class="card blue-grey darken">
		    		 	<div class="card-image" ng-if="log.image">
							<img src="[[ log.image ]]">
							<span class="card-title">[[ log.title ]]</span>
			            </div>
			            <div class="card-content white-text">
		             		<span class="card-title" ng-if="!log.image">[[ log.title ]]</span>
				            <p ng-bind-html="log.illustration | nl2br"></p>
			            </div>
			            <div class="card-action" ng-if="log.link">
			              	<a href="[[ log.link ]]" target="_blank">相關連結</a>
			            </div>
			            @if(Auth::check())
              	    		<button style="margin: 0px 5px 5px 5px;" class="btn waves-effect cyan darken-2" ng-click="about.edit(log.id, index)">編輯</button>
              	    		<button style="margin: 0px 5px 5px 5px;" class="btn waves-effect red darken-2" ng-click="about.delete(log.id, index)">刪除</button>
              	    	@endif
			        </div>
		    	</div>
		    </div>
	    	@if(Auth::check())
	    		<div class="center-align" style="margin-bottom: 10px;">
	    			<button class="btn-floating btn waves-effect waves-light modal-trigger cyan darken-2" ng-click="about.addNewLog()" data-target="newLogModal">
		    		  	<i class="material-icons">add</i>
	    		  	</button>
	    		</div>
	    		<div id="newLogModal" class="modal  modal-fixed-footer">
				    <div class="modal-content">
				    	<h4>新增創立紀實</h4>
						<form action="/api/about_us/new_log" method="POST" ng-submit="about.saveLog()">
					      	<div class="row">
					      		<div class="col m12 s12 input-field">
									<input name="title" placeholder="標題" type="text" class="validate" ng-model="about.newTitle" >
					      		</div><br>
					      		<div class="col m12 s12 input-field">
									<textarea row="2" placeholder="說明文字" class="materialize-textarea" type="text" class="validate" ng-model="about.newIllustration" ></textarea>
					      		</div><br>
					      		<div class="col m12 s12 input-field">
									<input placeholder="連結" type="text" class="validate" ng-model="about.newLink"><br>
					      		</div>
					      		<h5>時間</h5>
					      		<div class="input-field col m4 s12">
									<select ng-options="option.id as option.value for option in year track by option.value" ng-model="about.newYear" ng-change="update()">
								    	<option value="" disabled>選擇年份</option>
								    </select>
								    <label>年</label>
								</div>
								<div class="input-field col m4 s12">
									<select ng-model="about.newMonth" ng-options="option.id as option.value for option in month track by option.id">
								    	<option value="" disabled>選擇月份</option>
								    </select>
								    <label>月</label>
								</div>
								<div class="input-field col m4 s12">
									<select ng-model="about.newDay" ng-options="option.id as option.value for option in day track by option.id">
								    	<option value="" disabled>選擇日期</option>
								    </select>
								    <label>日</label>
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
												<img src="[[ about.imageName ]]" alt="" style="height: 100px; display: none">
											</div>
										</div>
					      			</div>
					      		</div>
				      		    {!! csrf_field() !!}
					      	</div>
						</form>
				    </div>
				    <div class="modal-footer">
  				    	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" ng-click="about.saveNewLog()">新增</a>
				    	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">取消</a>
				    </div>
				  </div>
			@endif
		</div>
	</div>
	@include("footer")
	
	@section("javascript")
		<script src="/js/ng-file-upload.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
		<script src="/js/about.js"></script>
		<script>
			$(document).ready(function() {
			    $('select').material_select();
			});
		</script>
	@stop

@stop