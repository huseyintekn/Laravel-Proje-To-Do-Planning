<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnBirthDocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_birth_document')->truncate();
        \DB::table('dfntn_birth_document')->insert([
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
        \DB::table('dfntn_birth_document_translation')->truncate();
        \DB::table('dfntn_birth_document_translation')->insert([
            [
                'birth_document_id' => 1,
                'language_code' => 'tr',
                'name' => 'Hastane doğum raporu verdi',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 1,
                'language_code' => 'en',
                'name' => 'Hospital gave birth report',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
            ,
            [
                'birth_document_id' => 2,
                'language_code' => 'tr',
                'name' => 'Nüfus bölümü bir doğum izni yayınladı',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 2,
                'language_code' => 'en',
                'name' => 'Population division has issued a maternity leave',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ] ,
            [
                'birth_document_id' => 3,
                'language_code' => 'tr',
                'name' => 'Geçici koruma kartı çıkartıldı',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 3,
                'language_code' => 'en',
                'name' => 'Temporary protection card issued',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ]
            ,
            [
                'birth_document_id' => 4,
                'language_code' => 'tr',
                'name' => 'Bebek herhangi bir makam tarafından tescillendirilmemiş',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 4,
                'language_code' => 'en',
                'name' => 'The baby is not registered by any authority',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 5,
                'language_code' => 'tr',
                'name' => 'Bilgi yok',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 5,
                'language_code' => 'en',
                'name' => 'No information',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 6,
                'language_code' => 'tr',
                'name' => 'Diğer',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
            [
                'birth_document_id' => 6,
                'language_code' => 'en',
                'name' => 'Other',
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}

