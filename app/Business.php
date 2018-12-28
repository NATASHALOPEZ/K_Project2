<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
     protected $fillable = [
    'id', 'days','updated_at', 'created_at'
];

 
public function laundry(){
	return $this->belongsToMany('App\Laundry');
}
protected $table = 'business';
}


