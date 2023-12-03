<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call(CountrySeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(AcademiesTableSeeder::class);


    }
}
