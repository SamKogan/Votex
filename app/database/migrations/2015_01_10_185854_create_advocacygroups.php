<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvocacygroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Advocacygroups', function($table) {

	    $table->increments('id');
	    $table->string('title', 200)->unique();
	    $table->string('description', 1000)->nullable();
	    $table->string('URL', 40)->nullable();
	    $table->smallinteger('img_id')->nullable();
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
		Schema::drop('Advocacygroups');
	}

}
