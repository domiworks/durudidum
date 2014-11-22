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

Route::group(array('prefix' => 'test'), function()
{
    // home
	Route::get('/home', function()
	{
		return View::make('pages.front_end.home.home');
	});
	// search_flight_hotel
	Route::get('/search_flight_hotel', function()
	{
		return View::make('pages.front_end.search_flight_hotel.search_flight_hotel');
	});
});
