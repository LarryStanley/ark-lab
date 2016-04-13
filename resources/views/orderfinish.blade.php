@extends("default")

@section("head")
	<link rel="stylesheet" href="/css/products.css">
@stop

@section("body")
	@include("nav")
	<div class="preOrder" >
		<div class="intro valign-wrapper">
			<div class="container">
				<div class="valign"  style="width: 100%;">
					<h1>感謝您的預購</h1>
					<div class="buyReulst">
						<div class="row">
							<div class="col l6 m6 s12">
								{{ $name }} 先生/小姐您好  <br><br>
								感謝您對 Ark Lab 的支持 <br>
								您已成功預購 ArkLab 新品  <br>
								您購買了 <br>
								<div class="buyResultBlock">
									{{ $type }} <br>
									版本：{{ $version }} X {{ $amount }}個<br>
									 總金額為 	NTD {{ $price }}<br>
								</div><br>
								請於 4/23 21:00 前匯款<br>
								您預購的新品將於 4/30 前送達 您的送貨地址<br>
								您的送貨地址為 <br>
								<div class="buyResultBlock">
									{{ $address }}					
								</div><br>
								<?php
									if ($flyer == 1)
										echo "您有參與「奶油蒼蠅五折舊換新，送愛到偏鄉計畫」<br> 請於 4/15 日前寄回奶油蒼蠅 2.0 至<br>桃園市桃園區樹林四街九十七巷11號<br>謝謝您的參與！！<br>";
									if ($flyer == 1 && $type == "奶油蒼蠅 - Butterfly")
										echo "參與活動後可享奶油蒼蠅五折，折扣後的價錢為<br>NTD".$price/0.9*0.5;
								?>
							</div>
							<div class="col l6 m6 s12" style="margin-top: 60px">
								匯款資訊： 
								<div class="buyResultBlock">
									戶名：航見科技有限公司<br>
									玉山銀行 桃鶯分行 <br>
									銀行代碼808<br>
									1090-940-006596
								</div>
								您可於 {{ $email }} 收取確認信 <br>
								如有任何相關問題 請洽付服務專線：<br>
								夏傳傑 <br>
								Mobile:0986008010 <br>
								mail: <a href="mailto:rjimmyxia0329@gmail.com">rjimmyxia0329@gmail.com</a><br>
								<div class="right-align" style="margin-top: 40px;">
									<img src="/images/mark.png" alt="" width="150px">									
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		@include("footer")
	</div>
	@section("javascript")
	  
	@stop
@stop