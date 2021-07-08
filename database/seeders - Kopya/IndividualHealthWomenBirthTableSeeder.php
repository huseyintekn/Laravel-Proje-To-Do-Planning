<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualHealthWomenBirthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_health_women_birth')->truncate();
        \DB::table('individual_health_women_birth')->insert(array(
            0 => array(
                'individual_id' => 1,
                'pregnant'      => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'individual_id'=> 2,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'individual_id'=> 3,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'individual_id' => 4,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'individual_id'=> 5,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'individual_id' => 6,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'individual_id' => 7,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'individual_id' => 8,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            8 => array(
                'individual_id' => 9,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            9 => array(
                'individual_id' => 10,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            10 => array(
                'individual_id' => 11,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            11 => array(
                'individual_id' => 12,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            12 => array(
                'individual_id' => 13,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            13 => array(
                'individual_id'=> 14,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            14 => array(
                'individual_id' => 15,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            15 => array(
                'individual_id' => 16,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),

            16 => array(
                'individual_id'=> 17,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'individual_id' => 18,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'individual_id' => 19,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'individual_id' => 20,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'individual_id'=> 21,
                'pregnant'  => rand(1,3),
                'country_birth' => 175,
                'place_birth' => rand(1,8),
                'document_birth'  => rand(1,6),
                'birth_result'  => rand(1,3),
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            )

        ));
    }
}
