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
					<div class="col m12 s12">
						<h2 class="valign fadeIn blue-grey-text text-lighten-5">聯絡我們</h2>
						<hr>
						<h3>教育發展</h3>
						<p>
							若欲洽談相關課程、工作坊、講座相關事宜，歡迎來信<br>
							<a href="mailto:remonmarlboro@gmail.com">remonmarlboro@gmail.com</a>
						</p>
						<h3>媒體關係</h3>
						<p>
							若欲與ArkLab 媒體聯絡人聯繫，歡迎來信<br>
							<a href="mailto:yul156733@gmail.com">yul156733@gmail.com</a>
						</p>
						<h3>商業合作</h3>
						<p>
			      			若欲洽詢市場開發、行銷活動、廣告合作、參關訪問等，歡迎來信 <br>
			      			<a href="mailto:remonmarlboro@gmail.com">remonmarlboro@gmail.com</a>
			      		</p>	
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