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



Route::get('/resume', function () {
    return view('resume');
});

Route::get('/notice', function () {
    return view('notice');
});

Route::resource('student', 'StudentController');

Route::resource('lecture', 'lectureController');

Route::resource('bach', 'bachController');

Route::resource('notice', 'noticeController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
