<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('testtodo', 'TodoparrotController@index');

Route::get('home', 'HomeController@index');

//Defines the seven routes associated with a RESTful controller
//Route::resources('lists', 'ListsControllers');
//Route::get('home/category/{category}', 'WelcomeController@category');
Route::get('home/category/{category}', ['as'=>'home.category', 'uses'=> 'WelcomeController@category']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
