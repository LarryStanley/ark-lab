<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Input;

class ApiController extends Controller
{
	public function index_block() {
		$blocks = DB::table("index_block")->orderBy("order", "asc")->get();

		return response()->json($blocks);
	}

	public function index_block_save() {
		DB::table("index_block")->delete();
		$data = Request::json()->all();

		$newData = [];

		foreach ($data as $key => $value) {
			if (empty($value["created_at"]))
				$value["created_at"] = date("Y-m-d H:i:s", time());
			array_push($newData, [
				"title" => $value['title'],
				"order" => $value['order'],
				"illustration" => $value['illustration'],
				"image" => $value['image'],
				"link" => $value['link'],
				"created_at" => $value['created_at'],
				"updated_at" => date("Y-m-d H:i:s", time())
			]);
		}

		DB::table("index_block")->insert($newData);

		return "success";
	}

	public function index_slider() {
		$sliders = DB::table("index_slider")->orderBy("order", "asc")->get();

		return response()->json($sliders);
	}

	public function upload_image(Request $request) {
		$file = Input::file('photo');
		if (Input::hasFile('photo')) {
			$destinationPath = public_path().'/images';
			$filename = str_random(12);
			$fileType = explode("/", $file->getMimeType())[1];
			$upload_success = $file->move($destinationPath, $filename.".".$fileType);
			return $filename.".".$fileType;
		}else 
			return "file not receive";
		
	}
}