<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnHealthProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_health_problem')->truncate();
        \DB::table('dfntn_health_problem')->insert([
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
        \DB::table('dfntn_health_problem_translation')->truncate();
        \DB::table('dfntn_health_problem_translation')->insert([
            [
                'health_problem_id' => 1,
                'language_code' => 'tr',
                'name' => 'Acil Sağlık Sorunları',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 1,
                'language_code' => 'en',
                'name' => 'Emergency Health Problems',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 2,
                'language_code' => 'tr',
                'name' => 'Kronik Sağlık Sorunları',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 2,
                'language_code' => 'en',
                'name' => 'Chronic Health Problems',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 3,
                'language_code' => 'tr',
                'name' => 'Engelliler',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 3,
                'language_code' => 'en',
                'name' => 'The disabled',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 4,
                'language_code' => 'tr',
                'name' => 'Devam Eden Tedaviler',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 4,
                'language_code' => 'en',
                'name' => 'Ongoing Treatments',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 5,
                'language_code' => 'tr',
                'name' => 'Jinekolojik Hastalık',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'health_problem_id' => 5,
                'language_code' => 'en',
                'name' => 'Gynecological Disease',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}
