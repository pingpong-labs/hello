<?php

if ( ! function_exists('a'))
{
	function a($url, $secure = false)
	{
		return asset("assets/{$url}", $secure);
	}
}