<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "Admin@admin.com",
            'password' => bcrypt("AdminAdmin"),
            'user_type' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Periodista",
            'email' => "Periodista@periodista.com",
            'password' => bcrypt("PeriodistaPeriodista"),
            'user_type' => 2
        ]);
        DB::table('users')->insert([
            'name' => "Pepe",
            'email' => "Pepe@pepe.com",
            'password' => bcrypt("PepePepe"),
            'user_type' => 2
        ]);
    }
}
