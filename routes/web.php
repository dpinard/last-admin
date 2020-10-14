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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'Rcheck:admin'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/{user}/{role}/{order}', 'AdminController@update');
    
});

Route::group(['middleware' => 'Rcheck:modérateur'], function(){
    Route::get('/moderateur', 'modérateurController@index');
    Route::post('/moderateur/update/{post}', 'modérateurController@update');
});

