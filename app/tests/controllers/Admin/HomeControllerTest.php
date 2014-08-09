<?php namespace Admin;

class HomeControllerTest extends \AdminTestCase {
	
	public function testGetIndex()
	{
		$this->call('GET', "/{$this->prefix}");
		$this->assertResponseOk();
	}
} 