<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\images;
use App\PortfolioCategory;
class Portfolio extends Model
{
    protected $guarded=[];

    public function featuredimage1(){
        return $this->belongsTo(images::class,'FeaturedImage1');
    }

    public function featuredimage2(){
        return $this->belongsTo(images::class,'FeaturedImage2');
    }

    public function portfolioCategory(){
        return $this->belongsTo(PortfolioCategory::class,'ProjectCategory');
    }
}
