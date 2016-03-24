@extends("default")

@section("head")
<<<<<<< HEAD
	<link rel="stylesheet" href="/css/products.css">
=======
	
>>>>>>> origin/master
@stop

@section("body")
	@include("navwhite")
	<div class="allProducts">
		<div class="butterfly valign-wrapper block">
			<div class="valign center-align" style="width:100%;">
				<h1>Butterfly</h1>
				<hr width="25%">
				<p>翻轉教育</p>
				<img src="http://i.imgur.com/bQZHfeZ.png" alt="" width="20%"><br>
				<a href="/products/butterfly">進一步瞭解</a>
			</div>
		</div>
		<div class="dragonfly valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Dragonfly</h1>
				<hr width="25%">
				<p>更大 更好 更快</p>
				<img src="http://i.imgur.com/3b7ssx4.png" alt="" width="20%"><br>	
				<a href="/products/dragonfly">進一步瞭解</a>
			</div>
		</div>
		<div class="crazybull valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Crazybull</h1>
				<hr width="25%">
				<p>不只是自走車</p>
				<img src="http://i.imgur.com/zPiB3x1.png" alt="" width="20%"><br>
				<a href="/products/crazybull">進一步瞭解</a>
			</div>
		</div>
		<div class="arknano valign-wrapper block">
			<div class="valign center-align" style="width: 100%;">
				<h1>Ark Nano</h1>
				<hr width="25%">
				<p>慣性感測 · 藍芽遙控 · <span style="font-size: 18px;">Arduino</span></p>
				<img src="http://i.imgur.com/z0QHZG3.png" alt="" width="20%"><br>
				<a href="/products/arknano">進一步瞭解</a>
			</div>
		</div>
	</div>
	@include("footer")

	@section("javascript")
<<<<<<< HEAD
=======
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
>>>>>>> origin/master
	@stop

@stop