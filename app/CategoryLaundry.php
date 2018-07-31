<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryLaundry extends Model
{

    protected $fillable = ['laundry_id','category_id'];
    protected $table = 'category_laundry';

}
