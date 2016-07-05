<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product() {
    	return $this->hasOne('App\Products', 'id', 'products_id');
    }
}
