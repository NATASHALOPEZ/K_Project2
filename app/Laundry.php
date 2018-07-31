<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{

   
   protected $fillable = [
   'name', 'address','City', 'user_id', 'brand_id', 'latitude', 'longitude', 'updated_at', 'created_at'
   ];


   public function user(){
   	return $this->belongsTo(User::class);

   }
   public function category(){
   	return $this->belongsToMany('App\Category');
   }

   protected $table = 'laundry';
}
   