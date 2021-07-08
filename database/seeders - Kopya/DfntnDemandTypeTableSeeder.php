<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnDemandTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_demand_type')->truncate();
        \DB::table('dfntn_demand_type')->insert([
            [
                'code' => 'DTYPE-' . date_format(date_create(date('Ymdhis')), 'U'),
                'sort_order' => 1,
                'status' => 1,
                'module' => 'legal',
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'code' => 'DTYPE-' . date_format(date_create(date('Ymdhis')), 'U'),
                'sort_order' => 1,
                'status' => 1,
                'module' => 'health',
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'code' => 'DTYPE-' . date_format(date_create(date('Ymdhis')), 'U'),
                'sort_order' => 1,
                'status' => 1,
                'module' => 'education',
                'user_transacting' => rand(1, 30),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
        \DB::table('dfntn_demand_type_translation')->truncate();
        \DB::table('dfntn_demand_type_translation')->insert([
            [
                'demand_type_id'    => 1,
                'language_code'     => 'tr',
                'name'              => 'Hukuk Talebi',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_type_id'    => 1,
                'language_code'     => 'en',
                'name'              => 'Legal Demand',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_type_id'    => 2,
                'language_code'     => 'tr',
                'name'              => 'Sağlık Talebi',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_type_id'    => 2,
                'language_code'     => 'en',
                'name'              => 'Health Demand',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_type_id'    => 3,
                'language_code'     => 'tr',
                'name'              => 'Eğitim Talebi',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
            [
                'demand_type_id'    => 3,
                'language_code'     => 'en',
                'name'              => 'Education Demand',
                'date_modified'     => date("Y-m-d H:i:s"),
                'date_created'      => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
