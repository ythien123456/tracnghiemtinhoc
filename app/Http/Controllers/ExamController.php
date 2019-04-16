<?php

namespace App\Http\Controllers;

use App\Http\Models\ExamTypes;
use App\Http\Models\Scores;
use Illuminate\Http\Request;
use App\Http\Models\Questions;
use App\Http\Models\Exams;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Question\Question;

class ExamController extends Controller
{
    public function show($examTypeSlug)
    {

        $examList = Exams::getExamListByType($examTypeSlug);
        $examType = ExamTypes::select('TypeTitle','TypeID')->where('TypeSlug',$examTypeSlug)->first();
        if (count($examList->get()) > 0) {
            $examList = $examList->paginate(6);
            return view('examList')
                ->with(['examType' => $examType, 'examList' => $examList]);
        } else {
            return view('examList')
                ->with(['examType' => $examType, 'message' => 'Hiện chưa có đề thi nào ở mục này.']);
        }
    }

    public function showQuestionsByExamID($slug, $examID,$examSlug)
    {
        $questions = Questions::getQuestionsByExamID($examID,$examSlug);
        $examInfo = Exams::getExamInfo($examID);
//        if (Session::has('AccountID')) {
            if (count($questions) > 0)
            {
                if(!session('score'))
                    session()->forget('qArr');
                if(!session('qArr'))
                {
                    $i=0;
                    $qArr = array();
                    foreach($questions as $q)
                    {
                        $qArr['QuestionID'.$i] = $q->QuestionID;
                        $qArr['QuestionContent'.$i] = $q->QuestionContent;
                        $qArr['QuestionType'.$i] = $q->QuestionType;
                        $qArr['A'.$i] = $q->A;
                        $qArr['B'.$i] = $q->B;
                        $qArr['C'.$i] = $q->C;
                        $qArr['D'.$i] = $q->D;
                        ++$i;
                    }
                    session()->put('qArr',$qArr);
                }
                return view('examDetails')
                    ->with('questions', $questions)
                    ->with('examInfo', $examInfo);
            }
            else
                return view('errors.404');
//        } else {
//            return redirect(route('login'));
//        }

    }

    public function submitExamAndCalculateScore($slug, $examID, Request $request)
    {
        if(!session('AccountID'))
           return redirect(route('login'));
        $answers = Questions::getAnswersByExamID($examID);
        $score = 0;
        $answersArray = array();
        foreach ($answers as $asw) {
            $answersArray[$asw->QuestionID] = $asw->CorrectAnswers;
            $answersArray['explain' . $asw->QuestionID] = $asw->AnswerExplain;
            if ($request->has('question' . $asw->QuestionID)) {
                if (strlen($asw->CorrectAnswers) == 1) {
                    if ($asw->CorrectAnswers == $request->input('question' . $asw->QuestionID))
                        $score++;
                } else {
                    $correctAnswersArray = explode(",", $asw->CorrectAnswers);
                    $examAnswersArray = $request->input('question' . $asw->QuestionID);
                    $compareResult = array_diff($correctAnswersArray, $examAnswersArray);
                    if (empty($compareResult))
                        $score++;
                }
            }
        }
        Scores::store(session('AccountID'),$examID,$score);
        return back()
            ->withInput()
            ->with('score', $score)
            ->with('answersArray', $answersArray);
    }
}
