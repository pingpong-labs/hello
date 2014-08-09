<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name'		=>	'Administrator',
			'username'	=>	'admin',
			'email'		=>	'gue.warsono@gmail.com',
			'password'	=>	Hash::make('secret')
		]);
	}

}