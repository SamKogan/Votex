<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('users', function($table)
		{

		    $table->increments('id')->nullable();
		    $table->string('email', 30)->unique();
		    $table->string('remember_token',100)->nullable(); 
		    $table->string('password', 20)->nullable();
		    $table->smallinteger('fund')->nullable();
		    $table->string('name', 100)->nullable();
		    $table->nullableTimestamps();
		});
	}
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	Schema::drop('users');

	}

}
