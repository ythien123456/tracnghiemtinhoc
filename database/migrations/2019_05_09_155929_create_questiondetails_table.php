<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestiondetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questiondetails', function(Blueprint $table)
		{
			$table->integer('QuestionID');
			$table->integer('ExamID')->index('ExamID');
			$table->primary(['QuestionID','ExamID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questiondetails');
	}

}
