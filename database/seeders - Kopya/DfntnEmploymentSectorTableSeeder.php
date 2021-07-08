<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEmploymentSectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_employment_sector')->truncate();
        \DB::table('dfntn_employment_sector')->insert([
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
        \DB::table('dfntn_employment_sector_translation')->truncate();
        \DB::table('dfntn_employment_sector_translation')->insert([
            [
                'employment_sector_id' => 1,
                'language_code' => 'tr',
                'name' => 'Tekstil',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 1,
                'language_code' => 'en',
                'name' => 'Textile',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 2,
                'language_code' => 'tr',
                'name' => 'İnşaat',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 2,
                'language_code' => 'en',
                'name' => 'Build',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 3,
                'language_code' => 'tr',
                'name' => 'Tarım',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 3,
                'language_code' => 'en',
                'name' => 'Agriculture',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 4,
                'language_code' => 'tr',
                'name' => 'İmalat',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 4,
                'language_code' => 'en',
                'name' => 'Production',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 5,
                'language_code' => 'tr',
                'name' => 'Gida hizmeti endüstresi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 5,
                'language_code' => 'en',
                'name' => 'Food service industry',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 6,
                'language_code' => 'tr',
                'name' => 'İstihdam Türü Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_sector_id' => 6,
                'language_code' => 'en',
                'name' => 'Employment Type Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
