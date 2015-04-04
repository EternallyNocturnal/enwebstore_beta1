<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('xsmall');
			$table->integer('small');
			$table->integer('medium');
			$table->integer('large');
			$table->integer('xlarge');
			$table->integer('xxlarge');
			$table->integer('xxxlarge');
			$table->integer('onesize');
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
		Schema::drop('inventories');
	}

}
