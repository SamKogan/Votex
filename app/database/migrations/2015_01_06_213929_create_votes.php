<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function($table) {

	    $table->increments('id');
	    $table->string('title', 100)->unique();
	    $table->string('description', 500)->nullable();
	    $table->string('company', 40)->nullable();
	    $table->string('ticker', 10)->nullable();
	    $table->date('exec_date')->nullable();
	    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('votes');
	}

}
