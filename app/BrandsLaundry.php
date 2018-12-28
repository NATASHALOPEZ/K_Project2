<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandsLaundry extends Model
{
    protected $table = 'brands_laundry';
    protected $fillable = ['laundry_id','brand_id'];
}
