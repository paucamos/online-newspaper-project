<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => "Olot",
            'description' => "Notícies dedicades a Olot",
        ]);
        DB::table('regions')->insert([
            'name' => "Pla de L'Estany",
            'description' => "Notícies dedicades al Pla de L'Estany",
        ]);
        DB::table('regions')->insert([
            'name' => "Banyoles",
            'description' => "Notícies dedicades a Banyoles",
        ]);
        DB::table('regions')->insert([
            'name' => "Girona",
            'description' => "Notícies dedicades a Girona",
        ]);
    }
}
