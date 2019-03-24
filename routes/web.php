<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::get('/login.html', 'LoginController@showLogin')->name('login');
Route::get('logout.html', 'LoginController@logout')->name('logout');
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('/register.html', 'RegisterController@showRegister');
Route::post('register', 'RegisterController@postRegister');
Route::group(array('prefix' => 'check'), function () {
    Route::post('check-email', 'RegisterController@checkEmail');
});


Route::group(array('prefix' => 'de-tong-hop'), function () {
    Route::get('/', function () {
        return view('examList')
            ->with(['examType' => 'Đề tổng hợp', 'examTypeID' => 2]);
    });
    Route::get('th-{examID}.html', 'ExamController@showQuestionsByExamID');
    Route::post('th-{examID}.html/submit', 'ExamController@submitExamAndCalculateScore');
});

Route::group(array('prefix' => 'de-chuan'), function () {
    Route::get('/', function () {
        return view('examList')
            ->with(['examType' => 'Đề chuẩn','examTypeID' => 1]);
    });
    Route::get('/c-{examID}.html', 'ExamController@showQuestionsByExamID');
});

Route::group(array('prefix' => 'de-theo-module'), function () {
    Route::get('/internet', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - INTERNET','examTypeID' => 3]);
    });
    Route::get('/he-dieu-hanh', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - HỆ ĐIỀU HÀNH','examTypeID' => 4]);
    });
    Route::get('/cong-nghe-thong-tin', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - CNTT','examTypeID' => 5]);
    });
    Route::get('/word', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - WORD','examTypeID' => 6]);
    });
    Route::get('/excel', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - EXCEL','examTypeID' => 7]);
    });
    Route::get('/powerpoint', function () {
        return view('examList')
            ->with(['examType' => 'Đề theo module - POWERPOINT','examTypeID' => 8]);
    });
    Route::get('/', function () {
        return view('examList')
            ->with(['examType', 'Đề tổng hợp']);
    });
});

Route::get('/contact', function () {
    if (View::exists('contact')) {
        return view('contact');
    } else {
        return 'Trang liên hệ đang bị lỗi, bạn vui lòng quay lại sau';
    }
});

Route::get('/paginateTest','TestController@index');