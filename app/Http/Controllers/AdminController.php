<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Mail;

class AdminController extends Controller
{
	public function index() {
		$data = DB::table("preorder")->get();

		return view('dashboard/index', ["preOrderData" => $data]);
	}

}