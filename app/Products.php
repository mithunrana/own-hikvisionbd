<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded=[];

    public function image(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }

    public function secondaryCategory(){
        return $this->belongsTo(ProductsSecondaryCategory::class,'Category');
    }

    public function productBrand(){
        return $this->belongsTo(ProductsBrand::class,'BrandId');
    }

}
