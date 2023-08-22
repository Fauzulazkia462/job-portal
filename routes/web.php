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

Route::GET('/', 'HomeController@index');
Route::GET('/contact', 'ContactController@index');
Route::GET('/about', 'AboutController@index');


// Route::get('/career', function () {
//     return view('career.index');
// });


// Route::get('/career/job-desc', function () {
//     return view('career.job_desc');
// });

// Route::get('/career/job-desc/input', function () {
//     return view('career.input');
// });




Route::GET('/career', 'CareerController@getVacancy')->name('getVac');
Route::POST('/career/job-desc', 'CareerController@desc' )->name('getDesc');
Route::POST('/career/job-desc/input', 'CareerController@input')->name('input');
Route::POST('/submit', 'CareerController@selesai') -> name('selesai');




