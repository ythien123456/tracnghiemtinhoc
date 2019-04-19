<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->foreign('AccountID', 'posts_ibfk_1')->references('AccountID')->on('accounts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ModuleID', 'posts_ibfk_2')->references('ModuleID')->on('modules')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->dropForeign('posts_ibfk_1');
			$table->dropForeign('posts_ibfk_2');
		});
	}

}
