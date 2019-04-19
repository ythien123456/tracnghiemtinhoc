<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->integer('AccountID', true);
			$table->string('Email', 150)->unique('Email_UNIQUE');
			$table->string('Password', 100);
			$table->string('FirstName', 100);
			$table->string('LastName', 100)->nullable();
			$table->string('WorkPlace', 100)->nullable();
			$table->string('PhoneNumber', 13)->nullable()->unique('PhoneNumber');
			$table->string('Address')->nullable();
			$table->integer('Gender')->nullable()->default(3)->index('Gender')->comment('1-Nam, 2-Nữ, 3-Không xác định');
			$table->integer('Role')->default(1)->index('Role');
			$table->timestamp('JoinDate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accounts');
	}

}
