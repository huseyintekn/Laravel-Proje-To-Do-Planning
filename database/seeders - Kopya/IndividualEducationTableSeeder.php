<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualEducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_education')->truncate();
        \DB::table('individual_education')->insert(array(
            0 => array(
                'individual_id'              => 1,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Bakırköy',
                'division'                   => 'Sayısal',
                'school_name'                => 'Bakırköy Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'individual_id'              => 2,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Kadıköy',
                'division'                   => 'Sözel',
                'school_name'                => 'MEHMET AKİF ERSOY İLKOKULU',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            2 => array(
                'individual_id'              => 3,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Bahçelievler',
                'division'                   => 'Sayısal',
                'school_name'                => 'Diyadin Mesleki ve Teknik Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            3 => array(
                'individual_id'              => 4,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Bağcılar',
                'division'                   =>'Eşit Ağırlık',
                'school_name'                => 'Cumhuriyet İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            4 => array(
                'individual_id'              => 5,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Esenler',
                'division'                   =>'Sayısal',
                'school_name'                => 'KIZILCA İMAM HATİP ORTAOKULU',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            5 => array(
                'individual_id'              => 6,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Esenler',
                'division'                   => 'Sayısal',
                'school_name'                => 'Bala Anadolu İmam Hatip Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            6 => array(
                'individual_id'              => 7,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Küçükçekmece',
                'division'                   => 'Sözel',
                'school_name'                => 'Leyla Kahraman Sevim Ertenü Ortaokulu',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              => date("Y-m-d H:i:s"),
                'date_created'               => date("Y-m-d H:i:s"),
            ),
            7 => array(
                'individual_id'              => 8,
                'level_id'                   => rand(1,7),
                'type_id'                    => rand(1,5),
                'language_id'                => rand(1,2),
                'place'                      => 'Esenyurt',
                'division'                   =>'Sözel',
                'school_name'                => 'Ardanuç Anaokulu',
                'user_transacting' => rand(1, 30),
                'education_status'           => rand(1,3),
                'date_start'                 => date("Y-m-d H:i:s"),
                'date_end'                   => date("Y-m-d H:i:s"),
                'date_modified'              =>date("Y-m-d H:i:s"),
                'date_created'               =>date("Y-m-d H:i:s"),
            ),
            8 => array(
                'individual_id' => 9,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Fatih',
                'division' =>'Sayısal',
                'school_name' => 'Sazlıköy Hilmi Fırat Ortaokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            9 => array(
                'individual_id' => 10,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Taksim',
                'division' =>'Sayısal',
                'school_name' => 'Hüseyin Balya Mesleki ve Teknik Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            10 => array(
                'individual_id' => 11,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Göztepe',
                'division' =>'Eşit Ağırlık',
                'school_name' => 'Bozüyük Mimar Sinan Mesleki ve Teknik Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            11 => array(
                'individual_id' => 12,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Pendik',
                'division' =>'Sayısal',
                'school_name' => ' İMKB Gözeler Haraba Ortaokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            12 => array(
                'individual_id' => 13,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Kadıköy',
                'division' =>'Sayısal',
                'school_name' => ' İpekyolu Mesleki ve Teknik Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            13 => array(
                'individual_id' => 14,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Kadıköy',
                'division' =>'Eşit Ağırlık',
                'school_name' => 'Atatürk İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            14 => array(
                'individual_id' => 15,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Ümraniye',
                'division' =>'Sözel',
                'school_name' => ' Mehmet Aker İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  =>date("Y-m-d H:i:s"),
            ),
            15 => array(
                'individual_id' => 16,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Arnavutköy',
                'division' =>'Sayısal',
                'school_name' => ' Mehmet Aker İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),

            16 => array(
                'individual_id' => 17,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Esenyurt',
                'division' =>'Sayısal',
                'school_name' => 'Ezine Celalettin Topçu Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            17 => array(
                'individual_id' => 18,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Yeşilköy',
                'division' =>'Eşit Ağırlık',
                'school_name' => 'Atatürk Mesleki ve Teknik Anadolu Lisesi',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            18 => array(
                'individual_id' => 19,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Florya',
                'division' =>'Eşit Ağırlık',
                'school_name' => 'Nenehatun Anaokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            19 => array(
                'individual_id' => 20,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Menekşe',
                'division' =>'Sözel',
                'school_name' => 'Uzunpınar İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' =>date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            20 => array(
                'individual_id' => 21,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Yeşilyurt',
                'division' =>'Sayısal',
                'school_name' => 'Tosya İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            21 => array(
                'individual_id' => 22,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Bağcılar',
                'division' =>'Sözel',
                'school_name' => 'İNCESU ANADOLU İMAM HATİP LİSESİ',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            22 => array(
                'individual_id' => 23,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Beşiktaş',
                'division' =>'Eşit Ağırlık',
                'school_name' => 'Aşıkpaşa Ortaokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            23 => array(
                'individual_id' => 24,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Beşiktaş',
                'division' =>'Sayısal',
                'school_name' => ' Öğretmen Şevket Özay İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            24 => array(
                'individual_id' => 25,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Beşiktaş',
                'division' =>'Sayısal',
                'school_name' => 'Zeytinli İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            ),
            25 => array(
                'individual_id' => 26,
                'level_id' => rand(1,7),
                'type_id'=>rand(1,5),
                'language_id' => rand(1,2),
                'place' => 'Kadıköy',
                'division' =>'Sayısal',
                'school_name' => 'Moda İlkokulu',
                'user_transacting' => rand(1, 30),
                'education_status' => rand(1,3),
                'date_start' => date("Y-m-d H:i:s"),
                'date_end' => date("Y-m-d H:i:s"),
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created'  => date("Y-m-d H:i:s"),
            )

        ));
    }
}
