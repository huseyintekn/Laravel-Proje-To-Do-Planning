<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnSensitiveStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_sensitive_status')->truncate();
        \DB::table('dfntn_sensitive_status')->insert([
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
        \DB::table('dfntn_sensitive_status_translation')->truncate();
        \DB::table('dfntn_sensitive_status_translation')->insert([
            [
                'sensitive_status_id' => 1,
                'language_code' => 'tr',
                'name' => 'Lgbt Birey',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 1,
                'language_code' => 'en',
                'name' => 'Lgbt Individual',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 2,
                'language_code' => 'tr',
                'name' => 'Çocuk Evliliği',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 2,
                'language_code' => 'en',
                'name' => 'Child Marriage',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 3,
                'language_code' => 'tr',
                'name' => 'Çocuk İşçiliği',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 3,
                'language_code' => 'en',
                'name' => 'Child Labor',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 4,
                'language_code' => 'tr',
                'name' => 'Kronik Tıbbı Hastalık',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 4,
                'language_code' => 'en',
                'name' => 'Chronic Medical Illness',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 5,
                'language_code' => 'tr',
                'name' => 'İşkence Mağduru',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 5,
                'language_code' => 'en',
                'name' => 'Torture Victim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 6,
                'language_code' => 'tr',
                'name' => 'Sgbv Mağduru',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 6,
                'language_code' => 'en',
                'name' => 'Sgbv Victim',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 7,
                'language_code' => 'tr',
                'name' => 'Refakatsiz Yaşlı',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 7,
                'language_code' => 'en',
                'name' => 'Unaccompanied Elderly',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 8,
                'language_code' => 'tr',
                'name' => 'Çocuklu Tek Ebeveyen',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 8,
                'language_code' => 'en',
                'name' => 'Single Parent With Children',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 9,
                'language_code' => 'tr',
                'name' => 'Engelli',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 9,
                'language_code' => 'en',
                'name' => 'Disabled',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 10,
                'language_code' => 'tr',
                'name' => 'Yok',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 10,
                'language_code' => 'en',
                'name' => 'No',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 11,
                'language_code' => 'tr',
                'name' => 'Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'sensitive_status_id' => 11,
                'language_code' => 'en',
                'name' => 'Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]


        ]);
    }
}
