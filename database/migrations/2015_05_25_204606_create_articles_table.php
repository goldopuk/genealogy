<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description');
			$table->string('image', 255);
			$table->integer('price');
			$table->timestamps();
		});

		Schema::create('category_product', function(Blueprint $table)
		{
			$table->integer('category_id');
			$table->integer('product_id');
		});

		Schema::create('category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description');
			$table->timestamps();
		});

		Schema::create('order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('data', 255);
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
		Schema::drop('product');
		Schema::drop('category_product');
		Schema::drop('category');
		Schema::drop('order');
	}

}
