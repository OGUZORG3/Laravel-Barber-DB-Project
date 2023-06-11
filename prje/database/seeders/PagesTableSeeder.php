<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Pages')->insert([
            [
            'created_at'=>'2023-06-10 12:59:36',
            'page_title' =>'Kütahya İçin Yeni Ücret Tarifeleri',
            'page_slug'=>'Page_slug1',
            'page_file'=>'Page_file1',
            'page_must'=>'44',
            'page_content'=> 'Kütahya genelinde tüm kuaförlerde 15.06.2023den itibaren geçerli olmak üzere ücret tarifelerine %15 zam yapılmıştır.',
            'page_status'=>'1',
            ],
        ]);
    }
}
