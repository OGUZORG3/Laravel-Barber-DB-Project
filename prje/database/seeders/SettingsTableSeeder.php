<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'settings_description' => 'Başlık',
                'settings_key'=> 'title',
                'settings_value'=> 'Laravel CMS proje',
                'settings_type'=> 'text',
                'settings_must'=> 0,
                'settings_delete' => '0',
                'settings_status' =>'1'

            ],
            [
                'settings_description' => 'Başlık1',
                'settings_key'=> 'title1',
                'settings_value'=> 'Laravel CMS proje1',
                'settings_type'=> 'text1',
                'settings_must'=> 0,
                'settings_delete' => '0',
                'settings_status' => '1'

            ],
            [
                'settings_description' => 'Başlık2',
                'settings_key'=> 'title2',
                'settings_value'=> 'Laravel CMS proje2',
                'settings_type'=> 'text2',
                'settings_must'=> 0,
                'settings_delete' => '0',
                'settings_status' => '1'

            ]
        ]);
    }
}
