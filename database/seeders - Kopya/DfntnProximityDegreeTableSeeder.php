<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnProximityDegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_proximity_degree')->truncate();
        \DB::table('dfntn_proximity_degree')->insert([
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
            ],
            [
                'status' => 1,
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
        \DB::table('dfntn_proximity_degree_translation')->truncate();
        \DB::table('dfntn_proximity_degree_translation')->insert([
            [
                'proximity_degree_id' => 1,
                'language_code' => 'tr',
                'name' => 'Anne',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 1,
                'language_code' => 'en',
                'name' => 'Mother',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 2,
                'language_code' => 'tr',
                'name' => 'Baba',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 2,
                'language_code' => 'en',
                'name' => 'Father',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 3,
                'language_code' => 'tr',
                'name' => 'Büyük Anne',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 3,
                'language_code' => 'en',
                'name' => 'GrandMother',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 4,
                'language_code' => 'tr',
                'name' => 'Büyük Baba',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 4,
                'language_code' => 'en',
                'name' => 'GrandFather',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 5,
                'language_code' => 'tr',
                'name' => 'Kız Kardeş',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 5,
                'language_code' => 'en',
                'name' => 'Sister',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 6,
                'language_code' => 'tr',
                'name' => 'Erkek Kardeş',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 6,
                'language_code' => 'en',
                'name' => 'Brother',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 7,
                'language_code' => 'tr',
                'name' => 'Amca/Dayı',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 7,
                'language_code' => 'en',
                'name' => 'Uncle',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 8,
                'language_code' => 'tr',
                'name' => 'Hala/Teyze',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 8,
                'language_code' => 'en',
                'name' => 'Aunt',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 9,
                'language_code' => 'tr',
                'name' => 'Kız Çocuk',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 9,
                'language_code' => 'en',
                'name' => 'Daughter',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 10,
                'language_code' => 'tr',
                'name' => 'Erkek Çocuk',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 10,
                'language_code' => 'en',
                'name' => 'Son',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 11,
                'language_code' => 'tr',
                'name' => 'Kuzen',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'proximity_degree_id' => 11,
                'language_code' => 'en',
                'name' => 'Cousin',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}

