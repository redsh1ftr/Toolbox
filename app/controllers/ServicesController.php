<?php

class ServicesController extends BaseController {

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





public function servicehub(){

return View::make('service.service_hub',  array('pagetitle', 'Service Hub'));
}




//MEDICAL FUNCTIONALITY


			public function medicallocation(){

			return View::make('service.medical_location',  array('pagetitle', 'Medical Location'))
				->with('services1', MedicalLocations::orderBy('location')->get());

			}

			public function addmedicallocation(){
				MedicalLocations::create(array(
					'location' => Input::get('location'),
					));

				return Redirect::route('medicallocation');
			}

			public function medicalproblems($id){
			$getlocation = MedicalLocations::where('id', '=', $id)->pluck('location');
			return View::make('service.medical_problem',  array('pagetitle', 'Medical Problem'))
				->with('problems', Medicalproblems::where('location', '=', $getlocation)->orderBy('problem')->get())
				->with('location_id', MedicalLocations::where('location', '=', $getlocation)->get());
			}

			public function addmedicalproblem(){
				Medicalproblems::create(array(
					'location' => Input::get('location'),
					'problem' => Input::get('problem'),
					));
				return Redirect::route('medicallocation');
			}

			public function medicalspecificproblem($id){
			$getproblem = Medicalproblems::where('id', '=', $id)->pluck('problem');
			return View::make('service.medical_specificproblem',  array('pagetitle', 'Specific Problem'))
				->with('problems', Medicalspecificproblems::where('problem', '=', $getproblem)->orderBy('specific_problem')->get())
				->with('problem_id', Medicalproblems::where('id', '=', $id)->get());
			}

			public function addmedicalspecificproblem(){
				Medicalspecificproblems::create(array(
					'specific_problem' => Input::get('specific_problem'),
					'problem' => Input::get('problem'),
					));

				return Redirect::route('medicallocation');
			}

//COMMERCIAL FUNCTIONALITY


			public function commerciallocation(){

			return View::make('service.commercial_location',  array('pagetitle', 'Commercial Location'))
				->with('services1', CommercialLocations::orderBy('location')->get());

			}

			public function addcommerciallocation(){
				CommercialLocations::create(array(
					'location' => Input::get('location'),
					));

				return Redirect::route('commerciallocation');
			}

			public function commercialproblems($id){
			$getlocation = CommercialLocations::where('id', '=', $id)->pluck('location');
			return View::make('service.commercial_problem',  array('pagetitle', 'Problem'))
				->with('problems', Commercialproblems::where('location', '=', $getlocation)->orderBy('problem')->get())
				->with('location_id', CommercialLocations::where('location', '=', $getlocation)->get());
			}

			public function addcommercialproblem(){
				Commercialproblems::create(array(
					'location' => Input::get('location'),
					'problem' => Input::get('problem'),
					));

				return Redirect::route('commerciallocation');
			}

			public function commercialspecificproblem($id){
			$getproblem = Commercialproblems::where('id', '=', $id)->pluck('problem');
			return View::make('service.commercial_specificproblem',  array('pagetitle', 'Specific Problem'))
				->with('problems', Commercialspecificproblems::where('problem', '=', $getproblem)->orderBy('specific_problem')->get())
				->with('problem_id', Commercialproblems::where('id', '=', $id)->get());
			}

			public function addcommercialspecificproblem(){
				Commercialspecificproblems::create(array(
					'specific_problem' => Input::get('specific_problem'),
					'problem' => Input::get('problem'),
					));

				return Redirect::route('commerciallocation');
			}


//RESIDENTIAL FUNCTIONALITY


			public function residentiallocation(){

			return View::make('service.residential_location',  array('pagetitle', 'Location'))
				->with('services1', ResidentialLocations::orderBy('location')->get());

			}

			public function addresidentiallocation(){
				ResidentialLocations::create(array(
					'location' => Input::get('location'),
					));

				return Redirect::route('residentiallocation');
			}

			public function residentialproblems($id){
			$getlocation = ResidentialLocations::where('id', '=', $id)->pluck('location');
			return View::make('service.residential_problem',  array('pagetitle', 'Problem'))
				->with('problems', Residentialproblems::where('location', '=', $getlocation)->orderBy('problem')->get())
				->with('location_id', ResidentialLocations::where('location', '=', $getlocation)->get());
			}

			public function addresidentialproblem(){
				Residentialproblems::create(array(
					'location' => Input::get('location'),
					'problem' => Input::get('problem'),
					));

				return Redirect::route('residentiallocation');
			}

			public function residentialspecificproblem($id){
			$getproblem = Residentialproblems::where('id', '=', $id)->pluck('problem');
			return View::make('service.residential_specificproblem',  array('pagetitle', 'Specific Problem'))
				->with('problems', Residentialspecificproblems::where('problem', '=', $getproblem)->orderBy('specific_problem')->get())
				->with('problem_id', Residentialproblems::where('id', '=', $id)->get());
			}

			public function addresidentialspecificproblem(){
				Residentialspecificproblems::create(array(
					'specific_problem' => Input::get('specific_problem'),
					'problem' => Input::get('problem'),
					));

				return Redirect::route('residentiallocation');
			}


public function servicelocation(){

return View::make('service.location',  array('pagetitle', 'Location'));
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




public function clienthub(){

return View::make('client.client',  array('pagetitle', 'Client Hub'));

}








}