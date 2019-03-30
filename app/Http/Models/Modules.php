<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    public function questions() {
        return $this->hasMany('App\Http\Models\Questions');
    }

    public function posts() {
        return $this->hasMany('App\Http\Models\Posts');
    }
}
