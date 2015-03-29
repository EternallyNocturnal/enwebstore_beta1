<?php

class Productcat extends \Eloquent {
	
	public static $rules = [
		'name' => 'required|unique:product_categ|min:3',
	];

	protected $fillable = ['name'];

	protected $table = 'product_categ';

}