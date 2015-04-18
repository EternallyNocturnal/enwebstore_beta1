<?php

class Venue extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'id',
			'name',
			'contact_id',
			'street1',
			'street2',
			'city',
			'state',
			'zip',
			'email',
			'phone',
			'fax',
			'facebook',
			'twitter',
			'instagram',
			'linkedin',
			'website',
			'notes',
	];

	protected $table = 'venues';

}

		