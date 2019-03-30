<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function modules() {
        return $this->belongsTo('App\Http\Models\Modules');
    }

    public function accounts() {
        return $this->belongsTo('App\Http\Models\Accounts');
    }
}
