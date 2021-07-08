<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnOngoingHealthProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_ongoing_health_problem')->truncate();
        \DB::table('dfntn_ongoing_health_problem')->insert([
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
        \DB::table('dfntn_ongoing_health_problem_translation')->truncate();
        \DB::table('dfntn_ongoing_health_problem_translation')->insert([
            [
                'ongoing_health_problem_id' => 1,
                'language_code' => 'tr',
                'name' => 'Devam Ediyor',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'ongoing_health_problem_id' => 1,
                'language_code' => 'en',
                'name' => 'Continues',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'ongoing_health_problem_id' => 2,
                'language_code' => 'tr',
                'name' => 'İyileşti',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'ongoing_health_problem_id' => 2,
                'language_code' => 'en',
                'name' => 'Got Better',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
