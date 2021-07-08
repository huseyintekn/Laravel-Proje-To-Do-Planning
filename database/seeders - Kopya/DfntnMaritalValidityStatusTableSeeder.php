<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnMaritalValidityStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_marrital_validity_status')->truncate();
        \DB::table('dfntn_marrital_validity_status')->insert([
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
        \DB::table('dfntn_marital_validity_status_translation')->truncate();
        \DB::table('dfntn_marital_validity_status_translation')->insert([
            [
                'marrital_validity_status_id' => 1,
                'language_code' => 'tr',
                'name' => 'Dini',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'marrital_validity_status_id' => 1,
                'language_code' => 'en',
                'name' => 'Religious',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'marrital_validity_status_id' => 2,
                'language_code' => 'tr',
                'name' => 'Resmi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'marrital_validity_status_id' => 2,
                'language_code' => 'en',
                'name' => 'Formal',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
            ,
            [
                'marrital_validity_status_id' => 3,
                'language_code' => 'tr',
                'name' => 'Resmi ve Dini',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'marrital_validity_status_id' => 3,
                'language_code' => 'en',
                'name' => 'Formal and Religious',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
