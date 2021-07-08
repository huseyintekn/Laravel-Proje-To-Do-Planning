<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfntnLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dfntn_language')->truncate();
        \DB::table('dfntn_language')->insert(array(
            0 => array(
                'name' => 'Türkçe',
                'code' => 'tr',
                'locale' => 'tr_TR.UTF-8,tr_TR,tr-tr,turkish',
                'image' => 'turkish',
                'directory' => 'turkish',
                'sort_order' => 1,
                'user_transacting' => rand(1, 30),
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            ),
            1 => array(
                'name' => 'English',
                'code' => 'en',
                'locale' => 'en-US,en_US.UTF-8,en_US,en-gb,english',
                'image' => 'english',
                'directory' => 'english',
                'sort_order' => 2,
                'user_transacting' => rand(1, 30),
                'status' => 1,
                'date_modified' => date("Y-m-d H:i:s"),
                'date_created' => date("Y-m-d H:i:s"),
            )
        ));
    }
}
