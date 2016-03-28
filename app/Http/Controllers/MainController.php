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
		return view("butterfly", ["title" => "奶油蒼蠅", "ogImage" => "http://i.imgur.com/SiZl1UF.png"]);
	}

	public function showDragonfly() {
		return view("dragonfly", ["title" => "飛龍在天", "ogImage" => "http://i.imgur.com/MyZ42Uq.png"]);
	}

	public function showCrazybull() {
		return view("crazybull", ["title" => '狂暴蠻牛', "ogImage" => "http://i.imgur.com/a24wgjF.png"]);
	}

	public function showArknano() {
		return view("arknano", ["title" => 'Ark Nano', "ogImage" => "http://i.imgur.com/YeSSG3f.png"]);	
	}

	public function showPreorder() {
		return view('order', ["title" => '預購', 'ogImage' => "http://i.imgur.com/9IIas6f.png"]);
	}

	public function postPreorder() {
		DB::table('preorder')->insert(
			['type' => strip_tags(Input::get('type')),
			 'version' => strip_tags(Input::get('version')),
			 'amount' => strip_tags(Input::get('amount')),
			 'name' => strip_tags(Input::get('name')),
			 'email' => strip_tags(Input::get('email')),
			 'phone' => strip_tags(Input::get('phone')),
			 'address' => strip_tags(Input::get('address')),
			 'created_at' => date('Y-m-d H:i:s')
			]
		);

		$type = [
			"butterfly" => "奶油蒼蠅 - Butterfly",
			"dragonfly" => "飛龍在天 - Dragonfly",
			"crazybull" => "狂暴蠻牛 - Crazbull",
			"arknano" => "Ark Nano"
		];

		$price = [
			'Ark90-A' => '2300',
			'Ark90-B' => '3300',
			'Ark250-A' =>'3000',		 
			'Ark250-B' =>'4000',
			'Ark250-C' =>'4300',		
			'Ark250-D' =>'7000',
			'ArkTurbo-A' =>'1700',
			'ArkTurbo-B' =>'2700',
			'ArkTurbo-C' =>'3000',
			'ArkNano' =>'1300'
		];

		$version = [
			'Ark90-A' => '啟航版 - Arduino Nano 核心',
			'Ark90-B' => '蛻變版 - Ark Nano 升級核心',
			'Ark250-A' =>'啟航版 - Arduino Nano',		 
			'Ark250-B' =>'蛻變版 - Ark Nano 升級核心',
			'Ark250-C' =>'續航版 - Ark Nano 升級核心、Ark 模組擴充包',		
			'Ark250-D' =>'旗艦版 - Ark Nano升級核心、Ark模組擴充包、Wifi cam、250軸距轉90軸距機架',
			'ArkTurbo-A' =>'啟航版 - Arduino Nano核心',
			'ArkTurbo\-B' =>'蛻變版 - Ark Nano升級核心',
			'ArkTurbo\-C' =>'續航版 - Ark Nano升級核心、Ark 模組擴充包',
			'ArkNano' =>'Ark Nano'
		];

		Mail::send('emails.preorder', [
			'type' => $type[strip_tags(Input::get('type'))],
			'version' => $version[strip_tags(Input::get('version'))],
			'amount' => strip_tags(Input::get('amount')),
			'name' => strip_tags(Input::get('name')),
			'email' => strip_tags(Input::get('email')),
			'price' => (int)strip_tags(Input::get('amount')) * (int)$price[strip_tags(Input::get('version'))] *0.9,
			'phone' => strip_tags(Input::get('phone')),
			'address' => strip_tags(Input::get('address'))], function($message)
		{
		    $message->to(strip_tags(Input::get('email')))->subject('ArkLab新品預購成功通知');
		});

		return view("orderfinish", [
			"title" => "預購成功", 
			'type' => $type[strip_tags(Input::get('type'))],
			'version' => $version[strip_tags(Input::get('version'))],
			'amount' => strip_tags(Input::get('amount')),
			'price' => (int)strip_tags(Input::get('amount')) * (int)$price[strip_tags(Input::get('version'))] *0.9,
			'name' => strip_tags(Input::get('name')),
			'email' => strip_tags(Input::get('email')),
			'phone' => strip_tags(Input::get('phone')),
			'address' => strip_tags(Input::get('address'))]);

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