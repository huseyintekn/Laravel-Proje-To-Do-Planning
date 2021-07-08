<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEducationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_education_type')->truncate();
        \DB::table('dfntn_education_type')->insert([
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
            [
                'status' => 1,
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
        ]);
        \DB::table('dfntn_education_type_translation')->truncate();
        \DB::table('dfntn_education_type_translation')->insert([
            [
                'education_type_id' => 1,
                'language_code' => 'tr',
                'name' => 'Açık Öğretim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 1,
                'language_code' => 'en',
                'name' => 'Open Education',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 2,
                'language_code' => 'tr',
                'name' => 'İkinci Öğretim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 2,
                'language_code' => 'en',
                'name' => 'Secondary education',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 3,
                'language_code' => 'tr',
                'name' => 'Örgün Öğretim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 3,
                'language_code' => 'en',
                'name' => 'Formal education',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' =>4,
                'language_code' => 'tr',
                'name' => 'Uzaktan Öğretim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_type_id' => 4,
                'language_code' => 'en',
                'name' => 'Distance learning',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}
