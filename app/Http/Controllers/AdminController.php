<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use Mail;

class AdminController extends Controller
{
	public function index() {
		$data = DB::table("preorder")->get();

		return view('dashboard/index', ["preOrderData" => $data]);
	}

	public function showNewOrderCategory() {
		return view('dashboard/new-order-category', ["title" => "出貨分流"]);
	}

	public function showNewOrder() {
		return view("dashboard/new-order", ["title" => "新增出貨"]);
	}

	public function newOrder() {

		$results = [];

		for ($i=0; $i < Input::get("number"); $i++) { 
			$randomString = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
			DB::table("orders")->insert([
				'type'			=> Input::get('productType'),
				'shipped_time'	=> date('Y-m-d H:i:s'),
				'order_number'	=> $randomString,
				'register'		=> false,
				'user_id'		=> -1,
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s'),
				'recorder_id'	=> Auth::user()->id
			]);
			array_push($results, $randomString);
		}

		return response()->json($results);
	}

	public function showOrders() {
		$data = DB::table("orders")
					->leftJoin('users', 'orders.user_id', '=', 'users.id')
					->select('orders.*', 'users.name')
					->get();

		//return response()->json($data);
		return view('/dashboard/orders', ['title' => '出貨記錄', 'data' => $data]);
	}

}