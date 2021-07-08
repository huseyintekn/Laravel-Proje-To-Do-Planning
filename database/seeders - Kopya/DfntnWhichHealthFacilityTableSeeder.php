<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnWhichHealthFacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_which_health_facility')->truncate();
        \DB::table('dfntn_which_health_facility')->insert([
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
        \DB::table('dfntn_which_health_facility_translation')->truncate();
        \DB::table('dfntn_which_health_facility_translation')->insert([
            [
                'which_health_facility_id' => 1,
                'language_code' => 'tr',
                'name' => 'Hastane',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 1,
                'language_code' => 'en',
                'name' => 'Hospital',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 2,
                'language_code' => 'tr',
                'name' => 'Kamu Hastanesi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 2,
                'language_code' => 'en',
                'name' => 'Public Hospital',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 3,
                'language_code' => 'tr',
                'name' => 'Özel Hastane',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 3,
                'language_code' => 'en',
                'name' => 'Private Hospital',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 4,
                'language_code' => 'tr',
                'name' => 'Suriye Kliniği',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 4,
                'language_code' => 'en',
                'name' => 'Syrian Clinic',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 5,
                'language_code' => 'tr',
                'name' => 'Sağlık Merkezi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 5,
                'language_code' => 'en',
                'name' => 'Medical Center',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 6,
                'language_code' => 'tr',
                'name' => 'Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'which_health_facility_id' => 6,
                'language_code' => 'en',
                'name' => 'Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
