<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sell_Units extends Model
{
    protected $table = 'sell_units_type';
	public $timestamps = false;

	public static function unit_list() {
		$types = Sell_Units::all();

		foreach ($types as $key => $value) {
			$list = DB::table("sell_units")->where("unit_type_id", $value->id)->get();
			$types[$key]->list = $list;
		}

		return $types;
	}
}
