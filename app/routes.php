<?php


/********** ROUTES ***********/

// Portal homepage / upcoming votes
Route::get('/portal', function()
{
	return View::make('portalvotes');
});


// My Policy
Route::get('/mypolicy', function()
{
	return View::make('portalmypolicy');
});

// Advocacy Groups
Route::get('/advocacygroups', function()
{
	return View::make('portaladvocacygroups');
});

// My Setting
Route::get('/mysettings', function()
{
	return View::make('portalmysettings');
});

// landing page
Route::get('/', function()
{
	$fund_csv = File::get(app_path().'/database/fnd.csv');
	$fund_list = str_getcsv($fund_csv,"\r\n"); //true = output array, false = output object

	return View::make('_landing_page')
		->with('fund_list', $fund_list);
});

// process signup form
Route::post('/signup', function()
{

 	$user = new User;
 	$user->name = Input::get('name');
 	$user->password = Hash::make(Input::get('password'));
 	$user->email = Input::get('email');
 	$user->fund = Input::get('fund');
 	$user->save();

	return Response::make('User created! Hurray!');
});

?>