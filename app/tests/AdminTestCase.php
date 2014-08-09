<?php 

class AdminTestCase extends TestCase {

	public function setUp()
	{
		parent::setUp();

		$this->app['auth']->loginUsingId(1);
	}

}