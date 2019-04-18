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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login.html', 'LoginController@showLogin')->name('login');
Route::get('logout.html', 'LoginController@logout')->name('logout');
Route::post('login.html', 'LoginController@postLogin')->name('postLogin');
Route::get('register.html', 'RegisterController@showRegister')->name('register');
Route::post('register.html', 'RegisterController@postRegister')->name('postRegister');
Route::group(array('prefix' => 'check'), function () {
    Route::post('check-email', 'RegisterController@checkEmail');
});
Route::get('profile.html','AccountController@profile')->name('profile');
Route::get('info.html','AccountController@profile')->name('info');
Route::get('score.html','AccountController@getScoreHistory')->name('score');
Route::get('change-password.html','AccountController@profile')->name('change-password');
Route::post('submitChangeInfo', 'AccountController@changeInfo');
Route::post('submitChangePassword', 'AccountController@changePassword');

Route::group(['prefix' => 'e', 'as' => 'exams'], function() {
    Route::get('/', function () {
        return view('errors.404');
    });
    Route::get('/{examTypeSlug}', ['as' => 'examList', 'uses' => 'ExamController@show']);
    Route::get('/{examTypeSlug}/{examID}-{examSlug}.html',['as' => 'examDisplay', 'uses' => 'ExamController@showQuestionsByExamID']);
    Route::post('/{examTypeSlug}/{examID}-{examSlug}.html/submit',['as' => 'examTake', 'uses' => 'ExamController@submitExamAndCalculateScore']);
});

Route::group(['prefix' => 'p', 'as' => 'posts'], function () {
    Route::get('/', 'PostController@index');
    Route::get('/{postSlug}.html','PostController@show');
    Route::group(['prefix' => 'modules'], function() {
        Route::get('/{moduleID}','PostController@getPostsByModuleID');
    });
});

//Route::get('/contact.html', 'HomeController@showContact')->name('contact');
Route::get('/about.html', 'HomeController@showAbout')->name('about');

Route::group(['prefix' => 'th-editor'], function () {
    Route::get('/', function () {
       return 'Giao diện biên tập viên';
    });
});
Route::group(['prefix' => 'tn-admin-th'], function () {
    Route::get('/', function () {
       return 'Giao diện admin';
    });
});
Route::get('/404.html',function () {
    return view('errors.404');
})->name('404');
Route::get('/errors.html',function () {
    return view('errors.errors');
})->name('errors');

Route::get('/test/{id}', 'TestController@show');
Route::get('/paginateTest', 'TestController@index');