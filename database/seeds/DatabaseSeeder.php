<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(Articles_RegionsTableSeeder::class);
        $this->call(Articles_SectionsTableSeeder::class);
    }
}
