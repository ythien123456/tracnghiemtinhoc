<?php

namespace App\Http\Controllers;

use App\Http\Models\Exams;
use App\Http\Models\ExamTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Questions;

class TestController extends Controller
{
    public function index()
    {
        $questions = Questions::where('ModuleID', '3')->paginate(10);
        return view('paginateTest')->with('questions', $questions);
    }

    public function show($id)
    {
        $exam = ExamTypes::all()->where('TypeSlug',$id);
        return view('test')->with('exam',$exam);
    }
}
