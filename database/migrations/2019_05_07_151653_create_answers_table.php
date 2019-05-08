<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table)
		{
			$table->integer('AnswerID', true);
			$table->integer('QuestionID')->index('QuestionID');
			$table->string('A', 100);
			$table->string('B', 100);
			$table->string('C', 100);
			$table->string('D', 100);
			$table->string('CorrectAnswers', 5);
			$table->string('AnswerExplain', 500)->default('Chưa có');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answers');
	}

}
