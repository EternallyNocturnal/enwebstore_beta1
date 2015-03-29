<?php

class Imager extends \Eloquent {

	// Add your validation rules here
	public static $rules = ['location' => 'required'
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['product_id', 'name', 'location'];

	protected $table = 'images';
}