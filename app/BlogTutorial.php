<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTutorial extends Model
{
    protected $guarded=[];

    public function featuredimage(){
        return $this->belongsTo(images::class,'FeaturedImage');
    }
}
