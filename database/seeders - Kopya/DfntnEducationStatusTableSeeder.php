<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEducationStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_education_status')->truncate();
        \DB::table('dfntn_education_status')->insert([
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
        \DB::table('dfntn_education_status_translation')->truncate();
        \DB::table('dfntn_education_status_translation')->insert([
            [
                'education_status_id' => 1,
                'language_code' => 'tr',
                'name' => 'Terk',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_status_id' => 1,
                'language_code' => 'en',
                'name' => 'Abandonment',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_status_id' => 2,
                'language_code' => 'tr',
                'name' => 'Devam',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_status_id' => 2,
                'language_code' => 'en',
                'name' => 'Continue',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_status_id' => 3,
                'language_code' => 'tr',
                'name' => 'Mezun',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'education_status_id' => 3,
                'language_code' => 'en',
                'name' => 'Graduated',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
