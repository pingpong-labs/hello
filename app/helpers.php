<?php

if ( ! function_exists('a'))
{
	function a($url, $secure = false)
	{
		return asset("assets/{$url}", $secure);
	}
}

if ( ! function_exists('r'))
{
	function r($route, $parameters = array())
	{
		$prefix = Config::get('hello.prefix');
		
		return route("{$prefix}.{$route}", $parameters);
	}
}