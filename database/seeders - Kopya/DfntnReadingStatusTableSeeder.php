<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnReadingStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_reading_status')->truncate();
        \DB::table('dfntn_reading_status')->insert([
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
        \DB::table('dfntn_reading_status_translation')->truncate();
        \DB::table('dfntn_reading_status_translation')->insert([
            [
                'reading_status_id' => 1,
                'language_code' => 'tr',
                'name' => 'Okuma Biliyor',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'reading_status_id' => 1,
                'language_code' => 'en',
                'name' => 'Reading Knows',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'reading_status_id' => 2,
                'language_code' => 'tr',
                'name' => 'Okuma Bilmiyor',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'reading_status_id' => 2,
                'language_code' => 'en',
                'name' => 'Not To Know Reading',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'reading_status_id' => 3,
                'language_code' => 'tr',
                'name' => 'Okuma Biliyor Yazmayı Bilmiyor',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'reading_status_id' => 3,
                'language_code' => 'en',
                'name' => 'Knows How to Read, Doesnt Know How to Write',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
