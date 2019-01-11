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

Route::get('job','Requests@create');
Route::post('job','Requests@store');
Route::get('datacreate/{slug}','Requests@datacreate');
Route::post('data','Requests@datos');


//secund_step
Route::get('second_step/{slug}','Requests@second_step');
Route::post('second_step/{slug}','Requests@second_step'); //entrada



Route::get('send_data','Requests@input_data_bd'); //entrada
Route::post('send_data','Requests@input_data_bd'); //entrada
