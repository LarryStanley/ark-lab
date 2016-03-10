@extends("default")

@section("head")
	
@stop

@section("body")
	<div class="main">
		@include("nav")
		<section style="padding: 0 0 0 0">
			<div id="ark90Cover">
				<div class="valign-wrapper" style="width:100%; height: 100%;">
					<div class="container">
						<div class="valign center-align" style="text-align: center;">
							<h1>奶油蒼蠅 3.0</h1>
							<p style="font-size: 20px; z-index: 10;">讓 Arduino 飛行，一直都是這麼容易</p>
							<img src="http://i.imgur.com/jXqgae8.png" alt="" width="45%"><br>	
							<a href="#details" class="btn red darken-2 waves-effect">瞭解更多</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section style="padding: 0 0 0 0">
			<div id="ark90Explode">
				<div class="valign-wrapper" style="width:100%; height: 100%;">
					<div class="container">
						<div class="valign">
							<div class="row">
								<div class="col m6">
									<img src="http://i.imgur.com/d3noOA0.png" id="prop" alt="" style="position:absolute; z-index: 6;" >
									<img src="http://i.imgur.com/ZJKOJVF.png" id="frame" alt="" style="position:absolute; z-index: 5">
									<img src="http://i.imgur.com/H5Tfg0r.png" id="arduino" alt="" style="position:absolute; z-index: 4">
									<img src="http://i.imgur.com/CD8X2Zs.png" id="quad" alt="" style="position:absolute; z-index: 3">	
									.
								</div>
								<div class="col m6">
									<h3>可插拔核心</h3>
									<p style="font-size: 20px">機身可更換，豐富多變化</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section style="padding: 0 0 0 0">
			<div id="arkEduCover">
				<div class="valign-wrapper page-mask">
					<div class="container">
						<div class="valign center-align">
							<p style="font-size: 36px; margin-bottom: 5px;">
								奶油蒼蠅<br>讓你我都是自造者
							</p>
							<a href="/education" class="btn waves-effect cyan darken-2">
								工作坊內容
							</a>
						</div>				
					</div>
				</div>
			</div>
		</section>
	</div>
	@include("footer")

	@section("javascript")
		<script>
			loadCSS("/css/about.css");
			loadCSS("/css/onepage-scroll.css");
		</script>
		<script src="/js/jquery.onepage-scroll.min.js"></script>
		<script>
			$(".main").onepage_scroll({
			   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
			   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
			                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
			   animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
			   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
			   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
			   beforeMove: function(index) {
			   	if (index == 2) {
			   		var objects = ["#prop", "#frame", "#arduino", "#quad"];
			   		$.each(objects, function(key, object) {
			   			$(object).animate({
				   			marginTop: 0
				   		});
			   		});
			   	}
			   },  // This option accepts a callback function. The function will be called before the page moves.
			   afterMove: function(index) {
			   	if (index == 2) {
			   		var objects = ["#prop", "#frame", "#arduino", "#quad"];
			   		$.each(objects, function(key, object) {
			   			$(object).animate({
				   			marginTop: -200 + key * 100
				   		}, 2000);
			   		});
			   	}
			   },   // This option accepts a callback function. The function will be called after the page moves.
			   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
			   keyboard: true,                  // You can activate the keyboard controls
			   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
			                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
			                                    // the browser's width is less than 600, the fallback will kick in.
			   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
			});
		</script>
	@stop
@stop