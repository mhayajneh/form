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
})->name('welcomePage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/submit/store','SubmitController@store')->name('storeSubmit');
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankYou');
