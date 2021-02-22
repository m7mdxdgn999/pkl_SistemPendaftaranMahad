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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/pendaftaran', function () {
//     return view('pendaftaran');
// });


// Route::group(['prefix' => 'admin'], function(){
    // Route::resource('student', 'MahasiswaController');
// });





Route::get('/pendaftaran', 'MahasiswaController@home');
Route::get('/index', 'MahasiswaController@index');
Route::get('/pendaftaran', 'MahasiswaController@create');
Route::get('/detail/{student}', 'MahasiswaController@show');
Route::get('/edit/{student}', 'MahasiswaController@edit');
Route::post('store', 'MahasiswaController@store' );
Route::put('update/{student}', 'MahasiswaController@update');
Route::delete('delete/{student}', 'MahasiswaController@destroy');
Route::get('/search', 'MahasiswaController@search');
// route::get('student/{student}'. 'MahasiswaController@edit')->name('student.edit');
// route::put('student/{student}'. 'MahasiswaController@edit')->name('student.update');