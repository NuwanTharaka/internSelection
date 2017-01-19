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


Route::post('/RegisterStudent', [
    	'uses' => 'UserController@RegisterStudent',
		'as' => 'RegisterStudent'
		]);
		
Route::post('/RegisterCoordinator', [
    	'uses' => 'UserController@RegisterCoordinator',
		'as' => 'RegisterCoordinator'
		]);		
		
Route::get('/RegisterCompany', [
    	'uses' => 'UserController@RegisterCompany',
		'as' => 'RegisterCompany'
		]);	
Route::post('/loginDetails',[
    'uses' => 'UserController@loginUser',
    'as' => 'SignIn'
]);