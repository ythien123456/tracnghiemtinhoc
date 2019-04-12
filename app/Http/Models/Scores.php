<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    public $timestamps = false;
    public static function store($AccountID,$ExamID,$Score)
    {
         $score = new Scores;
         $score->AccountID = $AccountID;
         $score->ExamID = $ExamID;
         $score->Score = $Score;
         return $score->save();
    }
}
