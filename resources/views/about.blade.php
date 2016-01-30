@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="aboutCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="row">
					<div class="col m12  blue-grey-text text-lighten-5" >
						<h1 class="valign fadeIn" style="display: none" id="aboutTitle">關於我們</h1>
						<div id="aboutContent" style="font-size: 18px; display: none" class="fadeIn">
							<p class="hide-on-small-only">
					    		Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，<br>大幅降低技術門檻，拉近天空與你我的距離。<br>
								透過全新的視角我們將重新認識這片土地。<br>
								並運用在不同層面上如水質監測、空氣品質監測等，<br>讓多旋翼飛行器融入生活之中。<br>
								自由開放與分享是我們的精神，<br>更希望能持續推波助瀾。<br>如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！<br>
						    </p>
						    <p class="hide-on-med-and-up">
					    		Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，大幅降低技術門檻，拉近天空與你我的距離。
								透過全新的視角我們將重新認識這片土地。
								並運用在不同層面上如水質監測、空氣品質監測等，讓多旋翼飛行器融入生活之中。
								自由開放與分享是我們的精神，更希望能持續推波助瀾。如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！
						    </p>	
						    <div id="f" style="font-size: 14px;">
								<a class="btn waves-effect red darken-2 fadeIn" onclick="showContact()" href="#contactus">聯絡我們</a>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a name="contactus"></a>	
	<div id="contacts">
		<div class="valign-wrapper" style="width:100%; height: 100%;">
			<div class="container">
				<div class="row">
					<div class="col m3">.</div>
					<div class="col m6 s12" >
						<h2 class="valign center-align fadeIn blue-grey-text text-lighten-5">聯絡我們</h2>
						<ul class="collapsible popout" data-collapsible="accordion" style="width: 100%">
						    <li>
						    	<div class="collapsible-header"><i class="ion-social-facebook"></i>社群</div>
								<div class="collapsible-body">
									<p>
										<a href="https://www.facebook.com/ArkLab.OpenSkyler" target="_blank">Ark Lab 粉絲專頁</a> <br>
										<a href="https://www.facebook.com/groups/1455968237985691/" target="_blank">Drone Maker 多旋翼開發討論區</a>
									</p>
								</div>
						    </li>
						    <li>
						    	<div class="collapsible-header"><i class="ion-ios-cart"></i>購買</div>
								<div class="collapsible-body">
									<p>
										<a href="http://goods.ruten.com.tw/item/show?21502259735494" target="_blank">露天拍賣 奶油蒼蠅</a> <br>
									</p>
								</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="ion-person-stalker"></i>合作</div>
						      	<div class="collapsible-body">
						      		<p>
						      			各種合作請來信 <br>
						      			contact@arklab.tw
						      		</p>
						      	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="ion-videocamera"></i>媒體</div>
						      	<div class="collapsible-body">
						      		<p>媒體合作</p>
						      	</div>
						    </li>
						</ul>
					</div>
				</div>
			</div>
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
			    setTimeout(function(){ 
			    	$("#aboutTitle").show();
				    $("#aboutContent").show();
			    }, 50);
			});

			function showContact() {
				$('html, body').animate({
			        scrollTop: $("#contacts").offset().top
			    }, 1500);
			    event.preventDefault();
			    return false;
			}
		</script>
	@stop

@stop