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


Route::get('/', function()
{
	return View::make('main.hello');
});

//loggout
Route::get('/logout', function()
{
	return View::make('main.hello');
});



/*Route::get('worker', function()
{
	return View::make('main.hello');
});
*/

//client routes

Route::get('/worker', array('uses' => 'WorkerController@workerprofile'));

Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@workerprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));