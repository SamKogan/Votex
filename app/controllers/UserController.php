<?php

/********** USER CONTROLLER ***********/

class UserController extends BaseController {


	// csrf filter
	public function __construct() {

		$this->beforeFilter('csrf');
	} 

	//signin controller
	public function signin()
	{  

        $user = User::find(2);
        Auth::login($user);
        
        return Redirect::to('/demo/portal')->with('flash_message', 'Welcome back!');        

	}


	//signup controller
	public function signup()
	{  

        $user = new User;
        $user->email    = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->fund 	= Input::get('fund');
        $user->name 	= Input::get('name');

        
        $user->save();
        
        // try {}
        // catch (Exception $e) {
        //     return Redirect::to('/')->with('flash_message', 'Sign up failed; please try again.')->withInput();
        // }


        Auth::login($user);

        return Redirect::to('/demo/mypolicy')->with('flash_message', 'Welcome to Votex!');
	}











}