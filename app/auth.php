<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
   protected $fillable = [
        'fname','lname' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
