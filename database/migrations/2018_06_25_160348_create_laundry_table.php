<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaundryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laundry', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->unique();
			$table->string('address', 200);
			$table->string('City', 25);
			$table->integer('user_id')->nullable();
			$table->integer('brand_id')->nullable();
			$table->timestamps();
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->string('image', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laundry');
	}

}
