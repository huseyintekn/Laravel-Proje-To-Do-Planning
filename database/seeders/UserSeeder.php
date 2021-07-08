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
		\DB::table('user')->truncate();
		\DB::table('user')->insert(array(
			[
                'code' => 'USR-' . date_format(date_create(date('Ymdhis')), 'U'),
                'first_name' => 'Hüseyin',
                'last_name' => 'Tekin',
                'email' => 'hsyntn@gmail.com',
                'password' => '123456',
                'remember_token' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
			],
        ));
    }
}
