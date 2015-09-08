<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function type() {

    	//Product belongs to a Type
    	return $this->belongsTo("App\Models\Type");
    }
    public function orders() {

    	//Product belongs to a Type
    	return $this->belongsToMany("App\Models\Order");
    }
}
