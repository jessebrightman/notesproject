<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function($table)
		{
			//
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->binary('images1');
			$table->string('image_path1');

			$table->binary('images2');
			$table->string('image_path2');

			$table->binary('images3');
			$table->string('image_path3');

			$table->binary('images4');
			$table->string('image_path4');

			//created_at, updated_at DATETIME
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
		Schema::drop('images');
	}

}
