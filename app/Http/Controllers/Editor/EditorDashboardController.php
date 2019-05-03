<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorDashboardController extends Controller
{
    public function index()
    {
        return view('editor.dashboard');
    }
}
