<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class BaseController extends \Controller {

	/**
	 * Get admin prefix url/route.
	 * 
	 * @return string
	 */
	public function prefix()
	{
		return Config::get('hello.prefix', 'admin');
	}

	/**
	 * Get the evaluated view contents for the given view.
	 *
	 * @param  string  $view
	 * @param  array   $data
	 * @param  array   $mergeData
	 * @return \Illuminate\View\View
	 */
	public function view($view, $data = array(), $mergeData = array())
	{
		return View::make("{$this->prefix()}.{$view}", $data, $mergeData);
	}

	/**
	 * Create a new redirect response to a named route with the specified prefix.
	 *
	 * @param  string  $route
	 * @param  array   $parameters
	 * @param  int     $status
	 * @param  array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function redirect($route, $parameters = array(), $status = 302, $headers = array())
	{
		return Redirect::route("{$this->prefix()}.{route}", $parameters, $status, $headers);
	}

}
