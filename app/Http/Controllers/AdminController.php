<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use Mail;
use App\Sell_Units;
use App\Materials_type;
use Request;
use App\Products_content;

class AdminController extends Controller
{

	public function index() {
		return view('dashboard/index', ["title" => "總覽"]);
	}

	public function showNewOrderCategory() {
		return view('dashboard/orders/new-order-category', ["title" => "出貨分流"]);
	}

	public function showNewOrder() {
		$units = DB::table("sell_units")->get();
		$products = DB::table("products")->get();

		return view("dashboard/orders/new-order", ["title" => "新增出貨", "units" => $units, "products" => $products]);
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
		$materials = Materials_type::all();

		return view('/dashboard/orders/products', ['title'			=> '庫存商品管理', 
												   'products'	 	=> $products, 
												   'materials' 		=> $materials,
												   'ngApp'			=> 'productsApp',
												   'ngController'	=> 'ProductsController as products']);
	}

	public function updateProductContent(Request $request) {

		DB::table("products_content")->where("product_id", Input::get("productId"))->delete();

		foreach (Input::get("content") as $key => $value) {
			DB::table("products_content")->insert([
					'material_id'	=> $value["material_id"],
					'product_id'	=> Input::get("productId"),
					'count'			=> $value["count"]
				]);
		}

		return response()->json(["state" => "success"]);	
	}

	public function updateStock() {

		$product = DB::table("products")->where("id", Input::get("id"))->first();
		DB::table("products")
			->where("id", Input::get("id"))
			->update([ "stock" 		=> $product->stock + Input::get("stock"),
					   "updated_at" => date('Y-m-d H:i:s'),
					   "updated_by" => Auth::user()->id]);

		return redirect('/dashboard/order/products');
	}

	public function newProduct() {
		DB::table("products")
			->insert([ "stock" 		=> 0,
					   "updated_at" => date('Y-m-d H:i:s'),
					   "updated_by" => Auth::user()->id,
					   "name"		=> Input::get("name")]);

		return redirect('/dashboard/order/products');
	}

	public function showSellUnits() {
		//$types = DB::table("sell_units_type")->get();
		$types = Sell_Units::unit_list();

		return view('/dashboard/orders/units', ["title" => "銷售單位管理", "types" => $types]);
	}

	public function addNewUnit() {

		$data = [];

		foreach (Input::all() as $key => $value) {
			if ($value == "") {
				$data[$key] = null;
			} else {
				$data[$key] = $value;
			}
		}

		unset($data["_token"]);

		DB::table("sell_units")->insert($data);

		return redirect('/dashboard/order/units');
	}

	public function updateUnit() {
		$data = [];

		foreach (Input::all() as $key => $value) {
			if ($value == "") {
				$data[$key] = null;
			} else {
				$data[$key] = $value;
			}
		}

		unset($data["_token"]);
		unset($data["id"]);

		DB::table("sell_units")->where("id", Input::get("id"))->update($data);

		return redirect('/dashboard/order/units');
	}

	public function deleteUnit() {
		DB::table('sell_units')->where("id", Input::get('id'))->delete();

		return "success";
	}

	public function showMaterials() {
		$materials = Materials_type::all();

		return view("/dashboard/orders/materials", ["title" => "原物料管理", "materials" => $materials]);
	}

	public function updateMaterialStock() {
		$material = DB::table("materials")->where("id", Input::get("id"))->first();
		DB::table("materials")
			->where("id", Input::get("id"))
			->update([ "stock" 		=> $material->stock + Input::get("stock"),
					   "updated_at" => date('Y-m-d H:i:s'),
					   "updated_by" => Auth::user()->id]);

		$data = DB::table("materials")->where("id" , Input::get("id"))->first();

		return response()->json($data);
	}

	public function materialDelete() {
		DB::table("materials")->where("id", Input::get("id"))->delete();

		return redirect('/dashboard/order/materials');
	}

	public function materialCategoryDelete() {
		DB::table("materials_type")->where("id", Input::get("id"))->delete();

		return redirect('/dashboard/order/materials');
	}

	public function newMaterials() {
		DB::table("materials")
			->insert([ "stock" 				=> 0,
					   "updated_at" 		=> date('Y-m-d H:i:s'),
					   "updated_by" 		=> Auth::user()->id,
					   "name"				=> Input::get("name"),
					   "materials_type_id"	=> Input::get("materials_type_id")]);

		return redirect('/dashboard/order/materials');
	}

	public function newMaterialCategory() {
		DB::table("materials_type")
			->insert(["name" => Input::get("name")]);

		return redirect('/dashboard/order/materials');
	}

	public function showNewBusiness() {

		$unitList = DB::table("sell_units")->get();
		$products = DB::table("products")->get();

		return view("/dashboard/business/new-business", 
			["title" => "新增業務", 
			 "sell_units" => $unitList,
			 "products" => $products]);
	}
}