<?php


use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});




// route for the index page
Route::get('/school', 'SchoolController@index');



// route for the success dashboard
Route::get('/school/success', 'SchoolController@register');


// route for the student dashboard
Route::get('/school/student', 'SchoolController@student')->middleware('auth');



// route for the teacher dashboard
Route::get('/school/teacher', 'SchoolController@teacher')->middleware('auth');



// routes for uploading results dashboard
Route::get('/school/exams/upload', 'ExamsController@auth')->middleware('teacher');


// routes for Exams dashboard
Route::get('/school/exams', 'ExamsController@index')->middleware('student');



// routes for Fees dashboard
Route::get('/school/fees', 'FeesController@index')->middleware('student');



// routes to handle bills
Route::post('/school/fees', 'FeesController@handle')->middleware('student');



// routes for Courses dashboard
Route::get('/school/courses', 'CourseController@index')->middleware('auth');



// routes for changing pictures
Route::post('/school/pic', 'PicController@index')->middleware('auth');













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


