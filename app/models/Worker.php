<?php

class Worker extends Eloquent {


	protected $fillable = array('first', 'last', 'title', 'phone', 'phone', 'email', 'street1', 'street2', 'city', 'state', 'zip', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'rate', 'notes');
	protected $table = 'workers';
}