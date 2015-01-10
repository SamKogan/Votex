<?php

/********** HOME CONTROLLER ***********/

class HomeController extends BaseController {

//index controller
	public function index()
	{

		$fund_csv = File::get(app_path().'/database/fnd.csv');
		$fund_list = str_getcsv($fund_csv,"\r\n"); 

		return View::make('_landing_page')
			->with('fund_list', $fund_list);

	}

//advocacy groups controller
	public function advocacygroups()
	{
		
		return View::make('portaladvocacygroups');

	}

//portal home / votes controller
	public function portal()
	{


		return View::make('portalvotes');

	}

//mysettings controller
	public function mysettings()
	{
		$fund_csv = File::get(app_path().'/database/fnd.csv');
		$fund_list = str_getcsv($fund_csv,"\r\n"); 

		return View::make('portalmysettings')
			->with('fund_list', $fund_list);
	}

//mypolicy controller
	public function mypolicy()
	{

		return View::make('portalmypolicy');
			
	}

}
