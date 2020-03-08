<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestiondetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questiondetails', function(Blueprint $table)
		{
			$table->foreign('QuestionID', 'questiondetails_ibfk_1')->references('QuestionID')->on('questions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ExamID', 'questiondetails_ibfk_2')->references('ExamID')->on('exams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questiondetails', function(Blueprint $table)
		{
			$table->dropForeign('questiondetails_ibfk_1');
			$table->dropForeign('questiondetails_ibfk_2');
		});
	}

}
