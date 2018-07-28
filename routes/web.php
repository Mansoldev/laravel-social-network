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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@home');
Route::get('/messages/{message}', 'MessagesController@show');
Route::post('/messages/create', 'MessagesController@create');

Route::get('/about', function () {
    return view('about');
});

