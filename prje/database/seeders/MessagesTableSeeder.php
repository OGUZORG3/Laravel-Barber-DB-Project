<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert(

            [
                [
                'messages_name' => 'adsoyad',
                'messages_mail'=> 'mail',
                'messages_tel'=> 'telefon',
                'messages_mesaj'=> 'mesaj',
                ]
            ]

        );
    }
}
