@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">
@stop

@section("body")
	<div class="pageOne" id="top">
		<div class="page-mask">
			<div class="center fadeInDown">
				<h3>開放原始碼｜自造多旋翼</h3>
				<h4>拉近天空與你我的距離</h4>
				<hr>
				<img src="/images/mark.png" width="200px" alt="" style="margin-top: 5px;">		
				<br><a href="#about" class="blue-grey-text text-lighten-4" id="downButton">下拉查看更多<br><i class="fa fa-angle-double-down"></i></a>
			</div>
			<div class="navbar-fixed">
				<nav class="transparent">
					<div class="nav-wrapper">
						<div class="brand-logo fadeInFast" id="mark" style="display: none">
							<a href="#top" id="topButton">
								<img src="/images/mark.png" width="150px" alt="" style="margin-top: 5px;">		
							</a>
						</div>
						<a href="#" data-activates="mobile-bar" class="button-collapse"><i class="fa fa-bars" style="margin-left: 5px;"></i></a>
						<ul class="right hide-on-med-and-down">
							<li><a href="#about" name="about" id="aboutButton">關於我們</a></li>
							<li><a href="#education" name="education" id="educationButton">教育推廣</a></li>
							<li><a href="#products" name="products" id="productsButton">產品介紹</a></li>
							<li><a href="#flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
							<li><a href="#envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
							<li><a href="#documents" name="documents" id="documentsButton">技術討論</a></li>
						</ul>
						<ul class="side-nav" id="mobile-bar">
					       	<li><a href="#about" name="about" id="aboutButton">關於我們</a></li>
							<li><a href="#education" name="education" id="educationButton">教育推廣</a></li>
							<li><a href="#products" name="products" id="productsButton">產品介紹</a></li>
							<li><a href="#flyProject" name="flyProject" id="flyProjectButton">飛行業務</a></li>
							<li><a href="#envirnment" name="envirnment" id="envirnmentButton">環境計畫</a></li>
							<li><a href="#documents" name="documents" id="documentsButton">技術討論</a></li>
					    </ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="aboutPage" id="about">
		<div class="page-mask">
			<div class="center">
				<div class="row">
					<div class="col s12 m12 l4 fadeInLeft" id="aboutTitle" style="display: none">
						<h2>關於我們</h2>
					</div>
					<div class="col s12 m12 l8 fadeIn" id="aboutContent" style="display:none">
						Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，<br>大幅降低技術門檻，拉近天空與你我的距離。<br>
						透過全新的視角我們將重新認識這片土地。<br>
						並運用在不同層面上如水質監測、空氣品質監測等，<br>讓多旋翼飛行器融入生活之中。
						自由開放與分享是我們的精神，<br>更希望能持續推波助瀾。<br>如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！<br>
						<a href="about" style="margin-top: 10px;" class="waves-effect waves-light btn red lighten-2">瞭解更多</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="eduPage" id="education">
		<div class="page-mask">
			<div class="center fadeIn" id="educationContent" style="display: none">
				<h2>教育推廣</h2>
				<hr>
				<p>以飛行為主題，透過有趣的多旋翼推廣Maker教育。<br>從硬體組裝到軟體編譯，我們從零開始，按部就班帶你打造自己的多旋翼。<br>
				透過多旋翼我們希望你能享受的翱翔天際的愉快拉近天空的距離。<br>
				更希望能夠從自造多旋翼開始，讓更多人享受當Maker的樂趣。<br></p>
				<a href="education" style="margin-top: 10px;" class="waves-effect waves-light btn pink lighten-2">瞭解更多</a>
			</div>
		</div>
	</div>
	<div class="productsPage" id="products">
		<div class="page-mask">
			<div class="center fadeInRight" id="productsContent" style="display: none">
				<div class="row">
					<div class="col m12 s12 l12">
						<div class="right">
							<h2>奶油蒼蠅 2.0</h2>
							<ul>
								<li>可插拔核心：機身可更換，豐富多變化。</li>
								<li>手機遙控器：手機藍芽遙控，人人都是飛手。</li>
								<li>掌上型機身：輕巧好攜帶，練飛最佳利器</li>
								<li>可編譯程式：不只是玩具，更是程式學習的法寶。</li>
							</ul>
							<a href="products" style="margin-top: 10px;" class="waves-effect waves-light btn purple lighten-2">前往賣場</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="flyProjectPage" id="flyProject">
		<div class="page-mask">
			<div class="center fadeIn" id="flyProjectContent" style="display: none">
				<div class="row">
					<div class="col m4 l4 s12">
						<h2>飛行業務</h2>
					</div>
					<div class="col m8 l8 s12">
						<div class="card blue-grey darken-1">
				            <div class="card-content white-text">
								<p>
									飛行器讓我們以嶄新的視角，探索這片土地。<br>	
									透過安裝不同儀器，飛行器能有許多變化。<br>
									裝上鏡頭，我們能夠紀錄世界的美麗。<br>
									搭配感測器，飛行器替我們監測環境，守護家園。<br>
									使用蜂鳴器，嚇跑偷吃稻麥的鳥兒。<br>
									你有什麼新奇的主意嗎？我們一起來發掘飛行器的新用途。<br>
								</p>
							</div>
						</div>
						<a href="fly" style="margin-top: 10px;" class="waves-effect waves-light btn deep-purple lighten-2">瞭解更多</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="envirnmentPage" id="envirnment">
		<div class="page-mask">
			<div class="center fadeIn" id="envirnmentContent" style="display: none">
				<div class="row">
					<div class="col m8 l8 s12 right right-align">
						<h2>環境計畫</h2>
						<p>
							曾經，我們用飛行器守護河川。<br>
							透過飛行器檢採水體，運用軟體與網路整合，<br>
							即時回傳汙染情形，揪出不肖廠商<br>
							現在，我們要監測每一分每一秒我們都在呼吸的空氣。<br>
							在天空中檢查大氣中的氣體汙染，並利用網路集結眾人之力。<br>
							在此，我們誠摯地邀請各方飛手，<br>
							一起在不同的地點起飛，守護這片蒼穹之下的人們
						</p>
						<a href="products" style="margin-top: 10px;" class="waves-effect waves-light btn indigo lighten-2">瞭解更多</a>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="documentsPage" id="documents">
		<div class="page-mask">
			<div class="center fadeIn" id="documentsContent" style="display: none">
				<div class="row">
					<h2>技術討論</h2>
					<hr>
					<p>Maker 就是要從爬文開始！！</p>
					<a href="documents" style="margin-top: 10px;" class="waves-effect waves-light btn blue lighten-2">立即前往</a>
				</div>
			</div>
		</div>
	</div>

	@include("footer")

