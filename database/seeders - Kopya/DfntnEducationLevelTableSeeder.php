<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEducationLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_education_level')->truncate();
        \DB::table('dfntn_education_level')->insert([
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
            ],
        ]);
        \DB::table('dfntn_education_level_translation')->truncate();
        \DB::table('dfntn_education_level_translation')->insert([
            [
                'education_level_id' => 1,
                'language_code' => 'tr',
                'name' => 'İlkokul',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 1,
                'language_code' => 'en',
                'name' => 'Primary school',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 2,
                'language_code' => 'tr',
                'name' => 'Ortaokul',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 2,
                'language_code' => 'en',
                'name' => 'Middle School',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 3,
                'language_code' => 'tr',
                'name' => 'Lise',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 3,
                'language_code' => 'en',
                'name' => 'High school',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 4,
                'language_code' => 'tr',
                'name' => 'Lisans',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 4,
                'language_code' => 'en',
                'name' => 'License',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 5,
                'language_code' => 'tr',
                'name' => 'Ön Lisans',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 5,
                'language_code' => 'en',
                'name' => 'Undergraduate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 6,
                'language_code' => 'tr',
                'name' => 'Yüksek Lisans',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 6,
                'language_code' => 'en',
                'name' => 'Post Graduate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 7,
                'language_code' => 'tr',
                'name' => 'Doktora',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_level_id' => 7,
                'language_code' => 'en',
                'name' => 'Doctorate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}

