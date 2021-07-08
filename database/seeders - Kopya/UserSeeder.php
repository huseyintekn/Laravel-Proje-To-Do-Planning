<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('users')->truncate();
		\DB::table('users')->insert(array(
			[
                'name' => 'Fahrettin Aksoy',
                'email' => 'fahrettin@netqsoft.com',
                'password' => '$2y$10$eNXjjHr0pxcqNNDDM4i4rOleysbNDFE8nj9Esq8fypWXDPIAj/aWq',
                'remember_token' => '',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
			],
        ));
    }
}