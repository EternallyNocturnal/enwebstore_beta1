<?php

class Contact extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	'type' => 'required',
	'f_name' => 'required:3'
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'type',
		'f_name',
		'l_name',
		'nickname',
		'email',
		'phone',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
		'facebook',
		'twitter',
		'instagram',
		'linkedin',
		'website',
		'notes',
	];


	protected $table = 'contacts';


}