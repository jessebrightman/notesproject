<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('notes', function ($table)
		{
			$table ->increments('id');

			$table ->string('user');

			$table ->string('notes')->nullable;
			$table ->string('websites')->nullable;
			$table ->string('images')->nullable;
			$table ->string('tbd')->nullable;

			$table ->timestamps();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Chema::drop('notes');
	}

}
