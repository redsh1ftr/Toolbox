<?php

class MarketingController extends BaseController {

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

return View::make('marketing.call_log',  array('pagetitle', 'Call Log'))
	->with('call_list1', CallLog::get());


}

public function addcall(){
	CallLog::create(array(
		'business_name' => Input::get('business_name'),
		'phone' => Input::get('phone'),
		'answered' => Input::get('answered'),
		'office_manager' => Input::get('office_manager'),
		'email' => Input::get('email'),
		'hours' => Input::get('hours'),
		'call_notes' => Input::get('call_notes')
		));
	return Redirect::route('callhome');

}

}