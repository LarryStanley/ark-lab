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

		return response()->json($data);
	}
}