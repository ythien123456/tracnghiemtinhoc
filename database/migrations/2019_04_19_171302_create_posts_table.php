<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->integer('PostID', true);
			$table->integer('AccountID')->index('AccountID');
			$table->integer('ModuleID')->index('ModuleID');
			$table->string('PostTitle')->unique('PostTitle_UNIQUE');
			$table->text('PostContent', 65535);
			$table->string('PostSlug');
			$table->integer('Views')->default(0);
			$table->integer('Status')->default(0);
			$table->timestamp('PostDate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
