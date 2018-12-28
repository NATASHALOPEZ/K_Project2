<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
    'id', 'brand_name','brand_logo' ,'description','updated_at', 'created_at'
];


public function laundry(){
	return $this->belongsToMany('App\Laundry');
}
protected $table = 'brands';
}


