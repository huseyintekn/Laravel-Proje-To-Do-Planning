<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnDemandEducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_demand_education')->truncate();
        \DB::table('dfntn_demand_education')->insert([
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
        \DB::table('dfntn_demand_education_translation')->truncate();
        \DB::table('dfntn_demand_education_translation')->insert([
            [
                'demand_education_id'    => 1,
                'language_code'     => 'tr',
                'name'              => 'Türkçe Dil Öğretimi',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 1,
                'language_code'     => 'en',
                'name'              => 'Turkish Language Teaching',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 2,
                'language_code'     => 'tr',
                'name'              => 'Mesleki Eğitim Bursu',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 2,
                'language_code'     => 'en',
                'name'              => 'Vocational Training Scholarship',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 3,
                'language_code'     => 'tr',
                'name'              => 'Telafi Eğitimi',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 3,
                'language_code'     => 'en',
                'name'              => 'Compensatory Education',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 4,
                'language_code'     => 'tr',
                'name'              => 'Taşıma Hizmeti',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 4,
                'language_code'     => 'en',
                'name'              => 'Transport Service',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 5,
                'language_code'     => 'tr',
                'name'              => 'Kırtasiye Desteği',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 5,
                'language_code'     => 'en',
                'name'              => 'Stationery Support',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 6,
                'language_code'     => 'tr',
                'name'              => 'Psikososyal Destek',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_education_id'    => 6,
                'language_code'     => 'en',
                'name'              => 'Psychosocial Support',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
