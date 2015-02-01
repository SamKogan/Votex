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