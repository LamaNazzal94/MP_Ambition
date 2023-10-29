<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{

    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */{
            $countries = [
                [
                    'name' => 'Germany',
                    'image' => 'germany1.png',
                    'description' => "Studying in Germany offers numerous
                     benefits for international students. The country
                     's high-quality education system, with tuition-free
                      or low-cost options at public universities, is a major
                       draw. Germany boasts a wide range of programs, some taught 
                       in English, and provides a diverse, international environment.
                        The strong economy and job opportunities after graduation make it an attractive destination.
                         Additionally, Germany's central location in Europe, 
                         safe environment, and excellent quality of life add to its appeal.
                          Scholarships and funding options further support students, 
                          making Germany an ideal choice for personal and academic growth.",
                    'quote' => 'Why Germany is the Perfect Place to Study Abroad '
                ]

            ];

            // Insert data into the 'categories' table
            foreach ($countries as $country) {
                DB::table('countries')->insert($country);

            }
        }
    }
}
