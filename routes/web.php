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



// route for the default dashboard
Route::get('/school/dashboard', 'SchoolController@dashboard');


// route for the student dashboard
Route::get('/school/student', 'SchoolController@student');



// route for the teacher dashboard
Route::get('/school/teacher', 'SchoolController@teacher');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


