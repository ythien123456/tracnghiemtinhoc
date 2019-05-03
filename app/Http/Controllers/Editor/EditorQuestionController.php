<?php

namespace App\Http\Controllers\Editor;

use App\Http\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorQuestionController extends Controller
{
    public function index()
    {
        return view('editor.questions');
    }
}
