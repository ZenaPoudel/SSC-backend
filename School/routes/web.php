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
    return view('welcome');
});

Route::get('/events','eventController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/connect','eventController@connect');
Route::get('/viewAttendance','attendanceController@View');
Route::get('/addAttendance','attendanceController@Add');
Route::get('/editAttendance','attendanceController@Editdd');

Route::get('/testAttendance','studentController@test');