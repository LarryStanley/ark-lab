@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="eduCover" class="valign-wrapper">
		<div class="page-mask center-align" style="width:100%;">
			<h1 class="valign">教育推廣</h1>
		</div>
	</div>
	<div class="container" style="maring-top: 20px;">
		<div>
	    	<p class="center-align">
	    		以飛行為主題，透過有趣的多旋翼推廣Maker教育。<br>從硬體組裝到軟體編譯，我們從零開始，按部就班帶你打造自己的多旋翼。<br>
				透過多旋翼我們希望你能享受的翱翔天際的愉快拉近天空的距離。<br>
				更希望能夠從自造多旋翼開始，讓更多人享受當Maker的樂趣。<br>
		    </p>
		    <hr>
		    <div class="row center-align">
		    	<div class="col m3 s6">
		    		<a href="" class="waves-effect waves-light red-text text-darken">
			    		<i class="ion-ios-calendar" style="font-size: 64px;"></i>
			    		<div style="font-size: 24px;">
			    			活動行事曆
			    		</div>
		    		</a>
		    	</div>
		    	<div class="col m3 s6">
		    		<a href="" class="waves-effect waves-light red-text text-darken">
			    		<i class="ion-ios-book-outline" style="font-size: 64px;"></i>
			    		<div style="font-size: 24px;">
			    			課程介紹
			    		</div>
		    		</a>
		    	</div>
		    	<div class="col m3 s6">
		    		<a href="" class="waves-effect waves-light blue-grey-text text-darken-2">
			    		<i class="ion-camera" style="font-size: 64px;"></i>
			    		<div style="font-size: 24px;">
			    			活動實記
			    		</div>
		    		</a>
		    	</div>
		    	<div class="col m3 s6">
		    		<a href="" class="waves-effect waves-light blue-grey-text text-darken-2">
			    		<i class="ion-hammer" style="font-size: 64px;"></i>
			    		<div style="font-size: 24px;">
			    			教具介紹
			    		</div>
		    		</a>
		    	</div>
		    </div>
		</div>
	</div>
	@include("footer")
@stop