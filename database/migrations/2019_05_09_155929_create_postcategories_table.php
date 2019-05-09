<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostcategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postcategories', function(Blueprint $table)
		{
			$table->integer('CategoryID', true);
			$table->string('CategoryName')->unique('CategoryName');
			$table->string('CategoryDescription', 600);
			$table->integer('CategoryType')->default(2)->comment('1 - Kiến thức module, 2 - Khác');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postcategories');
	}

}
