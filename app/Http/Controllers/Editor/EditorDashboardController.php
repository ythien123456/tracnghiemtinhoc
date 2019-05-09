<?php

namespace App\Http\Controllers\Editor;

use App\Http\Models\Accounts;
use App\Http\Models\Exams;
use App\Http\Models\Posts;
use App\Http\Models\Questions;
use App\Http\Models\Scores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EditorDashboardController extends Controller
{
    public function index()
    {
        /*POSTS*/
        $totalPosts = Posts::all()->count();
        $eightNewPosts = Posts::orderBy('PostDate','desc')->limit(8)->get();
        /*ACCOUNTS*/
        $totalMembers = Accounts::where('Role',1)->count();
        $totalEditors = Accounts::where('Role',2)->count();
        $totalAdmins = Accounts::where('Role',3)->count();
        $totalAccounts = Accounts::all()->count();

        /*EXAMS*/
        $totalExams = Exams::all()->count();
        /*QUESTIONS*/
        $totalQuestions = Questions::all()->count();
        $totalQuestionsModule1 = Questions::where('ModuleID',1)->count();
        $totalQuestionsModule2 = Questions::where('ModuleID',2)->count();
        $totalQuestionsModule3 = Questions::where('ModuleID',3)->count();
        $totalQuestionsModule4 = Questions::where('ModuleID',4)->count();
        $totalQuestionsModule5 = Questions::where('ModuleID',5)->count();
        $totalQuestionsModule6 = Questions::where('ModuleID',6)->count();
        /*SCORES*/
        $totalScores = Scores::all()->count();
        $fiveNewScores = DB::table('scores as s')
            ->join('accounts as a','s.AccountID','=','a.AccountID')
            ->join('exams as e','s.ExamID','=','e.ExamID')
            ->select('s.ScoreID','s.AccountID','a.FirstName','a.LastName',
                'e.ExamTitle', 'e.ExamID','e.TotalQuestions','s.Score','s.Date')
            ->limit(5)
            ->orderByDesc('s.ScoreID')
            ->get();

        return view('editor.dashboard')
            ->with([
                /*POSTS*/
                'totalPosts' => $totalPosts,
                'eightNewPosts' => $eightNewPosts,
                /*ACCOUNTS*/
                'totalMembers' => $totalMembers,
                'totalEditors' => $totalEditors,
                'totalAdmins' => $totalAdmins,
                'totalAccounts' => $totalAccounts,
                /*EXAMS*/
                'totalExams' => $totalExams,
                /*QUESTIONS*/
                'totalQuestions' => $totalQuestions,
                'totalQuestionsModule1' => $totalQuestionsModule1,
                'totalQuestionsModule2' => $totalQuestionsModule2,
                'totalQuestionsModule3' => $totalQuestionsModule3,
                'totalQuestionsModule4' => $totalQuestionsModule4,
                'totalQuestionsModule5' => $totalQuestionsModule5,
                'totalQuestionsModule6' => $totalQuestionsModule6,
                /*SCORES*/
                'totalScores' => $totalScores,
                'fiveNewScores' => $fiveNewScores,
            ]);
    }
}
