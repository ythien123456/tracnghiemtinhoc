<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Exams;
use App\Http\Models\QuestionDetails;
use App\Http\Models\Questions;
use App\Http\Models\Scores;
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
                    $test = '<a href="javascript:void(0)" id="edit" data-id="' . $exams->ExamID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" id="delete"  data-id="' . $exams->ExamID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $test;
                })
                ->addColumn('currentQuestions', function ($exams) {
                    $qcount = QuestionDetails::where('ExamID', $exams->ExamID)->get();
                    return count($qcount);
                })
                ->addColumn('TotalScores', function ($exams) {
                    $scoreCounts = Scores::where('ExamID',$exams->ExamID)->get();
                    return count($scoreCounts);
                })
                ->rawColumns(['action', 'title', 'currentQuestions','TotalScores'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function getSingleExam($examID)
    {
        $questions = DB::table('questions AS q')
            ->JOIN('questiondetails AS qd', 'q.QuestionID', '=', 'qd.QuestionID')
            ->JOIN('answers as a', 'q.QuestionID','=', 'a.QuestionID')
            ->JOIN('exams as e', 'qd.ExamID', '=', 'e.ExamID')
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
                    $test = '<a href="javascript:void(0)" id="edit" data-id="' . $questions->QuestionID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" id="delete"  data-id="' . $questions->QuestionID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
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
        if($ExamType!=1) {
            $TotalQuestions = $request->input('exam-total-questions');
            $TimeLimit = $request->input('exam-time-limit');
        } else {
            $TotalQuestions = 30;
            $TimeLimit = 30;
        }
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

    public function removeExamQuestion($ExamID, $QuestionID)
    {
        if (request()->ajax()) {
            $question = QuestionDetails::where('QuestionID', $QuestionID)
                ->where('ExamID', $ExamID)->delete();
            return response()->json($question);
        }
        return view('errors.ad404');
    }

    public function removeAllQuestions($ExamID)
    {
        if (request()->ajax()) {
            $question = QuestionDetails::where('ExamID', $ExamID)->delete();
            return response()->json($question);
        }
        return view('errors.ad404');
    }

    public function sumQuestions($ExamID)
    {
        if(request()->ajax()) {
            $questions = QuestionDetails::where('ExamID', $ExamID)->get();
            $sum = count($questions);
            return response()->json($sum);
        }
        return view('errors.ad404');
    }

    public function getManualComposeQuestions($ExamID)
    {
        $examInfo = Exams::where('ExamID',$ExamID)->first();
        if($examInfo->ExamType<3)
            $questions = Questions::all();
        else {
            $examInfo->ExamType==3 ? $ModuleID = 3 : '';
            $examInfo->ExamType==4 ? $ModuleID = 2 : '';
            $examInfo->ExamType==5 ? $ModuleID = 1 : '';
            $examInfo->ExamType==6 ? $ModuleID = 4 : '';
            $examInfo->ExamType==7 ? $ModuleID = 5 : '';
            $examInfo->ExamType==8 ? $ModuleID = 6 : '';
            $questions = Questions::where('ModuleID',$ModuleID)->get();
        }
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
                    $ExamID = request()->ExamID;
                    $checkExist = QuestionDetails::where('QuestionID',$questions->QuestionID)
                        ->where('ExamID',$ExamID);
                    $buttons = '<a href="javascript:void(0)" id="edit" data-id="' . $questions->QuestionID . '" data-original-title="Edit" class="btn btn-sm btn-warning btn-edit"><i class="glyphicon glyphicon-eye-open"></i></a>
                        ';
                    if(count($checkExist->get())!=0)
                        $buttons .= '<a href="javascript:void(0)" id="delete"  data-id="' . $questions->QuestionID . '" data-original-title="Delete" class="btn btn-sm btn-danger btn-delete"><i class="glyphicon glyphicon-minus"></i></a>';
                    else
                        $buttons .= '<a href="javascript:void(0)" id="add"  data-id="' . $questions->QuestionID . '" data-original-title="Add" class="btn btn-sm btn-success btn-add"><i class="glyphicon glyphicon-plus"></i></a>';
                    return $buttons;
                })
                ->rawColumns(['action', 'QuestionContent'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function manualCompose($ExamID)
    {
        //return $ExamID;
        $exam = Exams::where('ExamID', $ExamID)->first();
        if ($exam)
            return view('admin.examManualCompose')
                ->with(['exam' => $exam]);
        return view('errors.ad404');
    }

    public function addQuestionToExam($ExamID, $QuestionID)
    {
        if(request()->ajax()) {
            $qd = new QuestionDetails;
            $qd->ExamID = $ExamID;
            $qd->QuestionID = $QuestionID;
            $result = $qd->save();
            return response()->json(['result' => $result, 'message' => 'Thêm thành công!']);
        }
        return view('errors.ad404');
    }

    public function countQuestionsInModuleByExam($ExamID)
    {
        $Module1 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 1)
            ->get();
        $Module2 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 2)
            ->get();
        $Module3 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 3)
            ->get();
        $Module4 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 4)
            ->get();
        $Module5 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 5)
            ->get();
        $Module6 = DB::table('questiondetails as qd')
            ->join('questions as q', 'qd.QuestionID', '=', 'q.QuestionID')
            ->select('q.QuestionID')
            ->where('qd.ExamID', '=', $ExamID)
            ->where('q.ModuleID', '=', 6)
            ->get();
        return response()->json([
            'module1' => count($Module1),
            'module2' => count($Module2),
            'module3' => count($Module3),
            'module4' => count($Module4),
            'module5' => count($Module5),
            'module6' => count($Module6),
        ]);
    }

    public function autoCompose($ExamID)
    {
        $examInfo = Exams::where('ExamID', $ExamID)->first();
        if ($examInfo->ExamType == 1) {

            for ($i = 1; $i <= 6; $i++) {
                $questions = Questions::where('ModuleID', $i)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();
                foreach ($questions as $q) {
                    $qd = new QuestionDetails;
                    $qd->ExamID = $ExamID;
                    $qd->QuestionID = $q->QuestionID;
                    if (!$qd->save())
                        return response()->json(['status' => 0, 'message' => 'Lỗi']);
                }
            }
            return response()->json(['status' => 1, 'message' => 'Thành công!']);
        } elseif ($examInfo->ExamType == 2) {
            $idArr = array();
            $i = 1;
            while(1)
            {
                if($i>$examInfo->TotalQuestions)
                    break;
                $question = Questions::select('QuestionID')
                    ->inRandomOrder()
                    ->first();
                if(in_array($question->QuestionID,$idArr))
                    continue;
                array_push($idArr, $question->QuestionID);
                $qd = new QuestionDetails;
                $qd->ExamID = $ExamID;
                $qd->QuestionID = $question->QuestionID;
                if (!$qd->save())
                    return response()->json(['status' => 0, 'message' => 'Lỗi']);
                $i++;
            }
            return response()->json(['status' => 1, 'message' => 'Thành công!']);
        } else {
            $examInfo->ExamType==3 ? $ModuleID = 3 : '';
            $examInfo->ExamType==4 ? $ModuleID = 2 : '';
            $examInfo->ExamType==5 ? $ModuleID = 1 : '';
            $examInfo->ExamType==6 ? $ModuleID = 4 : '';
            $examInfo->ExamType==7 ? $ModuleID = 5 : '';
            $examInfo->ExamType==8 ? $ModuleID = 6 : '';
            $idArr = array();
            $i = 1;
            while(1)
            {
                if($i>$examInfo->TotalQuestions)
                    break;
                $question = Questions::select('QuestionID')
                    ->where('ModuleID',$ModuleID)
                    ->inRandomOrder()
                    ->first();
                if(in_array($question->QuestionID,$idArr)) {
                    continue;
                }
                array_push($idArr, $question->QuestionID);
                $qd = new QuestionDetails;
                $qd->ExamID = $ExamID;
                $qd->QuestionID = $question->QuestionID;
                if (!$qd->save())
                    return response()->json(['status' => 0, 'message' => 'Lỗi']);
                $i++;
            }
            return response()->json(['status' => 1, 'message' => 'Thành công!']);
        }
    }
}
