<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                    $test = '<button class="btn btn-xs btn-warning btn-edit" name="edit-' . $questions->QuestionID . '"><i class="glyphicon glyphicon-edit"></i> Sửa</button>
                        <button class="btn btn-xs btn-danger btn-delete" name="delete-' . $questions->QuestionID . '"><i class="glyphicon glyphicon-trash"></i> Xóa</button>';
                    return $test;
                })
                ->rawColumns(['action', 'QuestionContent'])
                ->make(true);
        }
        return view('errors.404');
    }

}
