<?php

class Shipping extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'email',
			'phone',
			'ship_f_name',
			'ship_l_name',
			'ship_address1',
			'ship_address2',
			'ship_city',
			'ship_state',
			'ship_zip',
			'cart_id',
			'cart_amt',
			'payment_status',
			'shipped_status',
			'tracking_number',
			
	];

	protected $table = 'shippings';

}