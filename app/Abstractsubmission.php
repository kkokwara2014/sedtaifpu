<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abstractsubmission extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
