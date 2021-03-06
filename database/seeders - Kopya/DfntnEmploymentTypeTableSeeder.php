<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEmploymentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_employment_type')->truncate();
        \DB::table('dfntn_employment_type')->insert([
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
        \DB::table('dfntn_employment_type_translation')->truncate();
        \DB::table('dfntn_employment_type_translation')->insert([
            [
                'employment_type_id' => 1,
                'language_code' => 'tr',
                'name' => 'Kal??c??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 1,
                'language_code' => 'en',
                'name' => 'Permanent',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 2,
                'language_code' => 'tr',
                'name' => 'Kal??c?? Tam zamanl??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 2,
                'language_code' => 'en',
                'name' => 'Permanent Full Time',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 3,
                'language_code' => 'tr',
                'name' => 'Kal??c?? yar?? zmanal??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 3,
                'language_code' => 'en',
                'name' => 'Permanent half-time',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 4,
                'language_code' => 'tr',
                'name' => 'Ge??ici',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 4,
                'language_code' => 'en',
                'name' => 'Temporary',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 5,
                'language_code' => 'tr',
                'name' => 'Mevsimlik',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 5,
                'language_code' => 'en',
                'name' => 'Seasonal',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 6,
                'language_code' => 'tr',
                'name' => 'Ev tabanl??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 6,
                'language_code' => 'en',
                'name' => 'Home based',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 7,
                'language_code' => 'tr',
                'name' => 'D??????nda',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 7,
                'language_code' => 'en',
                'name' => 'Outside',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 8,
                'language_code' => 'tr',
                'name' => 'Par??a ba???? i??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 8,
                'language_code' => 'en',
                'name' => 'Piece work',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 9,
                'language_code' => 'tr',
                'name' => 'Kendi ????inde ??al????an',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 9,
                'language_code' => 'en',
                'name' => 'Self Employed',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 10,
                'language_code' => 'tr',
                'name' => '??stihdam t??r?? di??er',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_type_id' => 10,
                'language_code' => 'en',
                'name' => 'Employment type other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
