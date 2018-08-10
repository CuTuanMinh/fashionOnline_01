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
    return view('home');
});

Route::get('users/show', ['as' => 'users.show', 'uses' => 'UsersController@show']);

Route::get('users/edit', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::post('users/edit', ['as' => 'users.update', 'uses' => 'UsersController@update']);

Auth::routes();

Route::resource('posts', 'PostsController');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'), function () {
    Route::get('users', 'UserController@index');
});

Route::get('/home', 'HomeController@index')->name('home');
