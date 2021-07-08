<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnMethodApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_method_application')->truncate();
        \DB::table('dfntn_method_application')->insert([
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
        \DB::table('dfntn_method_application_translation')->truncate();
        \DB::table('dfntn_method_application_translation')->insert([
            [
                'method_application_id' => 1,
                'language_code' => 'tr',
                'name' => 'Acil Durum Hattı',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 1,
                'language_code' => 'en',
                'name' => 'Emergency Line',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 2,
                'language_code' => 'tr',
                'name' => 'İnternet veya Telefon',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 2,
                'language_code' => 'en',
                'name' => 'Internet or Phone',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 3,
                'language_code' => 'tr',
                'name' => 'Ofis / Merkez Ziyareti',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 3,
                'language_code' => 'en',
                'name' => 'Office / Center Visit',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 4,
                'language_code' => 'tr',
                'name' => 'Ev ziyareti',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 4,
                'language_code' => 'en',
                'name' => 'Home Visit',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 5,
                'language_code' => 'tr',
                'name' => 'Oryantasyon',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 5,
                'language_code' => 'en',
                'name' => 'orientation',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 6,
                'language_code' => 'tr',
                'name' => 'Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'method_application_id' => 6,
                'language_code' => 'en',
                'name' => 'Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}

