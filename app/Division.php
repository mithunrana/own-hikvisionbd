<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function DistrictList(){
        return $this->hasMany(District::class,'DivisionId');
    }
}
