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
			$table->string('A');
			$table->string('B');
			$table->string('C');
			$table->string('D');
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
