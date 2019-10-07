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

Auth::routes();

Route::get('/home', 'MembersController@index')->name('home');
Route::get('/list', 'MembersController@list');
Route::post( '/store', 'MembersController@store' );
Route::post( '/edit/{id}', 'MembersController@edit' );
Route::post( '/update', 'MembersController@update' );
Route::post( '/delete', 'MembersController@delete' );