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
        DB::table('regions')->insert([
            'name' => "Garrotxa",
            'description' => "Notícies dedicades a la Garrotxa",
        ]);
        DB::table('regions')->insert([
            'name' => "Alt Empordà",
            'description' => "Notícies dedicades a l'Alt Empordà",
        ]);
        DB::table('regions')->insert([
            'name' => "Baix Empordà",
            'description' => "Notícies dedicades al Baix Empordà",
        ]);
        DB::table('regions')->insert([
            'name' => "La Selva",
            'description' => "Notícies dedicades a la Selva",
        ]);
        DB::table('regions')->insert([
            'name' => "Ripollès",
            'description' => "Notícies dedicades al Ripollès",
        ]);
        DB::table('regions')->insert([
            'name' => "Barcelona",
            'description' => "Notícies dedicades a Barcelona",
        ]);
        DB::table('regions')->insert([
            'name' => "Catalunya Nord",
            'description' => "Notícies dedicades a la Catalunya Nord",
        ]);
        DB::table('regions')->insert([
            'name' => "Cerdanya",
            'description' => "Notícies dedicades a la Cerdanya",
        ]);
        DB::table('regions')->insert([
            'name' => "Lleida",
            'description' => "Notícies dedicades a Lleida",
        ]);
        DB::table('regions')->insert([
            'name' => "Tarragona",
            'description' => "Notícies dedicades a Tarragona",
        ]);
    }
}
