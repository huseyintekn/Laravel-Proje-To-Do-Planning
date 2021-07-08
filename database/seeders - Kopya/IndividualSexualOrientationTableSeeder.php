<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualSexualOrientationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_sexual_orientation')->truncate();
        \DB::table('individual_sexual_orientation')->insert(array(
            0 => array(
                'individual_sexual_orientation_id'  => 1,
                'individual_id'                     => 1,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'individual_sexual_orientation_id'  => 2,
                'individual_id'                     => 2,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'individual_sexual_orientation_id'  => 3,
                'individual_id'                     => 3,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'individual_sexual_orientation_id'  => 4,
                'individual_id'                     => 4,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'individual_sexual_orientation_id'  => 5,
                'individual_id'                     => 5,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'individual_sexual_orientation_id'  => 6,
                'individual_id'                     => 6,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'individual_sexual_orientation_id'  => 7,
                'individual_id'                     => 7,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'individual_sexual_orientation_id'  => 8,
                'individual_id'                     => 8,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            8 => array(
                'individual_sexual_orientation_id'  => 9,
                'individual_id'                     => 9,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            9 => array(
                'individual_sexual_orientation_id'  => 10,
                'individual_id'                     => 10,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            10 => array(
                'individual_sexual_orientation_id'  => 11,
                'individual_id'                     => 11,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            11 => array(
                'individual_sexual_orientation_id'  => 12,
                'individual_id'                     => 12,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            12 => array(
                'individual_sexual_orientation_id'  => 13,
                'individual_id'                     => 13,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            13 => array(
                'individual_sexual_orientation_id'  => 14,
                'individual_id'                     => 14,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            14 => array(
                'individual_sexual_orientation_id'  => 15,
                'individual_id'                     => 15,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            15 => array(
                'individual_sexual_orientation_id'  => 16,
                'individual_id'                     => 16,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),

            16 => array(
                'individual_sexual_orientation_id'  => 17,
                'individual_id'                     => 17,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'individual_sexual_orientation_id'  => 18,
                'individual_id'                     => 18,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'individual_sexual_orientation_id'  => 19,
                'individual_id'                     => 19,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'individual_sexual_orientation_id'  => 20,
                'individual_id'                     => 20,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'individual_sexual_orientation_id'  => 21,
                'individual_id'                     => 21,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            21 => array(
                'individual_sexual_orientation_id'  => 22,
                'individual_id'                     => 22,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            22 => array(
                'individual_sexual_orientation_id'  => 23,
                'individual_id'                     => 23,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            23 => array(
                'individual_sexual_orientation_id'  => 24,
                'individual_id'                     => 24,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            24 => array(
                'individual_sexual_orientation_id'  => 25,
                'individual_id'                     => 25,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            ),
            25 => array(
                'individual_sexual_orientation_id'  => 26,
                'individual_id'                     => 26,
                'sexual_orientation_id'             => rand(1,7),
                'date_modified'                     => date("Y-m-d H:i:s"),
                'date_created'                      => date("Y-m-d H:i:s"),
            )
    
        ));
    }
}
