<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteProfile extends Model
{
    protected $guarded=[];

    public function logo(){
        return $this->belongsTo(images::class,'MainLogo');
    }
}
