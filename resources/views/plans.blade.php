@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="plansCover">
		<div class="valign-wrapper" style="width:100%; height: 100%;">
			<div class="container">
				<div class="row white-text valign-wrapper" style="overflow: hidden">
					<div class="col m5 s12" style="margin-bottom: -99999px; padding-bottom: 99999px;">
						<h1 class="valign fadeIn">方舟計畫</h1>
					</div>
					<div class="col m7 s12 right-align" style="margin-bottom: -99999px; padding-bottom: 99999px;">
						<div class="fadeIn">
							<a href="#lass" class="white-text">
								<h4>Arklab/LASS 全台天空感測計畫</h4>		
								<span style="font-size: 30px;">
									30%
								</span>	
							</a>							
							<div class="progress">
						    	<div class="determinate" style="width: 30%"></div>
						  	</div>					
						</div>
						<div class="fadeIn">
							<h4>雙塔計畫</h4>
							<span style="font-size: 30px;">0%</span>
							<div class="progress">
						    	<div class="determinate" style="width: 0%"></div>
						  	</div>	
						</div>
						<div class="fadeIn">
							<h4>水上腳踏車</h4>
							<span style="font-size: 30px;">0%</span>
							<div class="progress">
						    	<div class="determinate" style="width: 0%"></div>
						  	</div>						
						</div>
						<div class="fadeIn">
							<h4>遠端自動化水質監控無人機系統</h4>
							<span style="font-size: 30px;">100%</span>
							<div class="progress">
						    	<div class="determinate" style="width: 100%"></div>
						  	</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a name="lass"></a>	
	<div id="lassCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container white-text">
				<div class="valign center-align">
					<h2>Arklab/LASS 全台天空感測計畫</h2>
				</div>
				<div class="row">
					<div class="col m7 s12">
						<p>曾經，我們用飛行器守護河川。<br>
						透過飛行器檢採水體，運用軟體與網路整合，
						即時回傳汙染情形，揪出不肖廠商<br>
						現在，我們要監測每一分每一秒我們都在呼吸的空氣。<br>
						在天空中檢查大氣中的氣體汙染，<br>並利用網路集結眾人之力。
						在此，我們誠摯地邀請各方飛手，<br>
						一起在不同的地點起飛，守護這片蒼穹之下的人們</p>
					</div>
					<div class="col m5 s12">
						<h5>完成進度</h5>
						<span style="font-size: 30px;">
							30%
						</span>	
						<div class="progress">
					    	<div class="determinate" style="width: 30%"></div>
					  	</div>	
					</div>
				</div>
				<div class="center-align">
					<p>監控環境缺你不可</p>
					<a href="https://lass.hackpad.com/ArklabLASS--zUsfalJ1ijf" class="btn waves-effect red darken-2" target="_blank">
						馬上參與
					</a>					
				</div>	
			</div>
		</div>
	</div>
	@include("footer")
	
	@section("javascript")
		
		<script>
			$(document).ready(function() {
			    
			});
		</script>
	@stop

@stop