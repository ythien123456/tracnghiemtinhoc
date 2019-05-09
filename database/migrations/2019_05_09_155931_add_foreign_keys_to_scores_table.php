<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('scores', function(Blueprint $table)
		{
			$table->foreign('AccountID', 'scores_ibfk_1')->references('AccountID')->on('accounts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ExamID', 'scores_ibfk_2')->references('ExamID')->on('exams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('scores', function(Blueprint $table)
		{
			$table->dropForeign('scores_ibfk_1');
			$table->dropForeign('scores_ibfk_2');
		});
	}

}
