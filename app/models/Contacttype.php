<?php

class Contacttype extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	'type' => 'required',
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['type'];

	protected $table = 'contacttypes';



}