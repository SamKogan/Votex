<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateAdvocacygroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$advocacygroup = new AdvocacyGroup;

		$advocacygroup->title 		= '2020 Women On Boards';
		$advocacygroup->description = 'A national campaign dedicated to increasing the percentage of women on corporate boards to 20% by 2020. The campaign redefines successful corporate governance, gender diversity standards, and creates a cultural imperative for corporate action. Together, we can make it happen!';
		$advocacygroup->img_id		= '1';
		$advocacygroup->URL			= 'http://www.2020wob.com/';

		$advocacygroup->save();

		$advocacygroup1 = new AdvocacyGroup;

		$advocacygroup1->title 		= 'The Humane Society';
		$advocacygroup1->description= 'The Humane Society of the United States is the nation’s largest and most effective animal protection organization. We and our affiliates provide hands-on care and services to more than 100,000 animals each year, and we professionalize the field through education and training for local organizations. We are the leading animal advocacy organization, driving transformational change in the U.S. and around the world by combatting large-scale cruelties such as puppy mills, animal fighting, factory farming, seal slaughter, horse cruelty, captive hunts and the wildlife trade.';
		$advocacygroup1->img_id		= '2';
		$advocacygroup1->URL		= 'http://www.humanesociety.org/';

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
