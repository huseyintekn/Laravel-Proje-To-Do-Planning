<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnAddressTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_address_type')->truncate();
        \DB::table('dfntn_address_type')->insert([
            [
                'status' => 1,
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'status' => 1,
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'status' => 1,
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
        \DB::table('dfntn_address_type_translation')->truncate();
        \DB::table('dfntn_address_type_translation')->insert([
            [
                'address_type_id' => 1,
                'language_code' => 'tr',
                'name' => 'Ev',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'address_type_id' => 1,
                'language_code' => 'en',
                'name' => 'Home',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'address_type_id' => 2,
                'language_code' => 'tr',
                'name' => 'İş',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'address_type_id' => 2,
                'language_code' => 'en',
                'name' => 'Work',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'address_type_id' => 3,
                'language_code' => 'tr',
                'name' => 'Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'address_type_id' => 3,
                'language_code' => 'en',
                'name' => 'Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
