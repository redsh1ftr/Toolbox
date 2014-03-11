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

	public function workerprofil2e() {
		return View::make('worker.add_worker',  array('pagetitle', 'Client Hub'));
	}



	public function addworker(){
		Worker::create(array(
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
		return Redirect::route('workerhub');
	}

	public function workerprofile22($id){
	return View::make('worker.worker_profile',  array('pagetitle', 'Client Profile'))
		->with('workers', Worker::where('id', '=', $id)->get());
	}
	public function workerprofile(){

	return View::make('worker.worker_list',  array('pagetitle', 'Client List'))
	->with('workers', Worker::orderBy('id')->get());

}



}