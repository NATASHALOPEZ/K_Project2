<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Laundry;

class Laundry extends Model
{

   
   protected $fillable = [
   'name', 'address','City', 'user_id', 'brand_id', 'latitude', 'longitude', 'updated_at', 'created_at'
   ];


   public function user(){
   	return $this->belongsTo(User::class);

   }
   public function brand(){
      return $this->belongsTo('App\Brand')->withPivot('id');
   }
   public function category(){
   	return $this->belongsToMany('App\Category')->withPivot('id');
   }

   public function business(){
      return $this->belongsToMany('App\Business')->withPivot('id');
   }

  /* public function stores(){
       return $this->belongsToMany('App\BusinessLaundry')->withPivot('name');
   }
*/

   protected $table = 'laundry';
}
   