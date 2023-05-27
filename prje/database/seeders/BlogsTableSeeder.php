<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Blogs')->insert([
            [
            'blog_title' =>'Blog_title1',
            'blog_slug'=>'Blog_slug1',
            'blog_file'=>'Blog_file1',
            'blog_must'=>'1',
            'blog_content'=> 'Blog_Content1',
            'blog_status'=>'1',
            ],
            [
                'blog_title' =>'Blog_title1',
                'blog_slug'=>'Blog_slug1',
                'blog_file'=>'Blog_file1',
                'blog_must'=>'2',
                'blog_content'=> 'Blog_Content1',
                'blog_status'=>'1',
            ],
        ]);
    }
}