@stop
@section("javascript")
	<script>
		var page = ["top", "about", "education", "products", "flyProject", "envirnment", "documents"];
		$(document).ready(function() {
			$.each(page, function(index, value) {
				$("#" + value + "Button").click(function() {
					$('html, body').animate({
					    scrollTop: $("#" + value).offset().top
					}, 1000);

					return false;
				});
			});

			$("#downButton").click(function() {
				$('html, body').animate({
				    scrollTop: $("#about").offset().top
				}, 1000);
				return false;
			});

			fadeInAnimate();

			$(".button-collapse").sideNav();
			$(window).scroll(function (event) {
		        fadeInAnimate();
		    });

		});

		function fadeInAnimate() {
	    	var scroll = $(window).scrollTop();
	        if (scroll >= $("#" + page[1]).offset().top - 200) {
	        	$("#mark").show();
	        }else {
	        	$("#mark").hide();
	        }

	        if (scroll >= $(window).height()/2) {
	        	$("#aboutTitle").show();
	        	$("#aboutContent").show();
	        }

	        if (scroll >= $("#" + page[2]).offset().top - ($(window).height()/2)) {
	        	$("#educationContent").show();
	        }

	        if (scroll >= $("#" + page[3]).offset().top - ($(window).height()/2)) {
	        	$("#productsContent").show();
	        }

	        if (scroll >= $("#" + page[4]).offset().top - ($(window).height()/2)) {
	        	$("#flyProjectContent").show();
	        }

	        if (scroll >= $("#" + page[5]).offset().top - ($(window).height()/2)) {
	        	$("#envirnmentContent").show();
	        }

	        if (scroll >= $("#" + page[6]).offset().top - ($(window).height()/4*3)) {
	        	$("#documentsContent").show();
	        }
	    }
	</script>
@stop