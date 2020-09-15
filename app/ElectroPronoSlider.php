<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectroPronoSlider extends Model
{
    protected $guarded=[];

    public function image(){
        return $this->belongsTo(images::class,'sliderimage');
    }
}
