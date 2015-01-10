<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateVotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$vote = new Vote;

		$vote->title 		= 'Oracle Director Election';
		$vote->description 	= '';
		$vote->company		= 'Oracle';
		$vote->ticker		= 'ORCL';
		$vote->exec_date	= '11/05/2014';

		$vote->save();

		$vote2 = new Vote;
		$vote2->title 		= 'Oracle Advisory Vote on Executive Compensation';
		$vote2->description = '';
		$vote2->company		= 'Oracle';
		$vote2->ticker		= 'ORCL';
		$vote2->exec_date	= '11/05/2014';

		$vote2->save();

		$vote3 = new Vote;
		$vote3->title 		= 'Hospitality Properties Trust Director Election';
		$vote3->description = '';
		$vote3->company		= 'Hospitality Properties Trust';
		$vote3->ticker		= 'HPT';
		$vote3->exec_date	= '06/10/2014';

		$vote3->save();

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
