<?php

class Product extends \Eloquent {

		// Add your validation rules here
		public static $rules = [
		'name' => 'required|min:3',
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


		public function inventories()
		{
			return($this->hasMany('Inventory'));
		}

		public function Sizes($size)
		{
			return Product::where('id', $this->id)->pluck($size);
		}

		public function Inventory($size)
		{
			return Inventory::where('product_id', $this->id)->pluck($size);
		}
}