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
						<h2 class="valign fadeIn">Ark Lab  <br class="hide-on-med-and-up"> 熱血 Maker 培訓營</h2>
						<div id="aboutContent" style="font-size: 16px;" class="fadeIn">
							<p>
								童年，我們抓飛機、堆積木。<br>
								<br>
								長大以後，我們可以自己設計、印製零件、組裝無一無二屬於自己的玩具。<br>
								<br>
								這次寒假ArkLab多旋翼工坊要和少年Maker們一起回憶童年！<br>
								將Arduino、奶油蒼蠅、TinkerCad、3D Printer結合孩子們天馬行空的想像力<br>
								絕對能迸發出驚天動地的創意與發明！<br>
							</p>
						    <div style="font-size: 14px;">
								<a class="btn waves-effect cyan darken-2 fadeIn" target="_blank" href="http://www.accupass.com/event/register/1512281938587611384890">
									立即報名
								</a>							
							</div>
						</div>
						<hr style="margin: 15px 15px 15px 15px;">
						<div class="col m6 s6">
							<a class="btn waves-effect transparent fadeIn tooltipped" data-position="bottom" data-delay="50" data-tooltip="查看近期活動行事曆" href="#calendar" onclick="showCalendar()">
								其他活動
							</a>
						</div>
						<div class="col m6 s6">
							<a class="btn waves-effect transparent fadeIn tooltipped" data-position="bottom" data-delay="50" data-tooltip="查看活動精彩內容" href="#record" >
								活動實記
							</a>
						</div>
						<div class="col m3"></div>
						<div class="col m3"></div>	
					</div>
				</div>
			</div>
		</div>
	</div>
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
	</div>
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