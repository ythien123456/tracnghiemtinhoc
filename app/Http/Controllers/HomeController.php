<?php

namespace App\Http\Controllers;

use App\Http\Models\Accounts;
use App\Http\Models\Exams;
use App\Http\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalPosts = count(Posts::where('Status',1)->get());
        $totalAccounts = count(Accounts::all());
        $totalExams = count(Exams::where('Status', '1')->get());
        $totalEditors = count(Accounts::where('Role', '2')->get());
        $newExams = Exams::getNewExams()->get();
        return view('homepage')
            ->with(['totalPosts' => $totalPosts,
                'totalAccounts' => $totalAccounts,
                'totalExams' => $totalExams,
                'totalEditors' => $totalEditors,
                'newExams' => $newExams]);
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showAbout()
    {
        return view('about');
    }
}
