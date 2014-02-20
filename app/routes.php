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
<<<<<<< HEAD
=======

//loggout
>>>>>>> origin/Call-Log
Route::get('/logout', function()
{
	return View::make('main.hello');
});
<<<<<<< HEAD
Route::get('/main', function()
{
	return View::make('main.main')->with('pagetitle', 'Main Hub');
});
=======

>>>>>>> origin/Call-Log


/*Route::get('worker', function()
{
<<<<<<< HEAD
	return View::make('worker.worker')->with('pagetitle', 'Main Hub');
=======
	return View::make('main.hello');
>>>>>>> origin/Call-Log
});
*/

<<<<<<< HEAD
/****************
 * Client Routes
 ****************/

Route::get('/clients', array('uses' => 'ClientController@clientLookup'));
=======
//client routes

Route::get('/worker', array('uses' => 'WorkerController@workerprofile'));

Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@workerprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));
>>>>>>> origin/Call-Log
