<?php

namespace Database\Seeders;

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
        //Seed all Seeders 
        $this->call([
            LaratrustSeeder::class,            
            CountriesTableSeeder::class,
            SubTableSeeder::class,            
            maiSeeder::class,
            EmployerProfileSeeder::class,
        ]);
    }
}
