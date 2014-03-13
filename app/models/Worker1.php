<?php

class Worker1 extends Eloquent {


	protected $fillable = array('first', 'last', 'title', 'phone', 'phone', 'email', 'street1', 'street2', 'city', 'state', 'zip', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday','saturday', 'sunday', 'rate', 'notes');
	protected $table = 'workers';
}