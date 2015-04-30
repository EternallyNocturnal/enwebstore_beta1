<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contact_id');
			$table->integer('manager_id');
			$table->string('label');
			$table->string('name');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->string('email');
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
		Schema::drop('bands');
	}

}
