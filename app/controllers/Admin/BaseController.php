<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class BaseController extends \Controller {

	public function prefix()
	{
		return Config::get('hello.prefix', 'admin');
	}

	public function view($view, $data = array(), $mergeData = array())
	{
		return View::make("{$this->prefix()}.{$view}", $data, $mergeData);
	}

	public function redirect($route, $parameters = array(), $status = 302, $headers = array())
	{
		return Redirect::route("{$this->prefix()}.{route}", $parameters, $status, $headers);
	}

}
