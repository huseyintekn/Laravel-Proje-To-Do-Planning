<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnLanguageLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_language_level')->truncate();
        \DB::table('dfntn_language_level')->insert([
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
            ]
        ]);
        \DB::table('dfntn_language_level_translation')->truncate();
        \DB::table('dfntn_language_level_translation')->insert([
            [
                'language_level_id' => 1,
                'language_code' => 'tr',
                'name' => 'Başlangıç',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 1,
                'language_code' => 'en',
                'name' => 'Beginner',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 2,
                'language_code' => 'tr',
                'name' => 'Temel',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 2,
                'language_code' => 'en',
                'name' => 'Elementary',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 3,
                'language_code' => 'tr',
                'name' => 'Orta seviye öncesi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 3,
                'language_code' => 'en',
                'name' => 'Pre-Intermediate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' =>4,
                'language_code' => 'tr',
                'name' => 'Orta seviye',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 4,
                'language_code' => 'en',
                'name' => 'Intermediate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' =>5,
                'language_code' => 'tr',
                'name' => 'Orta seviyenin üstü',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 5,
                'language_code' => 'en',
                'name' => 'Upper-Indermediate',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' =>6,
                'language_code' => 'tr',
                'name' => 'İleri',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'language_level_id' => 6,
                'language_code' => 'en',
                'name' => 'Advanced',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}
