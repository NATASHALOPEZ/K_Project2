<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtCity extends Model
{
  protected $fillable = [
   'name','id'
   ];

   protected $table = 'pt_cities'; 

  
}

