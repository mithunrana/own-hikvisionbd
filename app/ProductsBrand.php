<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsBrand extends Model
{
    protected $guarded=[];

    public function brandRelatedProducts(){
       return $this->hasMany(Products::class,'BrandId')->limit(4)->orderBy('id', 'DESC');
    }

    public function image(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }
}
