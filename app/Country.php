<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function fullpapersubmission(){
        return $this->hasMany(Fullpapersubmission::class);
    }

    public function abstractsubmission(){
        return $this->hasMany(Abstractsubmission::class);
    }

    public function confregistration(){
        return $this->hasMany(confregistration::class);
    }
}
