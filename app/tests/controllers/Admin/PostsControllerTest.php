<?php namespace Admin;

class PostsControllerTest extends \TestCase {
	
	public function testGetIndex()
	{
		$this->callAdmin('GET', 'posts');
		$this->assertResponseOk();	
	}

} 