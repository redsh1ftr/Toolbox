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

Route::get('/', function() { return View::make('main.hello'); });

Route::get('/logout', function() { return View::make('main.hello'); });

//client routes

Route::get('/worker', array('uses' => 'WorkerController@workerprofile'));

Route::get('marketing', array('as' => 'marketinghub', 'uses' => 'MarketingController@marketinghub'));

Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));

Route::get('/client/new_client', array('as' => 'clientcreate', 'uses' => 'ClientController@newclient'));

Route::post('/client/new_client/create', array('uses' => 'ClientController@addclient'));

Route::get('/client/list', array('as' => 'clientlist', 'uses' => 'ClientController@clientlist'));

Route::get('client/{id}', array('as' => 'clientprofile', 'uses' => 'ClientController@clientprofile'));

Route::get('client', array('as' => 'clienthub', 'uses' => 'ClientController@clienthub'));

Route::get('workorder/new/{id}', array('as' => 'new_workorder', 'uses' => 'WorkorderController@createworkorder'));

Route::get('services', array('as' => 'servicehub', 'uses' => 'ServicesController@servicehub'));

Route::get('services/medical', array('as' => 'medicallocation', 'uses' =>'ServicesController@medicallocation'));

Route::get('services/commercial', array('as' => 'commerciallocation', 'uses' =>'ServicesController@commerciallocation'));

Route::get('services/residential', array('as' => 'residentiallocation', 'uses' =>'ServicesController@residentiallocation'));

Route::post('services/medical/create', array('as' => 'createmedicallocation', 'uses' => 'ServicesController@addmedicallocation'));

Route::post('services/commercial/create', array('as' => 'createcommerciallocation', 'uses' => 'ServicesController@addcommerciallocation'));

Route::post('services/residential/create', array('as' => 'createresidentiallocation', 'uses' => 'ServicesController@addresidentiallocation'));