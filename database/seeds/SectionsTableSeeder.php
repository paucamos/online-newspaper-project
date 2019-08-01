<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => "Política",
            'description' => "Secció dedicada a la política",
        ]);
        DB::table('sections')->insert([
            'name' => "Esports",
            'description' => "Secció dedicada als esports",
        ]);
        DB::table('sections')->insert([
            'name' => "Futbol",
            'description' => "Secció dedicada al futbol",
        ]);
        DB::table('sections')->insert([
            'name' => "Cultura",
            'description' => "Secció dedicada a la cultura",
        ]);
        DB::table('sections')->insert([
            'name' => "Economia",
            'description' => "Secció dedicada a la economia",
        ]);
        DB::table('sections')->insert([
            'name' => "Opinió",
            'description' => "Secció dedicada a columnes d'opinió",
        ]);
        DB::table('sections')->insert([
            'name' => "Social",
            'description' => "Secció dedicada a noticies d'interes ciutadana",
        ]);
        DB::table('sections')->insert([
            'name' => "Oci",
            'description' => "Secció dedicada a noticies al oci",
        ]);
        DB::table('sections')->insert([
            'name' => "Vida i estil",
            'description' => "Secció dedicada a noticies a la vida i estil",
        ]);
        DB::table('sections')->insert([
            'name' => "Tecnología",
            'description' => "Secció dedicada a noticies a la tecnología",
        ]);
        DB::table('sections')->insert([
            'name' => "Internacional",
            'description' => "Secció dedicada a noticies internacionals",
        ]);
    }
}
