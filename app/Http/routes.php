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

Route::get('/', function() { 
	return view('starter'); 
});

Route::resource('cities', 'CityController');
Route::resource('countries', 'CountryController');
Route::resource('authors', 'AuthorController');
Route::resource('books', 'BookController');
Route::resource('editors', 'EditorController');
Route::resource('formats', 'FormatController');
Route::resource('themes', 'ThemeController');
Route::resource('categories', 'CategoryController');
Route::resource('periods', 'PeriodController');


