<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Exams;
use App\Http\Models\QuestionDetails;
use App\Http\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminExamController extends Controller
{
    public function index()
    {
        return view('admin.exams');
    }

    public function showSingleExam($ExamID)
    {
        $exam = Exams::where('ExamID', $ExamID)->first();
        if ($exam)
            return view('admin.singleExam')
                ->with(['examInfo' => $exam]);
        return view('errors.ad404');
    }

    public function getExams()
    {
        $exams = Exams::all();
        foreach ($exams as $e) {
            $e->Status == 1 ? $e->Status = '✔️' : $e->Status = '❌';
            $e->DateCreated = date('d-m-Y', strtotime($e->DateCreated));
        }
        if (request()->ajax()) {
            return datatables()->of($exams)
                ->addColumn('title', function ($exams) {
                    $title = '<a href="' . route('viewExam', ['ExamID' => $exams->ExamID]) . '">
                    ' . $exams->ExamTitle . '</a>';
                    return $title;
                })
                ->addColumn('action', function ($exams) {
                    $test = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $exams->ExamID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="' . $exams->ExamID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $test;
                })
                ->rawColumns(['action', 'title'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function getSingleExam($examID)
    {
        $questions = DB::table('questions as q')
            ->join('questiondetails as qd', 'q.QuestionID', '=', 'qd.QuestionID')
            ->join('answers as a', 'q.QuestionID', '=', 'a.QuestionID')
            ->join('exams as e', 'qd.ExamID', '=', 'e.ExamID')
            ->select('q.QuestionID', 'q.QuestionContent', 'q.ModuleID')
            ->where('e.ExamID', '=', $examID)
            ->get();
        foreach ($questions as $q) {
            $q->ModuleID == 1 ? $q->ModuleID = '1 - CNTT' : '';
            $q->ModuleID == 2 ? $q->ModuleID = '2 - HĐH' : '';
            $q->ModuleID == 3 ? $q->ModuleID = '3 - Internet' : '';
            $q->ModuleID == 4 ? $q->ModuleID = '4 - Word' : '';
            $q->ModuleID == 5 ? $q->ModuleID = '5 - Excel' : '';
            $q->ModuleID == 6 ? $q->ModuleID = '6 - Powerpoint' : '';
        }
        if (request()->ajax()) {
            return datatables()->of($questions)
                ->addColumn('action', function ($questions) {
                    $test = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $questions->QuestionID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="' . $questions->QuestionID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $test;
                })
                ->rawColumns(['action', 'QuestionContent'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function edit($ExamID)
    {
        $exam = Exams::find($ExamID);
        return response()->json($exam);
    }

    public function store(Request $request)
    {
        $ExamID = $request->input('exam_id');
        $ExamTitle = $request->input('exam-title');
        $ExamSlug = Str::slug($ExamTitle);
        $ExamDescription = $request->input('exam-description');
        $ExamType = $request->input('exam-type');
        $TotalQuestions = $request->input('exam-total-questions');
        $TimeLimit = $request->input('exam-time-limit');
        $Status = $request->input('exam-status');
        $exam = Exams::updateOrCreate(
            ['ExamID' => $ExamID],
            [
                'ExamTitle' => $ExamTitle,
                'ExamSlug' => $ExamSlug,
                'ExamDescription' => $ExamDescription,
                'ExamType' => $ExamType,
                'TotalQuestions' => $TotalQuestions,
                'TimeLimit' => $TimeLimit,
                'Status' => $Status
            ]);
        return response()->json($exam);
    }

    public function destroy($ExamID)
    {
        if (request()->ajax()) {
            QuestionDetails::where('ExamID', $ExamID)->delete();
            $examDelete = Exams::where('ExamID', $ExamID)->delete();
            return response()->json($examDelete);
        }
        return view('errors.ad404');
    }

    public function removeExamQuestion($ExamID,$QuestionID)
    {
        if(request()->ajax()) {
            $question = QuestionDetails::where('QuestionID',$QuestionID)
                ->where('ExamID',$ExamID)->delete();
            return response()->json($question);
        }
        return view('errors.ad404');
    }

    public function sumQuestions($ExamID)
    {
        $questions = QuestionDetails::where('ExamID',$ExamID)->get();
        $sum = count($questions);
        return response()->json($sum);
    }
}
