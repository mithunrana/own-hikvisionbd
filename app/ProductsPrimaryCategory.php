<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPrimaryCategory extends Model
{
    protected $guarded=[];

    public function SecondaryCategory(){
        return $this->hasMany(ProductsSecondaryCategory::class,'PrimaryCategoryId');
    }

}
