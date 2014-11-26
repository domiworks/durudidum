<?php
use Carbon\Carbon;
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
Route::get('/tes', function (){
	$keyword = "ba";
	$keyword = Input::get('keyword');
		$result = City::where('nama_kota','LIKE','%'.$keyword.'%')->orWhere('nama_area','LIKE','%'.$keyword.'%')->get();
	
	echo $result;
});

Route::group(array('prefix' => 'test'), function()
{
    // home
	Route::get('/home', function()
	{
		return View::make('pages.front_end.home.home');
	});
	// search_flight_hotel
	Route::get('/view_search_flight_home', ['as' => 'view.search_flight_hotel' , 'uses' => 'search_flight_hotel_controller@view']);
	
	Route::get('/search_flight_hotel', function()
	{
		return View::make('pages.front_end.search_flight_hotel.search_flight_hotel');
	});
	// search_flight_hotel
	Route::get('/booking_flight', function()
	{
		return View::make('pages.front_end.booking_form.booking_flight');
	});
	Route::get('/booking_review_flight', function()
	{
		return View::make('pages.front_end.booking_form.booking_review_flight');
	});
	Route::get('/booking_hotel', function()
	{
		return View::make('pages.front_end.booking_form.booking_hotel');
	});
	Route::get('/booking_flight_hotel', function()
	{
		return View::make('pages.front_end.booking_form.booking_flight_hotel');
	});
	Route::get('/booking_review_hotel', function()
	{
		return View::make('pages.front_end.booking_form.booking_review_hotel');
	});
	Route::get('/booking_review_flight_hotel', function()
	{
		return View::make('pages.front_end.booking_form.booking_review_flight_hotel');
	});
	Route::get('/payment_hotel', function()
	{
		return View::make('pages.front_end.payment.payment_hotel');
	});
	Route::get('/payment_flight', function()
	{
		return View::make('pages.front_end.payment.payment_flight');
	});
	Route::get('/payment_flight_hotel', function()
	{
		return View::make('pages.front_end.payment.payment_flight_hotel');
	});
	Route::get('/getAirport', ['as' => 'allAirport', 'uses' => 'AirporstsController@getAllAirport']);
	Route::get('/getCity', ['as' => 'allCities', 'uses' => 'CitiesController@getAllCity']);
});
