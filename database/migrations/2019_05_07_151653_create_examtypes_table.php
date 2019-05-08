<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examtypes', function(Blueprint $table)
		{
			$table->integer('TypeID', true);
			$table->string('TypeTitle', 100)->unique('TypeTitle_UNIQUE');
			$table->string('TypeDescription')->nullable();
			$table->string('TypeSlug');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('examtypes');
	}

}
