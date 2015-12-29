<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index() {
	    return view('index');
	}

	public function about() {
		return view("about");
	}
}