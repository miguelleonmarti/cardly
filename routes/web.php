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

Route::get('/login', ['as' => 'login', 'uses' => 'SessionController@create']);

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

// RegistrationController

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

// SuggestionController

Route::get('/suggestion', 'SuggestionController@create');

Route::post('/suggestion', 'SuggestionController@store');

Route::delete('/suggestion', 'SuggestionController@destroy'); // TODO: falta usarlo

// BalanceController

Route::get('/balance', 'BalanceController@create');

Route::post('/balance', 'BalanceController@show'); // TODO: POST o GET?

// RechargeController

Route::get('/recharge', 'RechargeController@create');

// ManagementController

Route::get('/management', 'ManagementController@create');

Route::delete('/user/{id}', 'ManagementController@destroyUser');

Route::delete('/type/{id}', 'ManagementController@destroyType');

Route::delete('/suggestion/{id}', 'ManagementController@destroySuggestion');
