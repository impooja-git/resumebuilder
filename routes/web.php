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
    return view('main');
});
Route::get('/home', 'homecontroller@index')->name('home');

Auth::routes();

// Route::get('user-detail/create', 'UserDetailController@create')->middleware('auth')->name('user-detail.create');


// Route::post('user-detail', 'UserDetailController@store')->middleware('auth');
// Route::get('education/create', 'EducationController@create')->middleware('auth')->name('education.create');
// Route::post('education', 'EducationlController@store')->middleware('auth');

Route::resource('education', 'EducationController')->middleware('auth');
Route::resource('user-detail', 'UserDetailController')->middleware('auth');
Route::resource('user-detail', 'UserDetailController')->middleware('auth');
Route::resource('experience', 'ExperienceController')->middleware('auth');
Route::resource('skill', 'SkillController')->middleware('auth');


