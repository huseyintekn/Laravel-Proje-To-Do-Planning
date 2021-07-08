<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnDemandLegalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_demand_legal')->truncate();
        \DB::table('dfntn_demand_legal')->insert([
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
        \DB::table('dfntn_demand_legal_translation')->truncate();
        \DB::table('dfntn_demand_legal_translation')->insert([
            [
                'demand_legal_id'    => 1,
                'language_code'     => 'tr',
                'name'              => 'Politika ve mevzuat uygulamaların uluslararası standartlara uygunluğu hakkı',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 1,
                'language_code'     => 'en',
                'name'              => 'The right of policy and legislative practices to comply with international standards',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 2,
                'language_code'     => 'tr',
                'name'              => 'Hukuksal güvence ve korumaya erişimi hakkı',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 2,
                'language_code'     => 'en',
                'name'              => 'Right to legal protection and access to protection',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 3,
                'language_code'     => 'tr',
                'name'              => 'Hukuki prosedürlere dair sorular ve karşılaşılan sorunlarla ilgili bilgilendirme ve danışmanlık hakkı',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 3,
                'language_code'     => 'en',
                'name'              => 'Right to information and consultancy regarding questions on legal procedures and problems encountered',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 4,
                'language_code'     => 'tr',
                'name'              => 'Göç İdaresi Genel Müdürlüğü’nce (GİGM) takip edilen ve karar verilen her türlü işlemlerle ilgili olarak olumsuz kararlar ve yasal itiraz yolları konusunda danışmanlık ve avukat yardım hakkı,',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_legal_id'    => 4,
                'language_code'     => 'en',
                'name'              => 'The right to consultancy and legal assistance on negative decisions and legal appeals regarding all kinds of transactions followed and decided by the General Directorate of Immigration Administration (GDIA),',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
