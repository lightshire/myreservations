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


/*
	Route Controllers (S)
*/
Route::resource('/', 'IndexController');
Route::resource('login', 'LoginController');
Route::resource('reservations', 'ReservationsController');

Route::controller('res-api', 'ReservationApiController');
Route::controller('admin', 'AdminController');

/*
	Route Controllers (E)
*/

/*
	Route Patterns (S)
*/
Route::when('admin/*', 'auth');
/*
	Route Patterns (E)
*/

Route::get('/test-route',function(){
	// ReservationApi::test();
	return ReservationApi::className();
});