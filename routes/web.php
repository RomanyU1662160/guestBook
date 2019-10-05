<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'events', 'middleware' => 'auth', 'as' => 'event'], function () {
    Route::get('/all', "Eventcontroller@index")->name('.all');
    Route::get('/addnew', "Eventcontroller@create")->name('.addNew');
    Route::post('/addnew', "Eventcontroller@store");
});
