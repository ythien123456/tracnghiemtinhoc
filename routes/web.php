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
Route::post('login.html', 'LoginController@postLogin')->name('postLogin');
Route::get('register.html', 'RegisterController@showRegister')->name('register');
Route::post('register.html', 'RegisterController@postRegister')->name('postRegister');
Route::group(array('prefix' => 'check'), function () {
    Route::post('check-email', 'RegisterController@checkEmail');
});
Route::get('profile.html','AccountController@profile')->name('profile');

Route::group(['prefix' => 'e'], function() {
    Route::get('/', function () {
        return redirect(route('404'));
    });
    Route::get('/{examTypeSlug}', ['as' => 'examList', 'uses' => 'ExamController@show']);
    Route::get('/{examTypeSlug}/{examID}-{examSlug}.html',['as' => 'examDisplay', 'uses' => 'ExamController@showQuestionsByExamID']);
    Route::post('/{examTypeSlug}/{examID}-{examSlug}.html/submit',['as' => 'examTake', 'uses' => 'ExamController@submitExamAndCalculateScore']);
});

Route::group(['prefix' => 'p'], function () {
    Route::get('/', 'PostController@index')->name('allPosts');
    Route::get('/{postSlug}.html','PostController@show');
    Route::group(['prefix' => 'modules'], function() {
        Route::get('/{moduleID}','PostController@getPostsByModuleID');
    });
});

Route::get('/contact', function () {
    if (View::exists('contact')) {
        return view('contact');
    } else {
        return 'Trang liên hệ đang bị lỗi, bạn vui lòng quay lại sau';
    }
});

Route::get('/test/{id}','TestController@show');
Route::get('/paginateTest','TestController@index');
Route::get('/404.html',function () {
   return view('errors.404');
})->name('404');