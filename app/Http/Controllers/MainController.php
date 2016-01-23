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
		return view("about", ["title" => "關於我們"]);
	}

	public function education() {
		return view("education", ["title" => "教育推廣"]);
	}

	public function products() {
		return view("products", ["title" => "產品介紹"]);
	}

	public function flyProject() {
		return view("flyProject", ["title" => "飛行業務"]);
	}

	public function envirnment() {
		return view("envirnment", ["title" => "環境計畫"]);
	}

	public function documents() {
		return view("documents", ["title" => "技術文件"]);
	}

}