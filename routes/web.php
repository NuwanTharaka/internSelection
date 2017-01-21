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

Route::post('/logout',[
    'uses' => 'UserController@logout',
    'as' => 'logout'
]);

Route::post('/UpdateInfo',[
    'uses' => 'UserController@UpdateInfo',
    'as' => 'UpdateInfo'
]);

Route::get('/StudentDashboard', [
    	'uses' => 'UserController@StudentDashboard',
		'as' => 'StudentDashboard',
		'middleware' => 'auth'
		]);	
Route::get('/CompanyDashboard', [
    	'uses' => 'UserController@coordinatorDashboard',
		'as' => 'CompanyDashboard',
		'middleware' => 'auth'
		]);

//by salaka
Route::post('/Data', [
    'uses' => 'UserController@Data',
    'as' => 'Data'
]);
Route::get('/studentCompany/{id}','UserController@company'
);
Route::post('/checked', [
    'uses' => 'UserController@Save',
    'as' => 'checked'
]);


Route::get('/Data', [
    'uses' => 'UserController@Data',
    'as' => 'Data'
]);
Route::get('/studentCompany/{id}',[
'uses' =>'UserController@company',
 'as' => 'studentCompany'
]);
Route::post('/checked', [
    'uses' => 'UserController@Save',
    'as' => 'checked'
]);


//by salaka ; coordinator perspective
Route::get('/getAssignedStudents', [
    'uses' => 'UserController@viewAssignedStudents',
    'as' => 'getAssignedStudents'
]);


