<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessLaundry extends Model
{
    
    protected $table = 'business_laundry';
    protected $fillable = ['laundry_id','business_id','open','close'];
    
}



