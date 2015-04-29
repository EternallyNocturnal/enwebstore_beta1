<?php

class Bandmember extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'band_id',
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
			'notes'

	];

	protected $table = "bandmembers";
	

}