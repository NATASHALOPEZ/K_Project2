<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $fillable = [
    'id', 'name', 'updated_at', 'created_at'
];


public function laundry(){
	return $this->belongsToMany('App\Laundry');
}
protected $table = 'category';
}
