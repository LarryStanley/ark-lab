<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;

class MainController extends Controller
{
	public function index() {
		$sliders = DB::table("index_slider")->orderBy("order", "asc")->get();
		$blocks = DB::table("index_block")->orderBy("order", "asc")->get();

	    return view('index', ["sliders" => $sliders,
	    					  "blocks"	=> $blocks,
	    					  "ngApp" 	=> "indexApp",
	    					  "ngController" => "IndexController as index"]);
	}

	public function about() {
		return view("about", ["title" => "關於我們",
							  "ngApp" => "aboutApp",
							  "ngController" => "AboutController as about"]);
	}

	public function education() {
		return view("education", ["title" => "教育推廣",
								  "ngApp" => "eduApp",
								  "ngController" => "EduController as edu"]);
	}

	public function plans() {
		$data = DB::table("ark_plan")->get();

		return view("plans", ["title" => "方舟計畫", "arkPlans" => $data]);
	}

	public function planDetails($url) {
		$data = DB::table("ark_plan")->where("url", $url)->first();

		return view("plansDetails", ["title" => $data->title, "plan" => $data]);
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