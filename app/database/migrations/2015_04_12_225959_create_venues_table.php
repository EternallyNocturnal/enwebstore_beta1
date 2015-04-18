<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('contact_id');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->string('email');
			$table->string('phone');
			$table->string('fax');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			$table->string('linkedin');
			$table->string('website');
			$table->text('notes');
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
		Schema::drop('venues');
	}

}
