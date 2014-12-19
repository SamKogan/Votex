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
	return View::make('landing_page');
});

// login page
Route::get('/login', function()
{
	return View::make('login');
});

?>