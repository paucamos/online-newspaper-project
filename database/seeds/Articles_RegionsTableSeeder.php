<?php

use Illuminate\Database\Seeder;

class Articles_RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_region')->insert([
            'article_id' => 1,
            'region_id' => 4
        ]);
        DB::table('article_region')->insert([
            'article_id' => 2,
            'region_id' => 6
        ]);
        DB::table('article_region')->insert([
            'article_id' => 4,
            'region_id' => 6
        ]);
        DB::table('article_region')->insert([
            'article_id' => 5,
            'region_id' => 10
        ]);
        DB::table('article_region')->insert([
            'article_id' => 6,
            'region_id' => 10
        ]);
        DB::table('article_region')->insert([
            'article_id' => 7,
            'region_id' => 10
        ]);
        DB::table('article_region')->insert([
            'article_id' => 8,
            'region_id' => 10
        ]);
        DB::table('article_region')->insert([
            'article_id' => 11,
            'region_id' => 4
        ]);
        DB::table('article_region')->insert([
            'article_id' => 13,
            'region_id' => 4
        ]);
        DB::table('article_region')->insert([
            'article_id' => 14,
            'region_id' => 10
        ]);
    }
}
