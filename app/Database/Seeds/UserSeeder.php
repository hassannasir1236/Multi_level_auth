<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\user;
class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new user();

		$user_object->insertBatch([
			[
				"email" => "admin@gmail.com",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"email" => "hassannasir123@gmail.com",
				"role" => "user",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
    }
}
