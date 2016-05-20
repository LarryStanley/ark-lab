<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use Mail;

class CustomerController extends Controller
{
	public function newBuy() {
		$data = DB::table("orders")->where("order_number", Input::get('serial'))->first();

		if(empty($data))
			return response()->json(["state" => "not exist"]);
		else if ($data->register)
			return response()->json(["state" => "register"]);
		else if (!$data->register) {
			DB::table("orders")
				->where("order_number", Input::get('serial'))
				->update([
					"shipped_time"	=> date('Y-m-d H:i:s'),
					"register"		=> true,
					"user_id"		=> Auth::user()->id,
					"updated_at"	=> date('Y-m-d H:i:s')
				]);

			return response()->json(["state" => "success"]);
		}else
			return response()->json(["state" => "error"]);

	}

	public function buyHistory() {
		$history = DB::table("orders")->where("user_id", Auth::user()->id)->get();

		return view("dashboard/history", ["title" => "購買紀錄", 'history' => $history]);
	}
}