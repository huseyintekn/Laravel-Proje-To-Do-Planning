<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualMarriageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_marriage')->truncate();
        \DB::table('individual_marriage')->insert(array(
            0 => array(
                'individual_marriage_id'  => 1,
                'individual_id'           => 1,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 12,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'individual_marriage_id'  => 2,
                'individual_id'           => 2,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Tom',
                'children_number'         => 10,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'individual_marriage_id'  => 3,
                'individual_id'           => 3,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 1,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'individual_marriage_id'  => 4,
                'individual_id'           => 4,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Tom',
                'children_number'         => 4,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'individual_marriage_id'  => 5,
                'individual_id'           => 5,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 6,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'individual_marriage_id'  => 6,
                'individual_id'           => 6,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Tom',
                'children_number'         =>5,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'individual_marriage_id'  => 7,
                'individual_id'           => 7,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 3,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'individual_marriage_id'  => 8,
                'individual_id'           => 8,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Tom',
                'children_number'         => 4,
                'user_transacting'        => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            8 => array(
                'individual_marriage_id'  => 9,
                'individual_id'           => 9,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 3,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            9 => array(
                'individual_marriage_id'  => 10,
                'individual_id'           => 10,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Tom',
                'children_number'         => 1,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            10 => array(
                'individual_marriage_id'  => 11,
                'individual_id'           => 11,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Jessica',
                'children_number'         => 11,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            11 => array(
                'individual_marriage_id'  => 12,
                'individual_id'           => 12,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 3,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            12 => array(
                'individual_marriage_id'  => 13,
                'individual_id'           => 13,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 13,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            13 => array(
                'individual_marriage_id'  => 14,
                'individual_id'           => 14,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 14,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            14 => array(
                'individual_marriage_id'  => 15,
                'individual_id'           => 15,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 4,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            15 => array(
                'individual_marriage_id'  => 16,
                'individual_id'           => 16,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 2,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),

            16 => array(
                'individual_marriage_id'  => 17,
                'individual_id'           => 17,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 1,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'individual_marriage_id'  => 18,
                'individual_id'           => 18,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 12,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'individual_marriage_id'  => 19,
                'individual_id'           => 19,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 3,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'individual_marriage_id'  => 20,
                'individual_id'           => 20,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 9,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'individual_marriage_id'  => 21,
                'individual_id'           => 21,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 4,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            21 => array(
                'individual_marriage_id'  => 22,
                'individual_id'           => 22,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 7,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            22 => array(
                'individual_marriage_id'  => 23,
                'individual_id'           => 23,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 5,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            23 => array(
                'individual_marriage_id'  => 24,
                'individual_id'           => 24,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 6,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            24 => array(
                'individual_marriage_id'  => 25,
                'individual_id'           => 25,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 2,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            ),
            25 => array(
                'individual_marriage_id'  => 26,
                'individual_id'           => 26,
                'marriage_type_id'        => rand(1,4),
                'validity_status'         => rand(1,3),
                'partner_name'            => 'Maher Ayhan',
                'children_number'         => 6,
                'user_transacting' => rand(1, 30),
                'date_start'              => date("Y-m-d H:i:s"),
                'date_end'                => date("Y-m-d H:i:s"),
                'date_modified'           => date("Y-m-d H:i:s"),
                'date_created'            => date("Y-m-d H:i:s"),
            )

        ));
    }
}