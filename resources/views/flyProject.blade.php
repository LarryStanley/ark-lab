@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
@stop

@section("body")
	@include("nav")
	<div id="flyProjectCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="row">
					<div class="col m12  center-align" >
						<h1 class="valign fadeIn">飛行業務</h1>
						<p class="fadeIn">
							飛行器讓我們以嶄新的視角，探索這片土地。<br class="hide-on-small-only">	
							透過安裝不同儀器，飛行器能有許多變化。<br class="hide-on-small-only">
							裝上鏡頭，我們能夠紀錄世界的美麗。<br class="hide-on-small-only">
							搭配感測器，飛行器替我們監測環境，守護家園。<br class="hide-on-small-only">
							使用蜂鳴器，嚇跑偷吃稻麥的鳥兒。<br class="hide-on-small-only">
							你有什麼新奇的主意嗎？我們一起來發掘飛行器的新用途。<br class="hide-on-small-only">
						</p>
						<hr class="hide-on-small-only" style="margin-bottom: 20px;">
					</div>
					<div class="col m4 s12 center-align hide-on-small-only">
						<a class="btn waves-effect light-blue darken-2" href="#envirnment" onclick="showContent('envirnment')">環境監控</a>
					</div>
					<div class="col m4 s12 center-align hide-on-small-only">
						<a class="btn waves-effect cyan darken-2" href="#aerial" onclick="showContent('aerial')">攝影紀錄</a>
					</div>
					<div class="col m4 s12 center-align hide-on-small-only">
						<a class="btn waves-effect teal darken-2" href="#show" onclick="showContent('flyShow')">空中表演</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a name="envirnment"></a>
	<div id="envirnmentCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="valign fadeIn center-align">
					<h2>環境監控</h2>
					<p>守護咱的故鄉</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="envirnmentContent">
		<p class="center-align">
			為了避免不肖業者讓汙染悄悄滲入你我的生活之中，讓我們朝天空出發吧！<br>
			飛翔於氣流間，在最高點用科學的眼睛檢測我們身邊的每個自然元素<br>
			每滴水、每口空氣、每塊土壤，保留原始的純淨。<br>
			監視為非作歹的人們，守護我們的環境！
		</p>
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s4"><a href="#watch">污染監控</a></li>
					<li class="tab col s4"><a href="#topography">地形建模</a></li>
					<li class="tab col s4"><a href="#envirnmentAerial">空拍</a></li>
				</ul>
			</div>
			<div class="col s12 center-align" id="watch">
				<p>
					用飛行器守護河川。<br>
					透過飛行器檢採水體，運用軟體與網路整合，<br>
					即時回傳汙染情形，揪出不肖廠商<br>
				</p>
				<div class="center-align" style="width: 100%">
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/-eoY66RZtfY" frameborder="0" allowfullscreen></iframe>					
					</div>
				</div>
			</div>
			<div class="col s12 center-align" id="topography">
				<p>
					GIS 整呈現地形風貌
				</p>
				<div class="center-align" style="width: 100%">
					<div id="topographyImage"></div>
				</div>
			</div>
			<div class="col s12 center-align" id="envirnmentAerial">
				<p>空拍紀錄環境</p>
				<div class="video-container">
					<iframe src="https://www.youtube.com/embed/Ndvv8zVS3bA" frameborder="0" allowfullscreen></iframe>					
				</div>
			</div>
		</div>
	</div>
	<a name="aerial"></a>
	<div id="aerialCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="valign center-align">
					<h2>空中攝影</h2>
					<p>用鳥的姿態，錄下最美的時刻</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<p class="center-align">
			地面上的攝錄已經無法滿足你的需求了嗎？讓我們換個視界來看世界！<br>
			拉高自己你將能看見不一樣，當由高處往下看，<br>
			你所熟悉的一切，將以鳥兒的視角重新呈現，<br>
			也能捕捉到在平地時所看不見的風景！<br>
			下個取景點，就決定是天空之城！
		</p>
		<div class="row" style="margin-top: 15px;">
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/vUSl3dc.jpg" class="materialboxed" alt="" width="100%">
			</div>
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/fKq2fD3.jpg" class="materialboxed" alt="" width="100%">
			</div>
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/oJh2vNt.jpg" class="materialboxed" alt="" width="100%">
			</div>
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/ToZYff9.jpg" class="materialboxed" alt="" width="100%">
			</div>
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/1uLbcnG.jpg" class="materialboxed" alt="" width="100%">
			</div>
			<div class="col m4 s6" style="margin-top: 15px;">
				<img src="http://i.imgur.com/G84xx7J.jpg" class="materialboxed" alt="" width="100%">
			</div>
		</div>
	</div>
	<a name="show"></a>
	<div id="flyShowCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<div class="valign center-align">
					<h2>空中表演</h2>
					<p>豈止飛行，更是藝術</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<p class="center-align">
			萊特兄弟實現人們飛行的夢想，在空中不僅是運輸或是單純的遊玩與翱翔<br>
			我們讓飛行器跨入展演，生命中的每一個重要時刻都能用不同的方式留下回憶。
		</p>
		<div class="row">
			<div class="col m6 s6">
				<div class="video-container">
					<iframe src="https://www.youtube.com/embed/q9EU0_uxMuw" frameborder="0" allowfullscreen></iframe>					
				</div>
			</div>
			<div class="col m6 s6">
				<div class="video-container">
					<iframe src="https://www.youtube.com/embed/h80WIUbyjhM" frameborder="0" allowfullscreen></iframe>					
				</div>
			</div>
			<div class="col m12 s6 center-align" style="margin-top: 15px;">
				<div class="col s12 m8 offset-m2 l6 offset-l3">
					<div class="card-panel  grey lighten-2 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col m12 s12 valign center-align" style="font-size: 18px">
								若欲洽詢環境監控、攝影紀錄、空中表演等，歡迎來信<br>
								<a href="mailto:jimmyxia0329@gmail.com" target="_blank">jimmyxia0329@gmail.com</a><br>
								由夏專員為您服務
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("footer")
@stop
@section("javascript")
	<script>
		$(document).ready(function(){

		});

		function showContent(tag) {
			$('html, body').animate({
		        scrollTop: $("#" + tag + "Cover").offset().top
		    }, 1500);
		    event.preventDefault();
		    return false;
		}
	</script>
@stop