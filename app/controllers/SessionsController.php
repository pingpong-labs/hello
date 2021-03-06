<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::attempt(Input::only('username', 'password'), Input::has('remember')))
		{
			return Redirect::intended(Config::get('hello.prefix', 'admin'));
		}
		return Redirect::back();
	}

	/**
	 * Logout the current user.
	 * 
	 * @return Response 
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}
