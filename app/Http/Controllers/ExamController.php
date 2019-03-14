<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Questions;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function showDeTongHop()
    {
        return view('detonghop');
    }

    public function showQuestionsByExamID($examID)
    {
        $questions = Questions::getQuestionsByExamID($examID);
        return view('examDetails')
            ->with('questions', $questions);
    }

    public function submitExamAndCalculateScore($examID, Request $request)
    {
        $answers = Questions::getAnswersByExamID($examID);
        $score = 0;
        foreach ($answers as $asw) {
            if ($request->has($asw->QuestionID)) {
                if (strlen($asw->CorrectAnswers) == 1) {
                    if ($asw->CorrectAnswers == $request->input($asw->QuestionID))
                        $score++;
                } else {
                    $correctAnswersArray = explode(",", $asw->CorrectAnswers);
                    $examAnswersArray = $request->input($asw->QuestionID);
                    $compareResult = array_diff($correctAnswersArray, $examAnswersArray);
                    if (empty($compareResult))
                        $score++;
                }
            }
        }
        $request->session()->put('score', $score);
        return back()->withInput();
    }
}
