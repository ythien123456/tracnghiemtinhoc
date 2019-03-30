<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ExamTypes extends Model
{
    public function exams() {
        return $this->hasMany('App\Http\Models\Exams');
    }
}
