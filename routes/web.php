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

// SessionController: login

Route::get('/login', ['as' => 'login', 'uses' => 'SessionController@create']);

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

// RegistrationController: register

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store'); // add a user

// SuggestionController: support

Route::get('/suggestion', 'SuggestionController@create');

Route::post('/suggestion', 'SuggestionController@store');

Route::delete('/suggestion', 'SuggestionController@destroy'); // delete suggestion // TODO: falta usarlo

// BalanceController

Route::get('/balance', 'BalanceController@create');

Route::post('/balance', 'BalanceController@show');

// RechargeController

Route::get('/recharge/{key}/{sort}', 'RechargeController@create');

// SafetyController

Route::get('/safety', 'SafetyController@create');

// ManagementController

Route::get('/management', 'ManagementController@create');

Route::delete('/user/{id}', 'ManagementController@destroyUser');

Route::delete('/type/{id}', 'ManagementController@destroyType');

Route::delete('/suggestion/{id}', 'ManagementController@destroySuggestion');

// WebstoreController: cart

Route::delete('/remove', 'WebstoreController@removeFromCart');

Route::post('/add/{id}', 'WebstoreController@addToCart');

Route::post('/minus/{id}/{rowId}', 'WebstoreController@minus');

Route::delete('/destroy', 'WebstoreController@destroyCart');

// PaypalController

Route::get('/checkout', 'PaypalController@payWithpaypal'); // TODO: change by POST

Route::get('/status', 'PaypalController@getPaymentStatus');

// CardController

Route::get('/mycards', 'CardController@create');

// MetroguaguaController

Route::get('/metroguagua', 'MetroguaguaController@create');

// ScheduleController

Route::get('/schedule', 'ScheduleController@create');

Route::get('/search', 'ScheduleController@search');
