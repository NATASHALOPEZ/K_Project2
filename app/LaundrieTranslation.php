<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class LaundrieTranslation extends Model
{
   use Sluggable;

    public $timestamps = false;
    protected $fillable = ['name', 'slug', 'address'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
