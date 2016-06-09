<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials_type extends Model
{
	protected $table = 'materials_type';

	public function materials() {
		return $this->hasMany('App\Materials', "materials_type_id");
	}
}
