<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fullpapersubmission extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
