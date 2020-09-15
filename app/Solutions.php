<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    protected $guarded=[];


    public function featuredimage1(){
        return $this->belongsTo(images::class,'FeaturedImage1');
    }

    public function featuredimage2(){
        return $this->belongsTo(images::class,'FeaturedImage2');
    }

}
