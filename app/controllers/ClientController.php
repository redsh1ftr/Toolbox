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
}

public function addclient(){
	CreateClient::create(array(
		'business_name' => Input::get('business_name'),
		'business_type' => Input::get('business_type'),
		'first_name' => Input::get('first_name'),
		'last_name' => Input::get('last_name'),
		'office_manager' => Input::get('office_manager'),
		'street1' => Input::get('street1'),
		'street2' => Input::get('street2'),
		'city' => Input::get('city'),
		'state' => 'MI',
		'zip' => Input::get('zip'),
		'hours' => Input::get('hours'),
		'phone' => Input::get('phone'),
		'fax' => Input::get('fax'),
		'email' => Input::get('email'),
		'notes' => Input::get('notes'),
		));
	return Redirect::route('clientlist');
}


public function clientlist(){

return View::make('client.client_list',  array('pagetitle', 'Client List'))
	->with('client_list', Client::orderBy('id')->get());

}


public function clientprofile($id){
return View::make('client.client_profile',  array('pagetitle', 'Client Profile'))
	->with('client_list1', Client::where('id', '=', $id)->get());
}

public function clienthub(){

return View::make('client.client',  array('pagetitle', 'Client Hub'));

}








}