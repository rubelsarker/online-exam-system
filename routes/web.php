<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user');
});
Route::get('layout', function () {
    return view('layouts.main');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('teacherexam','Teacher\ExamController');
Route::resource('teacherques','Teacher\QuesController');
Route::PATCH('add-question/{id}','Teacher\QuesController@addQuestion');
Route::get('set-question/{id}','Teacher\QuesController@setQuestion');
Route::resource('studentexam','Student\ExamController@getExam');
Route::get('student-exam/{exam_id}','Student\ExamController@getExam');
Route::post('/answer-submit','Student\ExamController@answersubmit');
Route::get('/search-exam','Student\ExamController@search_exam');
Route::post('/match','Student\ExamController@match');
Route::get('/answer-review','Student\ExamController@answer_review');

//Admin Route
Route::get('/admin','Admin\AdminController@admin_login');
Route::post('/admin-dashboard','Admin\AdminController@dashboard');
Route::get('/dashboard','Admin\SuperAdminController@index');
Route::get('/logout','Admin\SuperAdminController@logout');
//slider admin
Route::get('/add-slider','Admin\SliderController@add_slider');
Route::post('/save-slider','Admin\SliderController@save_slider');
Route::get('/slider-index','Admin\SliderController@slider_index');
Route::get('sliderunactive/{id}','Admin\SliderController@unactive');
Route::get('slideractive/{id}','Admin\SliderController@active');
Route::get('sliderdelete/{id}','Admin\SliderController@delete');

//user
Route::get('/profile', 'UserController@get_profile');
Route::post('/profile-update', 'UserController@update_profile');
Route::get('/password-change', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/password-change', 'Auth\ChangePasswordController@changePassword')->name('password.update');




