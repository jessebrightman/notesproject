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
	return View::make('layouts/basic');
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
Route::get('userpanel/dashboard', function(){ return View::make('userpanel.dashboard'); });

// Applies auth filter to the routes within admin/
Route::when('userpanel/*', 'auth');

Route::resource('notes', 'NotesController', ['only'=> ['index','create','store', 'show', 'edit', 'update', 'destroy']]);

// Notes routes
Route::get('notes/index', 'NotesController@index');
Route::post('notes', 'NotesController@store');
Route::get('notes/create', 'NotesController@create');
Route::post('notes/create', 'NotesController@store');
Route::get('notes/show', 'NotesController@show');
Route::get('notes/edit', 'NotesController@edit');
Route::post('notes/forgot_password', 'NotesController@doForgotPassword');
Route::get('notes/update', 'NotesController@update');
Route::post('notes/destroy', 'NotesController@destroy');

// Captcha Route

Route::any('/captcha-test', function()
{

    if (Request::getMethod() == 'POST')
    {
        $rules =  array('captcha' => array('required', 'captcha'));
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        }
        else
        {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $content = Form::open(array(URL::to(Request::segment(1))));
    $content .= '<p>' . HTML::image(Captcha::img(), 'Captcha image') . '</p>';
    $content .= '<p>' . Form::text('captcha') . '</p>';
    $content .= '<p>' . Form::submit('Check') . '</p>';
    $content .= '<p>' . Form::close() . '</p>';
    return $content;

});