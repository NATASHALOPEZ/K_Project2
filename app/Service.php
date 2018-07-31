<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
class Service extends Model
{

    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'address', 'latitude', 'longitude'];

    protected $fillable = ['name', 'slug', 'address', 'latitude', 'longitude'];


}
