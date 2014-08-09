<?php

class SessionsControllerTest extends TestCase {

	public function testGetCreate()
	{
		$this->call('GET', '/sessions/create');
		$this->assertResponseOk();
	}

	public function testPostSessions()
	{
		$parameters = [
			'username'	=>	'admin',
			'password'	=>	'secret'
		];
		$this->call('POST', '/sessions', $parameters);
		$this->assertRedirectedToRoute($this->prefix . '.home');
	}
	
}
