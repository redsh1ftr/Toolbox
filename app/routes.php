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

//WORKER ROUTES


		Route::get('/worker', array('as' => 'workerhub', 'uses' => 'WorkerController@workerhub'));

		Route::get('/worker/{id}', array('as' => 'workerprofile', 'uses' => 'WorkerController@workerprofile'));

		Route::get('/worker/add/new', array('as' => 'displayaddworker', 'uses' => 'WorkerController@workeradd'));

		Route::get('/worker/list/show', array('as' => 'workerlist', 'uses' => 'WorkerController@workerlist'));

		//CREATE NEW WORKER

		Route::post('/worker/create', array('as' => 'addworker', 'uses' => 'WorkerController@addworker'));


//CLIENT ROUTES

		Route::get('/client/new_client', array('as' => 'clientcreate', 'uses' => 'ClientController@newclient'));

		Route::post('/client/new_client/create', array('uses' => 'ClientController@addclient'));

		Route::get('/client/list', array('as' => 'clientlist', 'uses' => 'ClientController@clientlist'));

		Route::get('client/{id}', array('as' => 'clientprofile', 'uses' => 'ClientController@clientprofile'));

		Route::get('client', array('as' => 'clienthub', 'uses' => 'ClientController@clienthub'));

//MARKETING ROUTES

		Route::get('marketing', array('as' => 'marketinghub', 'uses' => 'MarketingController@marketinghub'));

		Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

		Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

		Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

		Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

		Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));

//WORKORDER ROUTES

		Route::get('workorder/new/{id}', array('as' => 'new_workorder', 'uses' => 'WorkorderController@createworkorder'));


//SERVICE ROUTES

		Route::get('services', array('as' => 'servicehub', 'uses' => 'ServicesController@servicehub'));

	//MEDICAL SERVICE ROUTES

		Route::get('services/medical', array('as' => 'medicallocation', 'uses' =>'ServicesController@medicallocation'));

		Route::post('services/medical/create', array('as' => 'createmedicallocation', 'uses' => 'ServicesController@addmedicallocation'));

		Route::get('services/medical/problem/{id}', array('as' => 'medicalproblem', 'uses' => 'ServicesController@medicalproblems'));
		
		Route::post('services/medical/problem/create', array('as' => 'addmedicalproblem', 'uses' => 'ServicesController@addmedicalproblem'));

		Route::get('services/medical/problem/specificproblem/{id}', array('as' => 'medicalspecificproblem', 'uses' => 'ServicesController@medicalspecificproblem'));

		Route::post('services/medical/problem/specificproblem/create', array('as' => 'addmedicalspecificproblem', 'uses' => 'ServicesController@addmedicalspecificproblem'));

	//COMMERCIAL SERVICE ROUTES

		Route::get('services/commercial', array('as' => 'commerciallocation', 'uses' =>'ServicesController@commerciallocation'));

		Route::post('services/commercial/create', array('as' => 'createcommerciallocation', 'uses' => 'ServicesController@addcommerciallocation'));

		Route::get('services/commercial/problem/{id}', array('as' => 'commercialproblem', 'uses' =>'ServicesController@commercialproblems'));

		Route::post('services/commercial/problem/create', array('as' => 'addcommercialproblem', 'uses' => 'ServicesController@addcommercialproblem'));

		Route::get('services/commercial/problem/specificproblem/{id}', array('as' => 'commercialspecificproblem', 'uses' =>'ServicesController@commercialspecificproblem'));

		Route::post('services/commercial/problem/speficicproblem/create', array('as' => 'addcommercialspecificproblem', 'uses' => 'ServicesController@addcommercialspecificproblem'));



	//RESIDENTIAL SERVICE ROUTES

		Route::get('services/residential', array('as' => 'residentiallocation', 'uses' =>'ServicesController@residentiallocation'));

		Route::post('services/residential/create', array('as' => 'addresidentiallocation', 'uses' => 'ServicesController@addresidentiallocation'));

		Route::get('services/residential/problem/{id}', array('as' => 'residentialproblem', 'uses' =>'ServicesController@residentialproblems'));

		Route::post('services/residential/problem/create', array('as' => 'addresidentialproblem', 'uses' => 'ServicesController@addresidentialproblem'));

		Route::get('services/residential/problem/specificproblem/{id}', array('as' => 'residentialspecificproblem', 'uses' =>'ServicesController@residentialspecificproblem'));

		Route::post('services/residential/problem/speficicproblem/create', array('as' => 'addresidentialspecificproblem', 'uses' => 'ServicesController@addresidentialspecificproblem'));



