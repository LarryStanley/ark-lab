<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_content extends Model
{
	protected $table = 'products_content';

    public function product() {
    	return $this->belongsTo('App\Products');
    }

    public function material() {
    	return $this->belongsTo('App\Materials', 'material_id');
    }
}
