<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Questions extends Model
{
    public function exams()
    {
        return $this->belongsToMany('App\Http\Models\Exams');
    }

    public function answers()
    {
        return $this->hasOne('App\Http\Models\Answers');
    }

    public function modules()
    {
        return $this->belongsTo('App\Http\Models\Modules');
    }

    public static function getQuestionsByExamID($examID,$examSlug)
    {
//        $questions = Questions::join('questiondetails', 'questions.QuestionID', '=', 'questiondetails.QuestionID', 'inner')
//            ->where('questiondetails.ExamID', '=', $examID)
//            ->limit('40')
//            ->orderBy('RAND()');
        $questions = DB::table('questions as q')
            ->join('questiondetails as qd','q.QuestionID','=','qd.QuestionID')
            ->join('answers as a','q.QuestionID','=','a.QuestionID')
            ->join('exams as e','qd.ExamID','=','e.ExamID')
            ->select('q.QuestionID','q.QuestionContent','q.QuestionType','a.A','a.B','a.C','a.D','e.ExamSlug')
            ->where('qd.ExamID','=',$examID)
            ->where('e.ExamSlug','=',$examSlug)
        ->get();
        return $questions;
    }

    public static function getAnswersByExamID($examID)
    {
        $answers = DB::table('questions as q')
            ->join('questiondetails as qd','q.QuestionID','=','qd.QuestionID')
            ->join('answers as a','q.QuestionID','=','a.QuestionID')
            ->select('q.QuestionID','a.CorrectAnswers','a.AnswerExplain')
            ->where('qd.ExamID','=',$examID)
        ->get();
        return $answers;
    }
}
