<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ExamTypes extends Model
{
    protected $table = 'examtypes';
    public function exams() {
        return $this->hasMany('App\Http\Models\Exams');
    }


}
