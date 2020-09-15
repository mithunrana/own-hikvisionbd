<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscoverProducts extends Model
{
    protected $guarded=[];

    public function image(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }

    public function primaryCategoryDetails(){
        return $this->belongsTo(ProductsPrimaryCategory::class,'PrimaryCategoryId');
    }
}
