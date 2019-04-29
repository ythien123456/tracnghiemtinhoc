<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Answers;
use App\Http\Models\QuestionDetails;
use App\Http\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminQuestionController extends Controller
{
    public function index()
    {
        return view('admin.questions');
    }

    public function getQuestions()
    {
        $questions = Questions::all();
        foreach ($questions as $q) {
            $q->ModuleID == 1 ? $q->ModuleID = '1 - CNTT' : '';
            $q->ModuleID == 2 ? $q->ModuleID = '2 - HĐH' : '';
            $q->ModuleID == 3 ? $q->ModuleID = '3 - Internet' : '';
            $q->ModuleID == 4 ? $q->ModuleID = '4 - Word' : '';
            $q->ModuleID == 5 ? $q->ModuleID = '5 - Excel' : '';
            $q->ModuleID == 6 ? $q->ModuleID = '6 - Powerpoint' : '';
            $q->DateCreated = date('d-m-Y', strtotime($q->DateCreated));
        }
        if (request()->ajax()) {
            return datatables()->of($questions)
                ->addColumn('action', function ($questions) {
                    $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $questions->QuestionID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="' . $questions->QuestionID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $buttons;
                })
                ->rawColumns(['action', 'QuestionContent'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function destroy($QuestionID)
    {
        if (request()->ajax()) {
            QuestionDetails::where('QuestionID', $QuestionID)->delete();
            Answers::where('QuestionID', $QuestionID)->delete();
            $question = Questions::find($QuestionID)->delete();
            return response()->json($question);
        }
        return view('errors.ad404');
    }

    public function edit($QuestionID)
    {
        $question = DB::table('questions as q')
            ->join('answers as a', 'q.QuestionID', '=', 'a.QuestionID')
            ->select('q.QuestionID', 'q.QuestionContent', 'q.ModuleID', 'q.QuestionType',
                'a.A', 'a.B', 'a.C', 'a.D', 'a.CorrectAnswers', 'a.AnswerExplain')
            ->where('q.QuestionID', '=', $QuestionID)
            ->first();
        return response()->json($question);
    }

    public function store(Request $request)
    {
        if($request->ajax()) {
            $ExamID = $request->input('exam_id');
            $QuestionID = $request->input('question_id');
            $QuestionContent = $request->input('question-content');
            $ModuleID = $request->input('question-module');
            $QuestionType = $request->input('question-type');
            $A = $request->input('answer-A');
            $B = $request->input('answer-B');
            $C = $request->input('answer-C');
            $D = $request->input('answer-D');
            $CorrectAnswers = $request->input('correct-answer');
            $AnswerExplain = $request->input('question-explain');
            if (isset($QuestionID)) {
                $question = Questions::updateOrCreate(
                    ['QuestionID' => $QuestionID],
                    [
                        'QuestionContent' => $QuestionContent,
                        'ModuleID' => $ModuleID,
                        'QuestionType' => $QuestionType
                    ]
                );
                $answers = Answers::updateOrCreate(
                    ['QuestionID' => $QuestionID],
                    [
                        'A' => $A,
                        'B' => $B,
                        'C' => $C,
                        'D' => $D,
                        'CorrectAnswers' => $CorrectAnswers,
                        'AnswerExplain' => $AnswerExplain
                    ]
                );
                return response()->json($answers);
            }
            $question = new Questions;
            $question->QuestionContent = $QuestionContent;
            $question->ModuleID = $ModuleID;
            $question->QuestionType = $QuestionType;
            if ($question->save()) {
                $answer = new Answers;
                $answer->QuestionID = $question->QuestionID;
                $answer->A = $A;
                $answer->B = $B;
                $answer->C = $C;
                $answer->D = $D;
                $answer->CorrectAnswers = $CorrectAnswers;
                $answer->AnswerExplain = $AnswerExplain;
                $result = $answer->save();
                if(!is_null($ExamID)) {
                    $qd = new QuestionDetails;
                    $qd->QuestionID = $question->QuestionID;
                    $qd->ExamID = $ExamID;
                    $qd->save();
                }
                return response()->json($result);
            } else {
                return response()->json($question);
            }
        }
        return view('errors.ad404');
    }

}
