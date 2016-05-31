<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use Mail;
use App\Sell_Units;

class AdminController extends Controller
{

	public function showNewOrderCategory() {
		return view('dashboard/orders/new-order-category', ["title" => "出貨分流"]);
	}

	public function showNewOrder() {
		return view("dashboard/orders/new-order", ["title" => "新增出貨"]);
	}

	public function newOrder() {

		$results = [];

		for ($i=0; $i < Input::get("number"); $i++) { 
			$englishString = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
			$numberString = substr(str_shuffle("0123456789"), 0, 6);
			DB::table("orders")->insert([
				'type'			=> Input::get('productType'),
				'shipped_time'	=> date('Y-m-d H:i:s'),
				'order_number'	=> $englishString.$numberString,
				'register'		=> false,
				'user_id'		=> -1,
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s'),
				'recorder_id'	=> Auth::user()->id
			]);
			array_push($results, $englishString.$numberString);
		}

		return response()->json($results);
	}

	public function showOrders() {
		$data = DB::table("orders")->get();

		//return response()->json($data);
		return view('/dashboard/orders/orders', ['title' => '出貨記錄', 'data' => $data]);
	}

	public function showProducts() {
		$products = DB::table("products")->get();

		return view('/dashboard/orders/products', ['title' => '庫存商品管理', 'products' => $products]);
	}

	public function showSellUnits() {
		//$types = DB::table("sell_units_type")->get();
		$types = Sell_Units::unit_list();

		return view('/dashboard/orders/units', ["title" => "銷售單位管理", "types" => $types]);
	}

	public function addNewUnit() {
		DB::table("sell_units")->insert([
				"unit_type_id" => Input::get("type"),
				"unit_name" => Input::get("unit")
			]);

		return redirect('/dashboard/order/units');
	}

	public function deleteUnit() {
		DB::table('sell_units')->where("id", Input::get('id'))->delete();

		return "success";
	}


	public function showNewBusiness() {

		$unitList = DB::table("sell_units")->get();

		return view("/dashboard/business/new-business", ["title" => "新增業務", "sell_units" => $unitList]);
	}
}