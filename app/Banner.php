<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Banner extends Model
{

	 protected $fillable = [
   'title', 'image','description', 'latitude',  'longitude','city','state','country', 'updated_at', 'created_at'
   ];

	public function user(){
   	return $this->belongsTo(User::class);

   }

protected $table = 'banners';
}
