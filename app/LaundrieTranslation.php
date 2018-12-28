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
 //  <li ><label > From:<input id="open" type="time" name="open" value="{{@if(isset($business->open)){{ old('open', $business->open) }}@else{{old('open')}}@endif}}" /></label></li>
                        //    <li ><label > To:<input id="close" type="time" name="close" value="@if(isset($business->close)){{ old('close', $business->close) }}@else{{old('close')}}@endif" /></label></li> 