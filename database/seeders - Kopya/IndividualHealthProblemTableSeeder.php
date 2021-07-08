<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualHealthProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_health_problem')->truncate();
        \DB::table('individual_health_problem')->insert(array(
            0 => array(
                'individual_id'               => 1,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'individual_id'               => 2,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'individual_id'               => 3,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'individual_id'               => 4,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'individual_id'               => 5,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'individual_id'               => 6,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'individual_id'               => 7,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'individual_id'               => 8,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            8 => array(
                'individual_id'               => 9,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            9 => array(
                'individual_id'               => 10,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            10 => array(
                'individual_id'               => 11,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            11 => array(
                'individual_id'               => 12,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            12 => array(
                'individual_id'               => 13,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            13 => array(
                'individual_id'               => 14,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            14 => array(
                'individual_id'               => 15,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            15 => array(
                'individual_id'               => 16,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),

            16 => array(
                'individual_id'               => 17,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'individual_id'               => 18,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'individual_id'               => 19,
                'problems_id'                => rand(1,5),
                'problem_continue'           => rand(1,6),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'individual_id'               => 20,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'individual_id'               => 21,
                'problems_id'                 => rand(1,5),
                'problem_continue'            => rand(1,2),
                'user_transacting' => rand(1, 30),
                'problem_description'         => 'lorem lorem lorem',
                'date_modified'               => date("Y-m-d H:i:s"),
                'date_created'                => date("Y-m-d H:i:s"),
            )

        ));
    }
}
