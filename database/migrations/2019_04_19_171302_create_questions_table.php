<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->integer('QuestionID', true);
			$table->string('QuestionContent', 500);
			$table->integer('ModuleID')->index('ModuleID');
			$table->integer('QuestionType')->index('QuestionType')->comment('1-Câu hỏi có một câu trả lời, 2-Câu hỏi có nhiều câu trả lời');
			$table->timestamp('DateCreated')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}
