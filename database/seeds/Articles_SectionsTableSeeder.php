<?php

use Illuminate\Database\Seeder;

class Articles_SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_section')->insert([
            'article_id' => 1,
            'section_id' => 2
        ]);
        DB::table('article_section')->insert([
            'article_id' => 1,
            'section_id' => 3
        ]);
        DB::table('article_section')->insert([
            'article_id' => 2,
            'section_id' => 7
        ]);
        DB::table('article_section')->insert([
            'article_id' => 3,
            'section_id' => 6
        ]);
    }
}
