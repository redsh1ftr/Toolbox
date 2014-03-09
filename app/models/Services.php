<?php

class Services extends Eloquent {


	protected $fillable = array('type', 'location', 'problem', 'specific_problem', 'notes');
	protected $table = 'services_list';



}

