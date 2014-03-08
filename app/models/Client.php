<?php

class Client extends Eloquent {

	protected $fillable = array('client_id', 'business_name', 'net_terms', 'work_order_number', 'hours',);
	protected $table = 'client_list';
}