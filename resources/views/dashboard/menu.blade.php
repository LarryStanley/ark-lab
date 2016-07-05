<img src="/images/mark.png" alt="" width="200px" style="margin-top:15px;">
<div class="ui red secondary pointing menu">
	<a href="/dashboard" class="item" id="overall">
	    總覽
	</a>
	<!--<a href="/dashboard/source" class="item" id="source">
		資料下載
	</a>!-->
	<a href="/dashboard/history" class="item" id="history">
		購買紀錄
	</a>
	@if(Auth::user()->role('worker'))
	<a href="/dashboard/order" class="item" id="order">管理出貨</a>
	<a href="/dashboard/business/new-business" class="item" id="business">管理業務</a>

	@endif
	<div class="right menu">
		<a class="ui item" href="/auth/logout">
		  登出
		</a>
	</div>
</div>