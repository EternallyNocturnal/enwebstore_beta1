<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('category');
			$table->string('price');
			$table->string('paypal');
			$table->integer('active');
			$table->integer('onsale');
			$table->integer('upcomming');
			$table->integer('preorder');
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
		Schema::drop('products');
	}

}
