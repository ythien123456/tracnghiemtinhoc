<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Questions extends Model
{
    public function exams() {
        return $this->belongsToMany('App\Http\Models\Exams');
    }

    public function answers() {
        return $this->hasOne('App\Http\Models\Answers');
    }

    public function modules() {
        return $this->belongsTo('App\Http\Models\Modules');
    }

    public static function getQuestionsByExamID($examID)
    {
//        $questions = Questions::join('questiondetails', 'questions.QuestionID', '=', 'questiondetails.QuestionID', 'inner')
//            ->where('questiondetails.ExamID', '=', $examID)
//            ->limit('40')
//            ->orderBy('RAND()');
        $questions = DB::select(DB::raw("SELECT q.QuestionID, q.QuestionContent, q.QuestionType, a.A, a.B, a.C, a.D,a.CorrectAnswers FROM questions q JOIN questiondetails qd ON q.QuestionID = qd.QuestionID JOIN answers a ON q.QuestionID=a.QuestionID WHERE qd.ExamID=$examID"));
        return $questions;
    }

    public static function getAnswersByExamID($examID)
    {
        $answers = DB::select(DB::raw("select q.QuestionID,a.CorrectAnswers,a.AnswerExplain from questions q JOIN questiondetails qd ON q.QuestionID=qd.QuestionID
JOIN answers a ON q.QuestionID=a.QuestionID where qd.ExamID=$examID"));
        return $answers;
    }
}
