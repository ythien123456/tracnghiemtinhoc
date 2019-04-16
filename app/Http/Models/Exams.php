<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getExamListByType($examTypeSlug)
    {
        $examList = DB::table('exams as e')
            ->join('examtypes as et','e.ExamType','=','et.TypeID')
            ->select('e.ExamID','e.ExamTitle','e.ExamSlug','e.ExamDescription','e.TotalQuestions','e.TimeLimit')
            ->where('et.TypeSlug','=',$examTypeSlug)
            ->where('e.Status','=',1);
        return $examList;
    }

    public static function getNewExams()
    {
        $examList = DB::table('exams as e')
            ->join('examtypes as et','e.ExamType','=','et.TypeID')
            ->select('e.ExamID', 'e.ExamType', 'e.ExamSlug','e.TotalQuestions','e.TimeLimit','e.ExamTitle','e.ExamDescription','et.TypeSlug')
            ->where('e.Status','=',1)
            ->orderByDesc('e.DateCreated')
            ->limit(6);
        return $examList;
    }
}
