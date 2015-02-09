<?php

/********** ROUTES ***********/

Route::group(array('prefix'=>'demo'),function()
{
	Route::group(array('before'=>'auth'),function()
	{
		// Portal homepage / upcoming votes
		Route::get('/portal', 'HomeController@portal');

		// My Policy
		Route::get('/mypolicy', 'HomeController@mypolicy');

		// Advocacy Groups
		Route::get('/advocacygroups', 'HomeController@advocacygroups');

		// My Setting
		Route::get('/mysettings', 'HomeController@mysettings');

		// Forums
		Route::get('/forums', function() {

			return View::make('forums');

		});

		//vote page

		Route::get('/portal/vote/id={id?}', function($id) {

			$vote = DB::table('votes')->where('id', $id)->first();

			return View::make('portalvotes_voteid')
				->with('vote', $vote);
		
		});
		
		//group page

		Route::get('/portal/advocacygroups/group/id={id?}', function($id) {

			$group = DB::table('Advocacygroups')->where('id', $id)->first();

			return View::make('portaladvocacygroups_groupid')
				->with('group', $group);
		
		});

	});

	// landing page
	Route::get('/','HomeController@index');

	// process signup form
	Route::post('/signup', 'UserController@signup');

	// process signin form
	Route::post('/signin', 'UserController@signin');

	// logout
	Route::get('/logout', function() {

	    # Log out
	    Auth::logout();

	    # Send them to the homepage
	    return Redirect::to('/');

	});
});

Route::get('/',function() {

	return View::make('homepage');

});

Route::get('/join',function() {

	$fund_csv = File::get(app_path().'/database/fnd.csv');
	$fund_list = str_getcsv($fund_csv,"\r\n"); 

	return View::make('join')
		->with('fund_list', $fund_list);

});

Route::get('/contact',function() {

	return View::make('contact');

});


?>