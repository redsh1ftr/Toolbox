<?php

class WorkerController extends BaseController {

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

	public function workeradd() {
		return View::make('worker.add_worker',  array('pagetitle', 'Client Hub'));
	}

	public function workerhub() {
		return View::make('worker.worker_hub',  array('pagetitle', 'Client Hub'));
	}


	public function addworker(){
		Worker1::create(array(
			'first' => Input::get('first'),
			'last' => Input::get('last'),
			'title' => Input::get('title'),
			'phone' => Input::get('phone'),
			'email' => Input::get('email'),
			'street1' => Input::get('street1'),
			'street2' => Input::get('street2'),
			'city' => Input::get('city'),
			'state' => 'MI',
			'zip' => Input::get('zip'),
			'monday' => Input::get('monday'),
			'tuesday' => Input::get('tuesday'),
			'wednesday' => Input::get('wednesday'),
			'thursday' => Input::get('thursday'),
			'friday' => Input::get('friday'),
			'saturday' => Input::get('saturday'),
			'sunday' => Input::get('sunday'),
			'rate' => Input::get('rate'),
			'notes' => Input::get('notes'),
			));
		return Redirect::route('workerlist');
	}

	public function workerprofile($id){
	return View::make('worker.worker_profile',  array('pagetitle', 'Client Profile'))
		->with('worker1', Worker1::where('id', '=', $id)->get());
	}


	public function workerlist(){

	return View::make('worker.worker_list',  array('pagetitle', 'Client List'))
	->with('worker1', Worker1::get());

}



}