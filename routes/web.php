<?php

use App\front;

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
    $front = front::find(1);
    return view('welcome')->with('front', $front);
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

Route::resource('subject', 'subjectController');

Route::resource('semester', 'semesterController');

Route::resource('front', 'frontController');

Route::put('front/updateLogo/{id}', 'frontController@updateLogo')->name('front.updateLogo');
Route::put('front/aboutImg/{id}', 'frontController@aboutImg')->name('front.aboutImg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

