<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confregistration extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
