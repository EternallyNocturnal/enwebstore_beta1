<?php

class Product extends \Eloquent {

		// Add your validation rules here
		public static $rules = [
		'name' => 'required|unique:producers|min:3',
		'category' => 'required|min:2',
		'price' => 'required'
			// 'title' => 'required'
		];

		// Don't forget to fill this array
		protected $fillable = [
		'name',
		'description',
		'category',
		'price',
		'paypal',
		'active',
		'onsale',
		'upcomming',
		'preorder',
		'xsmall',
		'small',
		'medium',
		'large',
		'xlarge',
		'xxlarge',
		'xxxlarge',
		'onesize',
		];

		protected $table = 'products';

}