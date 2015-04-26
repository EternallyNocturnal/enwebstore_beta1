<?php

class Customer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'username',
	'password',
	'email',
	'contact_id'
	];


	protected $table = 'customers';
}