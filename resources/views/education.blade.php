@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/about.css">
	<link rel="stylesheet" href="/css/calendar.css">
@stop

@section("body")
	@include("nav")
	<div id="eduCover">
		<div class="valign-wrapper page-mask" style="width:100%;">
			<div class="container">
				<h1 class="hide">教育推廣</h1>
				<div class="row">
					<div class="col m12  blue-grey-text text-lighten-5 center-align" >
						<h2 class="valign fadeIn">Ark Lab  <br class="hide-on-med-and-up">無人機空拍體驗</h2>
						<div id="aboutContent" style="font-size: 16px;" class="fadeIn">
							<p>
								想進入空拍的世界嗎？想學空拍技巧嗎？快來ArkLab無人機空拍體驗！
							</p>
						    <div style="font-size: 14px;">
								<a class="btn waves-effect cyan darken-2 fadeIn" target="_blank" href="http://www.accupass.com/go/2016arklab_ws002">
									立即報名
								</a>							
							</div>
						</div>
						<hr style="margin: 15px 15px 15px 15px;">
						<div class="col m12 s12">
							<a class="btn waves-effect transparent fadeIn tooltipped" data-position="bottom" data-delay="50" data-tooltip="查看近期活動行事曆" href="#calendar" onclick="showCalendar()">
								其他活動
							</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<a name="calendar"></a>
	<div class="container">
		<h2>近期活動</h2>
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="http://i.imgur.com/dwyoaCS.jpg" class="activator" alt="">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Ark Lab X MiDs 師資培訓計畫
							<i class="material-icons right">more_vert</i></span>
						</span>
						<p><a href="http://www.accupass.com/go/2016arklab_ws001">立即報名</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							Ark Lab X MiDs 師資培訓計畫
							<i class="material-icons right">close</i>
						</span>
						<p>
							充滿Maker 基因卻無處發揮嗎？<br>	
							現在，MiDs & ArkLab 全台最年輕、最熱血、最創新的Maker教育團隊首次組合，共同推出<<種子教師培訓營>>邀請你一起翻轉現在的教育，本次活動將會全方位教授學員3D列印的應用、3D建模、開源資源再設計、流體力學、飛行器原理，並學習基本程式編譯。一站式全方位學習，同時藉此機會招收更多講師進入團隊，經過篩選將會於日後相關課程聘請合作。<br>
							<br>活動日期：2016-03-12 (六) 09:00 ~ 2016-03-13 (日) 17:00 <br>
							<a href="http://www.accupass.com/go/2016arklab_ws001" target="_blank">立即報名</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="http://i.imgur.com/MuQrzq6.jpg" class="activator" alt="">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							無人機空拍體驗營
							<i class="material-icons right">more_vert</i></span>
						</span>
						<p><a href="http://www.accupass.com/go/2016arklab_ws002">立即報名</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							無人機空拍體驗營
							<i class="material-icons right">close</i>
						</span>
						<p>
							想進入空拍的世界嗎？想學空拍技巧嗎？快來ArkLab無人機空拍體驗！<br>
							在空拍技術工作坊中，我們將教導空拍機選購方式、飛行技巧、保養方式，以及空拍攝影之構圖與運鏡技巧，並且傳達正確的飛行觀念與相關法規。<br>
							<br>活動日期：  2016-03-19 (六) 14:00 ~ 16:00 <br>
							<a href="http://www.accupass.com/go/2016arklab_ws002" target="_blank">立即報名</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="http://i.imgur.com/3gu13O5.jpg" class="activator" alt="">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							無人機與物聯網─自動導航GIS應用(講座)
							<i class="material-icons right">more_vert</i></span>
						</span>
						<p><a href="http://www.accupass.com/go/2016arklab_ws004">立即報名</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							無人機與物聯網─自動導航GIS應用(講座)
							<i class="material-icons right">close</i>
						</span>
						<p>
							無人機與物聯網─自動導航GIS應用(講座)<br>
							<br>活動日期：  2016-03-25 (五) 18:30 ~ 21:00  <br>
							<a href="http://www.accupass.com/go/2016arklab_ws004" target="_blank">立即報名</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="http://i.imgur.com/GQmvSde.jpg" class="activator" alt="">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							飛行駕訓班─四軸飛行體驗活動
							<i class="material-icons right">more_vert</i></span>
						</span>
						<p><a href="http://www.accupass.com/go/2016arklab_ws003">立即報名</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							飛行駕訓班─四軸飛行體驗活動
							<i class="material-icons right">close</i>
						</span>
						<p>
							下課下班好無聊不知道幹嘛嗎?一起來跟我們玩飛機吧~<br>
							曾經懷抱飛行夢嗎？想要體驗操縱飛機的感覺嗎？<br>
							飛行駕訓班將帶給大家正確的飛行觀念，<br>
							並讓大家體驗微型無人機的駕馭感。<br>
							此外，本課程亦安排了飛行模擬的體驗課程來滿足各位的飛行慾望。<br>
							<br>活動日期：2016-03-22 (二) 18:00 ~ 2016-03-30 (三) 21:00<br>
							<a href="http://www.accupass.com/go/2016arklab_ws003" target="_blank">立即報名</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
			<!--
	<a name="calendar"></a>
	<div id="calendar" class="valign-wrapper">
		<div class="container white-text valign">
			<h2>活動行事曆</h2>
			<div class="row" style="overflow: hidden; ">
				<div class="col m5 red lighten-1" style="margin-bottom: -99999px; padding-bottom: 99999px;">
					<h3>1/30</h3>
					<h4>Ark Lab 熱血<br> Maker 培訓營</h4>
					<hr>
					<p>
						童年，我們抓飛機、堆積木。<br>
						<br>
						長大以後，我們可以自己造飛機、調飛機、飛飛機。<br>
						長大以後，我們可以自己設計、印製零件、組裝無一無二屬於自己的玩具。<br><br>

						這次寒假ArkLab多旋翼工坊要和少年Maker們一起回憶童年！<br>
						將Arduino、奶油蒼蠅、TinkerCad、3D Printer	<br>結合孩子們天馬行空的想像力<br>
						絕對能迸發出驚天動地的創意與發明！<br>

						運用飛行器讓國高中的學員能在飛行的樂趣中了解流體力學、<br>飛行器原理等艱澀的課程，<br>並學習調控機器及程式編譯的能力。
						3D列印則讓孩子從無到有，<br>從設計到實印打造專屬於自己玩具，<br>學習3D模型繪製技術及3D列印機的操作技巧。<br>
						<a class="btn waves-effect cyan darken-2 fadeIn" target="_blank" href="http://www.accupass.com/event/register/1512281938587611384890">
							立即報名
						</a>	
					</p>
				</div>
				<div class="col m7 white  blue-grey-text text-darken-1" style="margin-bottom: -99999px; padding-bottom: 99999px;">
					<div ui-calendar="uiConfig.calendar" ng-model="eventSources"></div>
				</div>		
			</div>
		</div>
	</div>!-->
	<!--<a name="record"></a>
	<div id="activityRecord">
		<div class="container">
			<h2>活動實記</h2>
			<div class="row">
				<div class="col m4 s6" ng-repeat="activity in edu.activityData">
					 <div class="card">
					    <div class="card-image waves-effect waves-block waves-light">
					    	<div class="activity-image">
						      	<img class="activator" src="[[ activity.cover ]]">					    		
					    	</div>
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">[[ activity.name ]]<i class="material-icons right">more_vert</i></span>
					      <p>
					      	日期：[[ activity.activity_time ]] <br>
					      	<a href="#">查看活動照片</a>
					      </p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">[[ activity.name ]]<i class="material-icons right">close</i></span>
					      <p>[[ activity.description ]]</p>
					    </div>
					  </div>
				</div>
			</div>
		</div>
	</div>!-->
	@include("footer")

	@section("javascript")
		<script type="text/javascript" src="/js/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="/js/angular-ui-calendar/src/calendar.js"></script>
		<script type="text/javascript" src="/js/fullcalendar/dist/fullcalendar.min.js"></script>
		<script type="text/javascript" src="/js/fullcalendar/dist/gcal.js"></script>
		<script src="/js/edu.js"></script>
		<script>
			$(document).ready(function() {
			});

			function showCalendar() {
				$('html, body').animate({
			        scrollTop: $("#calendar").offset().top
			    }, 1500);
			    event.preventDefault();
			    return false;
			}
		</script>
	@stop
@stop