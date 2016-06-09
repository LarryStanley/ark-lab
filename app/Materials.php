<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
	protected $table = 'materials';

	public function type() {
		return $this->belongsTo('App\Materials_type');
	}
}
