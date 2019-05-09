<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function(Blueprint $table)
		{
			$table->integer('ExamID', true);
			$table->string('ExamTitle')->unique('ExamTitle');
			$table->string('ExamDescription', 500);
			$table->integer('ExamType')->index('ExamType');
			$table->integer('TotalQuestions');
			$table->integer('TimeLimit')->unsigned();
			$table->string('ExamSlug')->unique('TitleSlug');
			$table->timestamp('DateCreated')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('Status')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exams');
	}

}
