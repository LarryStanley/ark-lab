<img src="/images/mark.png" alt="" width="200px" style="margin-top:15px;">
<div class="ui secondary pointing menu">
	<a href="/dashboard" class="item" id="overall">
	    總覽
	</a>
	<a href="/dashboard/source" class="item" id="source">
		資料下載
	</a>
	<a href="/dashboard/history" class="item" id="history">
		購買紀錄
	</a>
	@if(Auth::user()->role('worker'))
	<a href="/dashboard/new-order-category" class="item" id="newOrderCategory">
		新增出貨種類
	</a>
	<a href="/dashboard/new-order" class="item" id="newOrder">
		新增出貨
	</a>
	<a href="/dashboard/orders" class="item" id="orders">
		出貨記錄
	</a>
	@endif
	@if(Auth::user()->role('admin'))
	<a href="" class="item">更改權限</a>
	@endif
	<div class="right menu">
		<a class="ui item" href="/auth/logout">
		  登出
		</a>
	</div>
</div>