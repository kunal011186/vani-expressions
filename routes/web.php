<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::get('/logout', function()
{
	Auth::logout();
});

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/', function () {
    	return view('admin.index');
	})->name('admin-home');
	Route::get('/create-post', 'PostController@create')->name('create-post');
	Route::post('/save-post', 'PostController@store')->name('save-post');
	Route::get('/all-posts', 'PostController@index')->name('admin-all-posts');
	Route::get('/delete-post/{id}', 'PostController@destroy')->name('delete-post');
	Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
});

Route::get('/{slug}', 'PostController@show')->name('show-post');