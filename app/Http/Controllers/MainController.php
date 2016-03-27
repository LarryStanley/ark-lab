<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Mail;

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

	public function showButterfly() {
		return view("butterfly", ["title" => "奶油蒼蠅"]);
	}

	public function showDragonfly() {
		return view("dragonfly", ["title" => "飛龍在天"]);
	}

	public function showCrazybull() {
		return view("crazybull", ["title" => '狂暴蠻牛']);
	}

	public function showArknano() {
		return view("arknano", ["title" => 'Ark Nano']);	
	}

	public function showPreorder() {
		return view('order', ["title" => '預購']);
	}

	public function postPreorder() {
		DB::table('preorder')->insert(
			['type' => strip_tags(Input::get('type')),
			 'version' => strip_tags(Input::get('version')),
			 'amount' => strip_tags(Input::get('amount')),
			 'name' => strip_tags(Input::get('name')),
			 'email' => strip_tags(Input::get('email')),
			 'phone' => strip_tags(Input::get('phone')),
			 'address' => strip_tags(Input::get('address'))
			]
		);

		$type = [
			"butterfly" => "奶油蒼蠅 - Butterfly",
			"dragonfly" => "飛龍在天 - Dragonfly",
			"crazybull" => "狂暴蠻牛 - Crazbull",
			"arknano" => "Ark Nano"
		];

		Mail::send('emails.preorder', [
			'type' => $type[strip_tags(Input::get('type'))],
			'version' => strip_tags(Input::get('version')),
			'amount' => strip_tags(Input::get('amount')),
			'name' => strip_tags(Input::get('name')),
			'email' => strip_tags(Input::get('email')),
			'phone' => strip_tags(Input::get('phone')),
			'address' => strip_tags(Input::get('address'))], function($message)
		{
		    $message->to('kill.xmurderer@gmail.com')->subject('ArkLab新品預購成功通知');
		});

		return Input::get("name");

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