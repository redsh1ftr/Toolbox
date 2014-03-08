<?php

class CreateClient extends Eloquent {


	protected $fillable = array('business_name', 'business_type', 'first_name', 'last_name', 'office_manager', 'street1', 'street2', 'city', 'state', 'zip', 'hours', 'phone', 'fax', 'email', 'notes');
	protected $table = 'client_list';
}