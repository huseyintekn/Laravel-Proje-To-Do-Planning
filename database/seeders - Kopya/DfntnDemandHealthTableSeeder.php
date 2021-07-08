<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnDemandHealthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_demand_health')->truncate();
        \DB::table('dfntn_demand_health')->insert([
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
        \DB::table('dfntn_demand_health_translation')->truncate();
        \DB::table('dfntn_demand_health_translation')->insert([
            [
                'demand_health_id'    => 1,
                'language_code'     => 'tr',
                'name'              => 'Anaların ve çocukların özel bakım ve yardım görme hakları',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 1,
                'language_code'     => 'en',
                'name'              => 'The right of mothers and children to special care and assistance',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 2,
                'language_code'     => 'tr',
                'name'              => 'Kamusal sağlık hizmetlerine erişim hakkı',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 2,
                'language_code'     => 'en',
                'name'              => 'Right to access public health services',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 3,
                'language_code'     => 'tr',
                'name'              => 'Tercümanlık hizmetleri ücretsiz olarak sağlanmalıdır.',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 3,
                'language_code'     => 'en',
                'name'              => 'Translation services should be provided free of charge.',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 4,
                'language_code'     => 'tr',
                'name'              => 'İlaç giderleri anlaşmalı eczanelerle %80’i AFAD, %20’si hasta tarafından sağlanması hakkı',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_health_id'    => 4,
                'language_code'     => 'en',
                'name'              => 'The right to provide drug expenses with contracted pharmacies, 80% by AFAD, 20% by the patient',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
