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

Route::get('/hai/ganteng', function () {
    return view('welcome'); //maksudnya welcome.blade.php
});

Route::get('/hello', function(){
    return "Hai Erza Ganteng";
});

Route::get('/hello/{nama}', function($nama){
    return "Hai ".$nama;
});

Route::get('/hellos/{nama}', 'EmployeeController@hellos');

Route::get('/hello/{nama1}/{nama2}', function($nama1, $nama2){
    return "Hai ".$nama1." dan ".$nama2;
});

Route::post('/contohpost', function(){
    return "post";
});

// Route::get('/home/index', function(){
//     return view('index');
// })->name('index');

// Route::get('/home/create', function(){
//     return view('create');
// });

Route::get('/index', 'EmployeeController@index')->name('index');
Route::get('/create', 'EmployeeController@create')->name('create');
Route::post('/store', 'EmployeeController@store')->name('store');
Route::post('/delete/{id}', 'EmployeeController@delete')->name('delete');

// Route::patch('/contohpost', function(){
//     return "post";
// });