<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnEmploymentIncomeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_employment_income_type')->truncate();
        \DB::table('dfntn_employment_income_type')->insert([
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
            ]
        ]);
        \DB::table('dfntn_employment_income_type_translation')->truncate();
        \DB::table('dfntn_employment_income_type_translation')->insert([
            [
                'employment_income_type_id' => 1,
                'language_code' => 'tr',
                'name' => 'Para kayna???? yok',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 1,
                'language_code' => 'en',
                'name' => 'No source of money',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 2,
                'language_code' => 'tr',
                'name' => 'Kal??c?? ??stihdam',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 2,
                'language_code' => 'en',
                'name' => 'Permanent Employment',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 3,
                'language_code' => 'tr',
                'name' => 'Ge??ici istihdam',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 3,
                'language_code' => 'en',
                'name' => 'Temporary employment',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 4,
                'language_code' => 'tr',
                'name' => 'Dilenme',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 4,
                'language_code' => 'en',
                'name' => 'Begging',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 5,
                'language_code' => 'tr',
                'name' => 'K??????k ticaret',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 5,
                'language_code' => 'en',
                'name' => 'Small trade',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 6,
                'language_code' => 'tr',
                'name' => 'Tasarruf',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 6,
                'language_code' => 'en',
                'name' => 'Saving',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 7,
                'language_code' => 'tr',
                'name' => 'Para G??ndermeler',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 7,
                'language_code' => 'en',
                'name' => 'Send Money',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 8,
                'language_code' => 'tr',
                'name' => 'Krediler/bor??land??rma para',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 8,
                'language_code' => 'en',
                'name' => 'Loans / borrowing money',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 9,
                'language_code' => 'tr',
                'name' => 'Hediye/arakada??lar??ndan veya ailenizden destek',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 9,
                'language_code' => 'en',
                'name' => 'Gift / support from friends or family',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 10,
                'language_code' => 'tr',
                'name' => 'STK yard??m??',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 10,
                'language_code' => 'en',
                'name' => 'NGO assistance',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 11,
                'language_code' => 'tr',
                'name' => 'Son di??eride',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'employment_income_type_id' => 11,
                'language_code' => 'en',
                'name' => 'In the last other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
