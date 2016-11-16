<?php

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'first_name' => 'System',
			'last_name' => 'Administrator',
			'username' => 'admin',
			'email' => 'admin@test.com',
			'password' => Hash::make('secret')
		]);
	}

}
