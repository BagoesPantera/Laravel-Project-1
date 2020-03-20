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

Route::get('/', 'PageController@home');
Route::get('/viewuser', 'UserController@index');
Route::get('/jsonuser', 'PageController@jsonuser');
Route::get('/inputuser', 'UserController@create');
Route::post('/inputuser', 'UserController@store');
Route::delete('/viewuser/{user}', 'UserController@destroy');
Route::get('/viewuser/{user}/edit', 'UserController@edit');
Route::put('/inputuser/{user}', 'UserController@update');


Route::get('/viewpost', 'PostController@index');
Route::get('/viewpost/{posts}', 'PostController@show');
Route::get('/jsonpost', 'PageController@jsonpost');
Route::delete('/viewpost/{posts}/delete', 'PostController@destroy');
Route::get('/inputpost', 'PostController@create');
Route::post('/inputpost', 'PostController@store');
Route::get('/viewpost/{posts}/edit', 'PostController@edit');
Route::put('/inputpost/{posts}', 'PostController@update');
Route::delete('/viewpost/{post}', 'PostController@destroy');