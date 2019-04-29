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
Route::get('profile.html', 'AccountController@profile')->middleware('checkLogin')->name('profile');
Route::get('info.html', 'AccountController@profile')->middleware('checkLogin')->name('info');
Route::get('score.html', 'AccountController@getScoreHistory')->middleware('checkLogin')->name('score');
Route::get('change-password.html', 'AccountController@profile')->middleware('checkLogin')->name('change-password');
Route::post('submitChangeInfo', 'AccountController@changeInfo')->middleware('checkLogin');
Route::post('submitChangePassword', 'AccountController@changePassword')->middleware('checkLogin');

Route::group(['prefix' => 'e', 'as' => 'exams'], function () {
    Route::get('/', function () {
        return view('errors.404');
    });
    Route::get('/{examTypeSlug}', ['as' => 'examList', 'uses' => 'ExamController@show']);
    Route::get('/{examTypeSlug}/{examID}-{examSlug}.html', ['as' => 'examDisplay', 'uses' => 'ExamController@showQuestionsByExamID']);
    Route::post('/{examTypeSlug}/{examID}-{examSlug}.html/submit', ['as' => 'examTake', 'uses' => 'ExamController@submitExamAndCalculateScore']);
});

Route::group(['prefix' => 'p', 'as' => 'posts'], function () {
    Route::get('/', 'PostController@index');
    Route::get('/{postSlug}.html', 'PostController@show');
    Route::group(['prefix' => 'modules'], function () {
        Route::get('/{moduleID}', 'PostController@getPostsByModuleID');
    });
});

//Route::get('/contact.html', 'HomeController@showContact')->name('contact');
Route::get('/about.html', 'HomeController@showAbout')->name('about');

Route::group(['prefix' => 'th-editor'], function () {
    Route::get('/', function () {
        return 'Giao diện biên tập viên';
    });
});
Route::get('adminLogin', 'Admin\AdminLoginController@showLogin')->name('adminLogin');
Route::post('postAdminLogin', 'Admin\AdminLoginController@postLogin')->name('postAdLogin');
Route::get('getAdminLogout', 'Admin\AdminLoginController@getLogout')->name('getAdLogout');

Route::group(['prefix' => 'tn-admin-th', 'middleware' => 'checkAdminLogin'], function () {
    Route::get('/', 'Admin\DashboardController@show');
    Route::get('/dashboard', 'Admin\DashboardController@show')->name('adminDashboard');
    Route::get('/questions', 'Admin\AdminQuestionController@index');
    Route::get('/exams', 'Admin\AdminExamController@index');
    Route::get('exams/{ExamID}', 'Admin\AdminExamController@showSingleExam')->name('viewExam');
    Route::get('/accounts', 'Admin\AdminAccountController@index');
    Route::get('/posts', 'Admin\AdminPostController@index');
    Route::get('/posts/view/{PostID}', 'Admin\AdminPostController@showSinglePost')->name('viewPost');
    Route::get('/posts/write', 'Admin\AdminPostController@write')->name('writePost');

    /* AJAX Requests */
    Route::get('getQuestions', 'Admin\AdminQuestionController@getQuestions')->name('questionsTable');
    Route::get('questions/edit/{ExamID}', 'Admin\AdminQuestionController@edit')->name('editQuestion');
    Route::post('questions/store', 'Admin\AdminQuestionController@store')->name('storeQuestion');
    Route::get('questions/delete/{ExamID}', 'Admin\AdminQuestionController@destroy')->name('deleteQuestion');

    Route::get('getExams', 'Admin\AdminExamController@getExams')->name('examsTable');
    Route::get('getSingleExam/{ExamID}', 'Admin\AdminExamController@getSingleExam')->name('singleExamTable');
    Route::get('exams/delete/{ExamID}', 'Admin\AdminExamController@destroy')->name('deleteExam');
    Route::get('exams/edit/{ExamID}', 'Admin\AdminExamController@edit')->name('editExam');
    Route::post('exams/store', 'Admin\AdminExamController@store')->name('storeExam');
    Route::get('exams/{ExamID}/remove/{QuestionID}', 'Admin\AdminExamController@removeExamQuestion')
        ->name('removeExamQuestion');
    Route::get('exam/sumQuestions/{ExamID}','Admin\AdminExamController@sumQuestions')->name('sumQuestions');

    Route::get('getAccounts', 'Admin\AdminAccountController@getAccounts')->name('accountsTable');
    Route::get('accounts/edit/{AccountID}', 'Admin\AdminAccountController@edit')->name('editAccount');
    Route::get('accounts/delete/{AccountID}', 'Admin\AdminAccountController@destroy')->name('deleteAccount');
    Route::post('accounts/store', 'Admin\AdminAccountController@store')->name('storeAccount');

    Route::get('getPosts', 'Admin\AdminPostController@getPosts')->name('postsTable');
    Route::post('/posts/edit', 'Admin\AdminPostController@edit')->name('editPost');
    Route::post('/posts/create', 'Admin\AdminPostController@create')->name('createPost');
    Route::get('/posts/delete/{PostID}', 'Admin\AdminPostController@destroy')->name('deletePost');
    /* END AJAX Requests */
});
Route::get('/404.html', function () {
    return view('errors.404');
})->name('404');
Route::get('/errors.html', function () {
    return view('errors.errors');
})->name('errors');

Route::get('/test', function () {
    return view('test');
});
Route::get('/paginateTest', 'TestController@index');