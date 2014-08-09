<?php namespace Admin;

class HomeControllerTest extends \TestCase {
	
	public function setUp()
	{
		parent::setUp();

		$this->app['auth']->loginUsingId(1);
	}

	public function testGetIndex()
	{
		$this->call('GET', "/{$this->prefix}");
		$this->assertResponseOk();
	}
} 