@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="aboutCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">關於我們</h1>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div class="row">
	        <div class="col s12 m6 hide-on-small-only">
	        	<div class="valign-wrapper right-align" style="height: 450px;">
					<h4 class="valign">2014 年 6月</h4>
				</div>
	        </div>
	        <div class="col s12 m6">
	          <div class="card">
	            <div class="card-image">
	              <img src="/images/about-envirnment.png">
	              <span class="card-title">開源河川遠端監控計畫</span>
	            </div>
	            <div class="card-content">
	              <p>開源河川遠端監控計畫</p>
	            </div>
	            <div class="card-action">
	              <a href="https://www.youtube.com/watch?v=CGWD918vnkI" target="_blank">影片</a>
	            </div>
	          </div>
	        </div>
	     </div>
		 <div class="row">
	        <div class="col s12 m6">
	          <div class="card">
	            <div class="card-image">
	              <img src="/images/coscup.jpg">
	              <span class="card-title">2014COSCUP開源人年會分享</span>
	            </div>
	            <div class="card-content">
	              <p>2014COSCUP開源人年會分享</p>
	            </div>
	            <div class="card-action">
	              <a href="https://www.youtube.com/watch?v=CGWD918vnkI" target="_blank">影片</a>
	            </div>
	          </div>
	        </div>
	        <div class="col s12 m6 hide-on-small-only">
	        	<div class="valign-wrapper center-align" style="height: 450px;">
					<h4 class="valign">2014 年 7月</h4>
				</div>
	        </div>
	      </div>
	</div>
	@include("footer")
@stop