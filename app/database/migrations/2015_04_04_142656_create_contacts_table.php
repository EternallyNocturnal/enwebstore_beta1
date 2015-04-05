<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('f_name');
			$table->string('l_name');
			$table->string('nickname');
			$table->string('email');
			$table->string('phone');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
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
		Schema::drop('contacts');
	}

}
