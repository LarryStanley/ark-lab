<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Input;
use App\Materials;
use App\Materials_type;

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

	public function index_slider_save() {
		DB::table("index_slider")->delete();
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

		DB::table("index_slider")->insert($newData);

		return "success";
	}

	public function new_about_logs() {
		$data = Request::json()->all();
		$newData = [
			"title" => $data["title"],
			"illustration" => $data["illustration"],
			"image" => $data["image"],
			"link" => $data["link"],
			"created_time" => $data["created_time"]
		];

		if (empty($data["id"]))
			$id = DB::table("about_us")->insertGetId($newData);
		else {
			DB::table("about_us")->where("id", $data["id"])->update($newData);
			$id = $data['id'];
		}

		return $id;
	}

	public function delete_about_logs($id) {

		DB::table("about_us")->where("id", $id)->delete();

		return "success";
	}

	public function index_slider() {
		$sliders = DB::table("index_slider")->orderBy("order", "asc")->get();

		return response()->json($sliders);
	}

	public function show_about_us() {
		$data = DB::table("about_us")->orderBy("created_time", "asc")->get();

		return response()->json($data);
	}

	public function show_activity_record() {
		$data = DB::table("activity_record")->orderBy("activity_time", "desc")->get();

		return response()->json($data);
	}

	public function upload_image(Request $request) {
		$file = Input::file('photo');
		//if (Input::hasFile('photo')) {
			$destinationPath = public_path().'/images';
			$filename = str_random(12);
			$fileType = explode("/", $file->getMimeType())[1];
			$upload_success = $file->move($destinationPath, $filename.".".$fileType);
			return $filename.".".$fileType;
		//}else 
		//	return "file not receive";
		
	}

	public function showAllUnits() {
		$data = DB::table("sell_units")->get();

		return response()->json($data);
	}

	public function getSingleUnit($id) {
		$data = DB::table("sell_units")->where("id", $id)->first();

		return response()->json($data);
	}

	public function getMaterialState($id) {
		$data = Materials::find($id);

		return $data;
	}

	public function getMaterialType($id) {
		$data = Materials_type::find($id);

		return $data;
	}
}