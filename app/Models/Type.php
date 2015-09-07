<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function products() {
    	
		//Type has many prrducts
    	return $this->hasMany("App\Models\Product");

    }
}
