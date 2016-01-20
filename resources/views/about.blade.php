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
		<div>
	    	<p class="center-align">
	    		Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，<br>大幅降低技術門檻，拉近天空與你我的距離。<br>
				透過全新的視角我們將重新認識這片土地。<br>
				並運用在不同層面上如水質監測、空氣品質監測等，<br>讓多旋翼飛行器融入生活之中。
				自由開放與分享是我們的精神，<br>更希望能持續推波助瀾。<br>如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！<br>	
		    </p>
		    <div class="row">
		    	<div class="col m3"><h2 style="font-size: 36px;">創立紀實</h2></div>
		    	<div class="col m6">
			    		<div class="card">
			        <div class="card-image">
			          <img src="/images/about-envirnment.png">
			          <span class="card-title">開源河川遠端監控計畫</span>
			        </div>
			        <div class="card-content">
			          <p>2014 年 6月</p>
			        </div>
			        <div class="card-action">
			          <a href="https://www.youtube.com/watch?v=CGWD918vnkI" target="_blank">影片</a>
			        </div>
		        </div>
		        <div class="card">
		            <div class="card-image">
		              <img src="/images/coscup.jpg">
		              <span class="card-title">2014COSCUP開源人年會分享</span>
		            </div>
		            <div class="card-content">
		              <p>2014 年 7月</p>
		            </div>
		            <div class="card-action">
		              <a href="https://www.youtube.com/watch?v=CGWD918vnkI" target="_blank">影片</a>
		            </div>
		          </div>
		    	</div>
		    </div>
		</div>
	</div>
	@include("footer")
@stop