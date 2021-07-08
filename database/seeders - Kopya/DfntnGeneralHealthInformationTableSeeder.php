<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnGeneralHealthInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_general_health_information')->truncate();
        \DB::table('dfntn_general_health_information')->insert([
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
        \DB::table('dfntn_general_health_information_translation')->truncate();
        \DB::table('dfntn_general_health_information_translation')->insert([
            [
                'general_health_information_id' => 1,
                'language_code' => 'tr',
                'name' => 'Evet',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 1,
                'language_code' => 'en',
                'name' => 'Yes',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'general_health_information_id' => 2,
                'language_code' => 'tr',
                'name' => 'Hayır',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'general_health_information_id' => 2,
                'language_code' => 'en',
                'name' => 'No',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'general_health_information_id' => 3,
                'language_code' => 'tr',
                'name' => 'Bilgi Yok',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'general_health_information_id' => 3,
                'language_code' => 'en',
                'name' => 'No Information',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
