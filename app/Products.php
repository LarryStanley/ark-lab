<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function content() {
    	return $this->hasMany("App\Products_content", "product_id");
    }
}
