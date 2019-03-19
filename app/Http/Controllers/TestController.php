<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Questions;

class TestController extends Controller
{
    public function index()
    {
        $questions = Questions::paginate(10);
        return view('paginateTest')->with('questions',$questions);
    }
}
