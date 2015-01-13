<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateAdvocacygroups2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$advocacygroup = new AdvocacyGroup;

		$advocacygroup->title 		= 'Votex anti-management Bot';
		$advocacygroup->description = 'This is a robot that automatically always votes against management. It is not recommended to pledge your votes to this bot if you have many manager "friends".';
		$advocacygroup->img_id		= '3';
		$advocacygroup->URL			= '';

		$advocacygroup->save();

		$advocacygroup1 = new AdvocacyGroup;

		$advocacygroup1->title 		= 'Votex I <3 management Bot';
		$advocacygroup1->description= 'TThis is a robot that will always vote with management. His passion for the worldof managers appeared early in his boot process.';
		$advocacygroup1->img_id		= '3';
		$advocacygroup1->URL		= '';

		$advocacygroup1->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
