<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadsheddingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loadshedding', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('group_name');
			$table->string('day');
			$table->time('time1_start');
			$table->time('time1_end');
			$table->time('time2_start');
			$table->time('time2_end');
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
		Schema::drop('loadshedding');
	}

}
