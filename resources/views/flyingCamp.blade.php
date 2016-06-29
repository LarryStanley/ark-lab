@extends("defaultSemantic")
@section("head")
	<style>
		html, body {
			color: #607D8B;
		}

		.cover {
			position: relative;
			width: 100%;
			height: 100%;
			color: white;
			background: url(images/flying-camp.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.mask {
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,0.3);
		}

		.center {
			text-align: center;
		}

		.center h3 {
			color: white;
		}

		.center a {
			color: white;
		}

		.bottom {
			position: absolute;
			text-align: center;
			bottom: 0px;
			padding: 5px 5px 5px 5px;
			width: 100%;
		}

		@media (min-width: 1200px) {
			.center {
				position: absolute;
				width: 1170px;
				height: 220px;
				margin-top: -150px;
				margin-left: -585px;
				top: 50%;
				left: 50%;
			}
		}

		@media (min-width: 992px) {
			.center {
				position: absolute;
				width: 970px;
				height: 220px;
				margin-top: -150px;
				margin-left: -485px;
				top: 50%;
				left: 50%;
			}
		}

		@media (min-width: 758px) {
			.center {
				position: absolute;
				width: 750px;
				height: 220px;
				margin-top: -150px;
				margin-left: -375px;
				top: 50%;
				left: 50%;
			}
		}

		@media (max-width: 768px) {
			.center {
				position: absolute;
				width: 80%;
				height: 500px;
				margin-top: -250px;
				margin-left: -40%;
				top: 50%;
				left: 50%;
			}
		}

		h3 {
			color: #D32F2F;
		}
	
		h4 {
			color: #455A64;
		}


	</style>
@stop
@section("body")
<div class="cover">
	<div class="mask">
		<div class="center">
			<img src="/images/mark.png" alt="" width="150px">
			<h1>資策會飛客嘉年華</h1>

			<h3>飛行一直以來都是人類的夢想，這次我們要用無人機飛向天空！</h3>
			<p>
				穿過知識與自造交織的天際線，無人機將引領你進入下一個世界新紀元！<br>	
				享受自由奔放的飛行樂趣！，一起來參加這場天空嘉年華！
			</p>	
		</div>
		<div class="bottom">
			<a href="#details" id="down" style="color: white">
				查看更多 <br><i class="angle double down icon"></i>
			</a>
		</div>
	</div>	
</div>



<div class="ui container" id="details">
	<h2>活動介紹</h2>
	<p>日期：105.07/16~10/15</p>
	<div class="ui grid stackable">
		<div class="eight wide column">
			<div class="ui raised segment">
				<a class="ui red ribbon label">0716 14:00~17:00</a>
				<p><h4>(講座－無人機與環境污染監控物聯網　航見科技執行長：張東琳)</h4></p>
				<p>以深厚的無人機技術背景，與各界夥伴同台分享進一步完善的系統並把它帶向天空的過程，透過3G/GPRS大範圍覆蓋的蜂巢式網路結構，監控範圍將無任何死角。基於MQTT物聯網協定整合眾多終端PM2.5感測節點，達到遠端自動化飛行監控的目標</p>	
		    </div>
		</div>
		<div class="eight wide column">
			<div class="ui raised segment">
				<a class="ui blue ribbon label">0724 10:00~13:00/14:00~17:00空拍工作坊</a>
				<p><h4>(Arklab多旋翼工坊大型機組裝講師：夏傳傑、柯立晉)</h4></p>
				<p>
					Dirty Hands！
					團隊合作，共同組裝大型四軸飛行器
					一同享受自造的樂趣，並且了解飛行器之構造與相關硬體功能
					與我們一起飛向天空，浩瀚無垠！
				</p>
		    </div>
		</div>
		<div class="sixteen wide column">	
			<p><h2>地點：</h2></p>
			<p><strong>講座：民生科服大樓1F活動會議室(105 台北市松山區民生東路四段133號)</strong></p>
			<p><strong>工作坊：空總TAF園區魅客空間(台北市大安區建國南路一段177號)</strong></p>

			<div style="text-align:center">
				<a target="_blank" href="http://chungli2.iiiedu.org.tw/chungli/index.php/weekend/quadcopter" class="ui orange button">立即報名</a>				
			</div>
		</div>
	</div>
</div>
@stop

@section("javascript")
<script>
	$(document).ready(function() {
		$("#down").click(function() {
			$('html, body').animate({
		        scrollTop: $("#details").offset().top
		    }, 1000);
		    return false;
		});
	});
</script>
@stop