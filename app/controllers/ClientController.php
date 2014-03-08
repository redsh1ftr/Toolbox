<?php

class ClientController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $restful = true;


public function workerprofile(){

return View::make('main.hello',  array('pagetitle', 'Client Hub'));
}

public function newclient(){

return View::make('client.new_client',  array('pagetitle', 'Client Hub'));
}}