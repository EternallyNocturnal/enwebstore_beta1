<?php

class Band extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'contact_id',
			'manager_id',
			'label',
			'name',
			'city',
			'state',
			'zip',
			'email',
			'facebook',
			'twitter',
			'instagram',
			'linkedin',
			'website',
			'notes'
	];

	protected $table = 'bands';

}