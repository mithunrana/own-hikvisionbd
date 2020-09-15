<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CCTVBrand extends Model
{
    protected $guarded=[];

    public function brandDetails(){
       return $this->belongsTo(ProductsBrand::class,'brandID');
    }


}
