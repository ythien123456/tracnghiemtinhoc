<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getBasicScoreStatistic($AccountID)
    {
        $stats = DB::table('scores as s')
            ->join('exams as e','s.ExamID','=','e.ExamID')
            ->select('e.ExamID', 'e.ExamTitle', 'e.TotalQuestions', 'e.TimeLimit',
                DB::raw('(SELECT COUNT(ScoreID) FROM scores sc WHERE sc.ExamID=s.ExamID AND sc.AccountID='.$AccountID.') as TimesDone'))
            ->distinct()
            ->where('AccountID','=',$AccountID)
            ->get();
        return $stats;
        //select DISTINCT ExamID, (select count(ScoreID) from scores sc where sc.ExamID=s.ExamID) as TimesDone from scores s WHERE AccountID=1
    }

    public static function getScoresByExamAndAccountID($ExamID,$AccountID)
    {
        $scores = Scores::where('ExamID', $ExamID)
            ->where('AccountID', $AccountID)
            ->orderByDesc('Date')->get();
        return $scores;
    }

    public static function getAllScoresByAccountID($AccountID)
    {
//        $scores = DB::table('scores as s')
//            ->join('accounts as a','s.AccountID','=','a.AccountID')
//            ->join('exams as e','s.ExamID','=','e.ExamID')

    }
}
