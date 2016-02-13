@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/main.css">

	<style>

		html, body {
			font-family: 'cwTeXHei', sans-serif;

		}
	
		h1 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 48px;
		}

		h2 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 36px;
		}

		h3 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 24px;
			margin-top: 40px;
		}

		h4 {
			font-family: 'cwTeXHei', sans-serif;
			font-size: 18px;
		}

		p {
			font-family: 'cwTeXHei', sans-serif;
		}

		.color {
			color: white;
			height: 100px;
			width: 250px;
			text-align:center; 
			line-height: 100px;
			margin: 0px 0px 0px 0px;
		}

		ul {
			padding-left: 20px;
		}

		ul li {
			list-style-type: circle;
		}

		.block {
			background-color: #eceff1;
			padding: 10px 10px 10px 10px; 
			color: #455a64;
			border-style: solid;
			border-width: 1px;
			border-color: #546e7a;
			border-radius: 2px;
			margin: 5px 5px 5px 5px;
		}

		code {
			background-color: #cfd8dc;
			padding: 0px 3px 0px 3px;
			margin: 3px 3px 3px 3px;
			color: #0097A7;
		}

		.page-mask {
			height: 100%;
			width: 100%;
			background-color: rgba(0,0,0,0.6);
		}

		#aboutCover {
			height: 250px;
			width: 375px;
			position: relative;
			background: transparent url("http://i.imgur.com/betF4w2.jpg") no-repeat scroll center center / cover;
			color: #FFF;
			margin: 10px 10px 10px 10px;
		}

	</style>
@stop

@section("body")
	<div class="container">
		<h1>Ark Lab 網頁設計規範</h1>
		<h3>總結</h3>
		<ul>
			<li><a href="#color">色彩規範</a></li>
			<li><a href="#font">字體</a></li>
			<li><a href="#structure">網站架構</a></li>
		</ul>
		<a name="color"></a>
		<h2>色彩規範</h2>
		<hr>
		<h3>主色調</h3>
		<div class="row">
			<div class="col m4 s6">
				<div class="color" style="background-color: #D32F2F">#D32F2F 700 red darken-2</div>
				<div class="color" style="background-color: #F44336">#F44336 500 red</div>
			</div>
			<div class="col m4 s6">
				<div class="color" style="background-color: #0097A7">#0097A7 700</div>
				<div class="color" style="background-color: #00BCD4">#00BCD4 500</div>
			</div>
			<div class="col m4 s6">
				<div class="color" style="background-color: #455A64">#455A64 700</div>
				<div class="color" style="background-color: #607D8B">#607D8B 500</div>
			</div>
		</div>
		<a name="font"></a>
		<h2>字體</h2>
		<hr>
		<p>
			使用 Google 的黑體<br>
			連結為 <a href="http://fonts.googleapis.com/earlyaccess/cwtexhei.css">http://fonts.googleapis.com/earlyaccess/cwtexhei.css</a><br>
			必須要在 CSS 中 <code>@import url(http://fonts.googleapis.com/earlyaccess/cwtexhei.css);</code>，<br>並定義 <code>font-family: 'cwTeXHei', sans-serif;</code>
		</p>
		<a name="structure"></a>
		<h2>網站架構</h2>
		<hr>
		<h3>總結</h3>
		<p>分為以下幾點</p>
		<ul>
			<li>首頁</li>
			<li><a href="#aboutUs">關於我們</a></li>
			<li><a href="#education">教育推廣</a></li>
			<li>產品介紹</li>
			<li>飛行業務</li>
			<li>方舟計畫</li>
		</ul>
		<a name="aboutUs"></a>
		<h3>關於我們</h3>
		<hr>
		<p>關於我們分為 Ark Lab 介紹，以及<a href="#contactUs">聯絡我們</a></p>
		<h4>關於我們介紹詞</h4>
		<p>
			<div class="row">
				<div class="col m6">
					平板、電腦版本，斷句如下：
					<div class="block">
						Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，<br>大幅降低技術門檻，拉近天空與你我的距離。<br>
								透過全新的視角我們將重新認識這片土地。<br>
								並運用在不同層面上如水質監測、空氣品質監測等，<br>讓多旋翼飛行器融入生活之中。<br>
								自由開放與分享是我們的精神，<br>更希望能持續推波助瀾。<br>如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！<br>
					</div>
				</div>
				<div class="col m6">
					手機版無斷句，如下：
					<div class="block">
						Arklab成立於2014年，致力於透過開放原始碼與硬體裝配，大幅降低技術門檻，拉近天空與你我的距離。
								透過全新的視角我們將重新認識這片土地。
								並運用在不同層面上如水質監測、空氣品質監測等，讓多旋翼飛行器融入生活之中。
								自由開放與分享是我們的精神，更希望能持續推波助瀾。如同我們的名字 Aircraft Revolution Keep 一起來場天空革命吧！
					</div>
				</div>
				<div class="col m12">
					<p>
						在程式碼部分運用 Materialzecss 內建的 <code>hide-on-med-and-up</code> 以及 <code>hide-on-small-only</code> 來達到 RWD 的效果 <br>
						背景圖片有再上一層 <code>page-mask</code> 遮罩，以凸顯說明文字<br>
						並有使用 <code>fadeIn</code> 效果，設定網頁載入 50 毫秒後顯示
						<div class="row">
							<div class="col m6 s6">
								原圖<br>
								<div id="aboutCover">
								</div>
							</div>
							<div class="col m6 s6">
								遮罩後
								<div id="aboutCover">
									<div class="page-mask"></div>
								</div>
							</div>
						</div>
					</p>
				</div>
			</div>
		</p>
		<a name="contactUs"></a>
		<h4>聯絡我們</h4>
		<p>
			聯絡我們背景為左上到右下漸層，起始顏色為 <code>#f69001</code>，結束顏色為 <code>#f92073</code><br>
			並分為以下幾項
			<ul>
				<li>
					社群
				</li>
				<li>
					購買
				</li>
				<li>
					合作
				</li>
				<li>
					媒體
				</li>
			</ul>
		</p>
		<a href="/about" class=" " target="_blank">查看關於我們</a>

		<a name="education"></a>
		<h3>教育推廣</h3>
		<hr>
		<p>教育推廣第一頁呈現，最新活動資訊，下方使用日曆方式呈現近期活動</p>
		<h4>活動行事曆</h4>
		<p>
			活動行事曆使用到的套件如下：
			<ul>
				<li>
					<code>moment.min.js</code>
				</li>
				<li>
					<code>calendar.js</code>
				</li>
				<li>
					<code>fullcalendar.js</code>
				</li>
				<li>
					<code>gcal.js</code>
				</li>
			</ul>
			待辦功能：
			<ul>
				<li>與 google calendar 做結合</li>
				<li>重大事件用紅色圈起來</li>
			</ul>
		</p>
		<h4>活動實記</h4>
		

		<h3>方舟計畫</h3>
	</div>
@stop