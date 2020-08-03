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

/************************
 Admin Route Option 
*************************/

Route::get('/Admin', 'AdminController@index');
Route::get('/Admin/theme-options', 'AdminController@theme_options');
Route::post('/Admin/theme-options', 'AdminController@updateOption');
Route::get('/Admin/about', 'AdminController@aboutpage');



/************************
 Fontend Route Option 
*************************/
Route::get('/', function () { 	return view('front.welcome'); });
Route::get('/about', function () {     return view('front.about'); });
Route::get('/howitworks', function () {     return view('front.howitwork'); });
Route::get('/tutors', function () {    return view('front.tutors'); });
Route::get('/fee', function () {    return view('front.fee'); });
Route::get('/contact', function () {     return view('front.contact');});
Route::get('/learn', function () {     return view('front.learn');});
Route::get('/teach', function () {     return view('front.teach');});
Route::get('/subjects', 'HomeController@subjects' );
Route::get('/AddSubjects', function () {     return view('admin.subjects');});
Route::post('/addSubject', 'HomeController@addSubjects');

Route::get('/tutor-register', function () {     return view('users.tutor-register');});
Route::get('/student-register', function () {     return view('users.student-register');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/***********************
User Dashboard
************************/

Route::get('/student/profile', function () {     return view('users.student.profile');});
Route::get('/student/student-edit-account', function () {     return view('users.student.editaccount');});
Route::get('/student/lessons ', function () {     return view('users.student.courses');});
Route::get('/student/my-account ', function () {     return view('users.student.my-account');});
Route::get('/student/credit', function () {     return view('users.student.credit');});

Route::get('/tutor/my-account', function () {     return view('users.tutor.my-account');});
Route::get('/tutor/profile', function () {     return view('users.tutor.profile');});