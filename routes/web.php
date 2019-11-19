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

// PageController

Route::get('/', 'PageController@launchIndexView');

// SessionController

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

// RegistrationController

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

// SuggestionController

Route::get('/suggestion', 'SuggestionController@create');

Route::post('/suggestion', 'SuggestionController@store');

Route::delete('/suggestion', 'SuggestionController@destroy'); // TODO: falta usarlo
