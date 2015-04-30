<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shows', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('venue_id');
			$table->integer('contact_id');
			$table->string('online_price');
			$table->string('presale_price');
			$table->string('door_price');
			$table->string('presale_count');
			$table->string('main_image');
			$table->timestamp('start_time');
			$table->timestamp('end_time');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shows');
	}

}
