<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	public function setUp()
	{
		parent::setUp();

		$this->prefix = $this->app['config']->get('hello.prefix');

		$this->app['artisan']->call('migrate', ['--force']);
		$this->app['artisan']->call('db:seed', ['--force']);
	}
	
	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	public function callAdmin($method, $uri, $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true)
	{
		$this->call($method, "{$this->prefix}/{$uri}", $parameters, $files, $server, $content, $changeHistory);
	}

}
