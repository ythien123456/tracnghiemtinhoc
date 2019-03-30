<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    public function questions() {
        return $this->belongsToMany('App\Http\Models\Questions');
    }

    public function examtypes() {
        return $this->belongsTo('App\Http\Models\ExamTypes');
    }

    public static  function getExamInfo($examID)
    {
        $info = Exams::where('ExamID','=',$examID)->first();
        return $info;
    }
}
