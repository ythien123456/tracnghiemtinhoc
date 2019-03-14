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
    return view('home');
});

Route::get('/login', 'LoginController@showLogin');
Route::get('logout', 'LoginController@logout');
Route::post('login', 'LoginController@postLogin');
Route::get('/register', 'RegisterController@showRegister');
Route::post('register', 'RegisterController@postRegister');
Route::group(array('prefix' => 'check'), function () {
    Route::post('check-email', 'RegisterController@checkEmail');
});


Route::group(array('prefix' => 'de-tong-hop'), function () {
    Route::get('/', function () {
        return view('examList')
            ->with('examType', 'Đề tổng hợp');
    });
    Route::get('/th-{examID}.html', 'ExamController@showQuestionsByExamID');
    Route::post('/th-{examID}.html/submit', 'ExamController@submitExamAndCalculateScore');
});

Route::group(array('prefix' => 'de-chuan'), function () {
    Route::get('/', function () {
        return view('examList')
            ->with('examType', 'Đề chuẩn');
    });
});

Route::group(array('prefix' => 'de-theo-module'), function () {
    Route::get('/internet', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - INTERNET');
    });
    Route::get('/he-dieu-hanh', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - HỆ ĐIỀU HÀNH');
    });
    Route::get('/cong-nghe-thong-tin', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - CNTT');
    });
    Route::get('/word', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - WORD');
    });
    Route::get('/excel', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - EXCEL');
    });
    Route::get('/powerpoint', function () {
        return view('examList')
            ->with('examType', 'Đề theo module - POWERPOINT');
    });
    Route::get('/', function () {
        return view('examList')
            ->with('examType', 'Đề tổng hợp');
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
