<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_translations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('service_id')->unsigned();
			$table->string('locale', 191)->index();
			$table->string('name', 191);
			$table->string('slug', 191);
			$table->text('address', 65535);
			$table->timestamps();
			$table->unique(['service_id','locale']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_translations');
	}

}
