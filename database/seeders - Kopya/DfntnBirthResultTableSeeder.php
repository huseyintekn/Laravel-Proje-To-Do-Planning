<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnBirthResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_birth_result')->truncate();
        \DB::table('dfntn_birth_result')->insert([
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
            ]

        ]);
        \DB::table('dfntn_birth_result_translation')->truncate();
        \DB::table('dfntn_birth_result_translation')->insert([
            [
                'birth_result_id' => 1,
                'language_code' => 'tr',
                'name' => 'Kürtaş',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_result_id' => 1,
                'language_code' => 'en',
                'name' => 'Abortion',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_result_id' => 2,
                'language_code' => 'tr',
                'name' => 'Düşük',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_result_id' => 2,
                'language_code' => 'en',
                'name' => 'Low',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_result_id' => 3,
                'language_code' => 'tr',
                'name' => 'Doğum',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_result_id' => 3,
                'language_code' => 'en',
                'name' => 'Birth',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
