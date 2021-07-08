<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('dfntn_city')->truncate();
		\DB::table('dfntn_city')->insert(array(
			0 => array(
                'city_id' => 1,
                'country_id' => 189,
                'name' => 'Adana',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'city_id' => 2,
                'country_id' => 189,
                'name' => 'Adıyaman',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'city_id' => 3,
                'country_id' => 189,
                'name' => 'Afyonkarahisar',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'city_id' => 4,
                'country_id' => 189,
                'name' => 'Ağrı',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'city_id' => 5,
                'country_id' => 189,
                'name' => 'Amasya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'city_id' => 6,
                'country_id' => 189,
                'name' => 'Ankara',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'city_id' => 7,
                'country_id' => 189,
                'name' => 'Antalya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'city_id' => 8,
                'country_id' => 189,
                'name' => 'Artvin',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            8 => array(
                'city_id' => 9,
                'country_id' => 189,
                'name' => 'Aydın',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            9 => array(
                'city_id' => 10,
                'country_id' => 189,
                'name' => 'Balıkesir',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            10 => array(
                'city_id' => 11,
                'country_id' => 189,
                'name' => 'Bilecik',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            11 => array(
                'city_id' => 12,
                'country_id' => 189,
                'name' => 'Bingöl',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            12 => array(
                'city_id' => 13,
                'country_id' => 189,
                'name' => 'Bitlis',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            13 => array(
                'country_id' => 189,
                'city_id' => 14,
                'name' => 'Bolu',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            14 => array(
                'city_id' => 15,
                'country_id' => 189,
                'name' => 'Burdur',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            15 => array(
                'city_id' => 16,
                'country_id' => 189,
                'name' => 'Bursa',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            16 => array(
                'city_id' => 17,
                'country_id' => 189,
                'name' => 'Çanakkale',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'city_id' => 18,
                'country_id' => 189,
                'name' => 'Çankırı',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'city_id' => 19,
                'country_id' => 189,
                'name' => 'Çorum',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'city_id' => 20,
                'country_id' => 189,
                'name' => 'Denizli',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'city_id' => 21,
                'country_id' => 189,
                'name' => 'Diyarbakır',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            21 => array(
                'city_id' => 22,
                'country_id' => 189,
                'name' => 'Edirne',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            22 => array(
                'city_id' => 23,
                'country_id' => 189,
                'name' => 'Elazığ',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '23',
                'phone_code' => '424',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            23 => array(
                'country_id' => 189,
                'city_id' => 24,
                'name' => 'Erzincan',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            24 => array(
                'city_id' => 25,
                'country_id' => 189,
                'name' => 'Erzurum',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            25 => array(
                'city_id' => 26,
                'country_id' => 189,
                'name' => 'Eskişehir',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            26 => array(
                'city_id' => 27,
                'country_id' => 189,
                'name' => 'Gaziantep',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            27 => array(
                'city_id' => 28,
                'country_id' => 189,
                'name' => 'Giresun',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            28 => array(
                'city_id' => 29,
                'country_id' => 189,
                'name' => 'Gümüşhane',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            29 => array(
                'city_id' => 30,
                'country_id' => 189,
                'name' => 'Hakkari',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            30 => array(
                'city_id' => 31,
                'country_id' => 189,
                'name' => 'Hatay',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            31 => array(
                'city_id' => 32,
                'country_id' => 189,
                'name' => 'Isparta',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            32 => array(
                'city_id' => 33,
                'country_id' => 189,
                'name' => 'Mersin',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            33 => array(
                'city_id' => 34,
                'country_id' => 189,
                'name' => 'İstanbul',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            34 => array(
                'city_id' => 35,
                'country_id' => 189,
                'name' => 'İzmir',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            35 => array(
                'city_id' => 36,
                'country_id' => 189,
                'name' => 'Kars',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            36 => array(
                'city_id' => 37,
                'country_id' => 189,
                'name' => 'Kastamonu',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            37 => array(
                'city_id' => 38,
                'country_id' => 189,
                'name' => 'Kayseri',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            38 => array(
                'city_id' => 39,
                'country_id' => 189,
                'name' => 'Kırklareli',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            39 => array(
                'city_id' => 40,
                'country_id' => 189,
                'name' => 'Kırşehir',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            40 => array(
                'city_id' => 41,
                'country_id' => 189,
                'name' => 'Kocaeli',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            41 => array(
                'city_id' => 42,
                'country_id' => 189,
                'name' => 'Konya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            42 => array(
                'city_id' => 43,
                'country_id' => 189,
                'name' => 'Kütahya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            43 => array(
                'city_id' => 44,
                'country_id' => 189,
                'name' => 'Malatya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            44 => array(
                'city_id' => 45,
                'country_id' => 189,
                'name' => 'Manisa',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            45 => array(
                'city_id' => 46,
                'country_id' => 189,
                'name' => 'Kahramanmaraş',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            46 => array(
                'city_id' => 47,
                'country_id' => 189,
                'name' => 'Mardin',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            47 => array(
                'city_id' => 48,
                'country_id' => 189,
                'name' => 'Muğla',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            48 => array(
                'city_id' => 49,
                'country_id' => 189,
                'name' => 'Muş',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            49 => array(
                'city_id' => 50,
                'country_id' => 189,
                'name' => 'Nevşehir',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            50 => array(
                'city_id' => 51,
                'country_id' => 189,
                'name' => 'Niğde',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            51 => array(
                'city_id' => 52,
                'country_id' => 189,
                'name' => 'Ordu',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            52 => array(
                'city_id' => 53,
                'country_id' => 189,
                'name' => 'Rize',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            53 => array(
                'city_id' => 54,
                'country_id' => 189,
                'name' => 'Sakarya',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            54 => array(
                'city_id' => 55,
                'country_id' => 189,
                'name' => 'Samsun',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            55 => array(
                'city_id' => 56,
                'country_id' => 189,
                'name' => 'Siirt',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            56 => array(
                'city_id' => 57,
                'country_id' => 189,
                'name' => 'Sinop',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            57 => array(
                'city_id' => 58,
                'country_id' => 189,
                'name' => 'Sivas',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            58 => array(
                'city_id' => 59,
                'country_id' => 189,
                'name' => 'Tekirdağ',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            59 => array(
                'city_id' => 60,
                'country_id' => 189,
                'name' => 'Tokat',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            60 => array(
                'city_id' => 61,
                'country_id' => 189,
                'name' => 'Trabzon',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            61 => array(
                'city_id' => 62,
                'country_id' => 189,
                'name' => 'Tunceli',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            62 => array(
                'city_id' => 63,
                'country_id' => 189,
                'name' => 'Şanlıurfa',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            63 => array(
                'city_id' => 64,
                'country_id' => 189,
                'name' => 'Uşak',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            64 => array(
                'city_id' => 65,
                'country_id' => 189,
                'name' => 'Van',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            65 => array(
                'city_id' => 66,
                'country_id' => 189,
                'name' => 'Yozgat',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            66 => array(
                'city_id' => 67,
                'country_id' => 189,
                'name' => 'Zonguldak',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            67 => array(
                'city_id' => 68,
                'country_id' => 189,
                'name' => 'Aksaray',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            68 => array(
                'city_id' => 69,
                'country_id' => 189,
                'name' => 'Bayburt',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            69 => array(
                'city_id' => 70,
                'country_id' => 189,
                'name' => 'Karaman',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            70 => array(
                'city_id' => 71,
                'country_id' => 189,
                'name' => 'Kırıkkale',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            71 => array(
                'city_id' => 72,
                'country_id' => 189,
                'name' => 'Batman',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            72 => array(
                'city_id' => 73,
                'country_id' => 189,
                'name' => 'Şırnak',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            73 => array(
                'city_id' => 74,
                'country_id' => 189,
                'name' => 'Bartın',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            74 => array(
                'city_id' => 75,
                'country_id' => 189,
                'name' => 'Ardahan',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            75 => array(
                'city_id' => 76,
                'country_id' => 189,
                'name' => 'Iğdır',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            76 => array(
                'city_id' => 77,
                'country_id' => 189,
                'name' => 'Yalova',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            77 => array(
                'city_id' => 78,
                'country_id' => 189,
                'name' => 'Karabük',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            78 => array(
                'city_id' => 79,
                'country_id' => 189,
                'name' => 'Kilis',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            79 => array(
                'city_id' => 80,
                'country_id' => 189,
                'name' => 'Osmaniye',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            ),
            80 => array(
                'city_id' => 81,
                'country_id' => 189,
                'name' => 'Düzce',
                'iso_code_2' => '',
                'iso_code_3' => '',
                'traffic_code' => '',
                'phone_code' => '',
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
				'date_created' => date("Y-m-d H:i:s"),
            )
        ));
    }
}