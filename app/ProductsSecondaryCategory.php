<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsSecondaryCategory extends Model
{
    protected $guarded=[];

    public function primaryCategory(){
        return $this->belongsTo(ProductsPrimaryCategory::class,'PrimaryCategoryId');
    }


}
