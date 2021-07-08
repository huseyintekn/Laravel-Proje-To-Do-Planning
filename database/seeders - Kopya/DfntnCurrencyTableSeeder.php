<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnCurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_currency')->truncate();
        \DB::table('dfntn_currency')->insert(array(
            0 => array(
                'name' => 'Türk Lirası',
                'code' => 'TRY',
                'symbol_left' => '₺',
                'symbol_right' => '',
                'decimal_place' => '2',
                'value' => '1.00000000',
                'status' => 1,
				'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'name' => 'Dollar',
                'code' => 'USD',
                'symbol_left' => '$',
                'symbol_right' => '',
                'decimal_place' => '2',
                'value' => '1.00000000',
                'status' => 1,
				'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol_left' => '€',
                'symbol_right' => '',
                'decimal_place' => '2',
                'value' => '0.78460002',
                'status' => 1,
				'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            )
        ));
    }
}
