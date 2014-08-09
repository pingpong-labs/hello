<?php namespace Admin;

class PostsControllerTest extends \AdminTestCase {
	
	public function testGetIndex()
	{
		$this->callAdmin('GET', 'posts');
		$this->assertResponseOk();	
	}

} 