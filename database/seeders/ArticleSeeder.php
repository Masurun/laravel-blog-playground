<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title' => Str::random(10),
            'category' => 'アート',
        ]);

        DB::table('articles')->insert([
            'title' => Str::random(10),
            'category' => '歴史',
        ]);

        DB::table('articles')->insert([
            'title' => Str::random(10),
            'category' => 'サイエンス',
        ]);
    }
}
