<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('users', 'UserController', ['only'=> ['index','create','store']]);

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

// Dashboard route
Route::get('dashboard', function(){ return View::make('dashboard'); });

// Applies auth filter to the routes within admin/
Route::when('userpanel/*', 'auth');

Route::resource('notes', 'NotesController', ['only'=> ['index','create','store', 'show', 'edit', 'destroy']]);

// Notes routes
Route::get('dashboard', 'NotesController@index');
Route::post('notes', 'NotesController@store');
Route::get('notes/create', 'NotesController@create');
Route::post('notes/create', 'NotesController@store');
Route::get('notes/show', 'NotesController@show');
Route::get('notes/edit', 'NotesController@edit');
Route::get('notes/update', 'NotesController@update');
Route::get('destroy/{id}', 'NotesController@destroy');
Route::get('destroy/image/{id}', 'NotesController@destroyImage');

Route::get('image/{id}', 'NotesController@image');

