<?php

class Show extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [

		'venue_id',	
		'contact_id',	
		'online_price',	
		'presale_price',	
		'door_price',	
		'presale_count',	
		'main_image',
		'start_time',
		'end_time'
	];

	protected $table = 'shows';
}
