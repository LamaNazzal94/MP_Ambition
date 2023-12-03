<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AcademiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 
     public function run()
     {
         /**
          * Run the database seeds.
          *
          * @return void
          */{
            DB::table('lang_academies')->insert([                
                'name' => 'oxfored',
                'image' => 'oxfored.png',
                'description' => "https://oxfordjo.com/en/",
                'location' => 'Irbid-Jordan',
        ]);
        DB::table('lang_academies')->insert([                
            'name' => 'Modern Language Center',
            'image' => 'lan2.jpeg',
            'description' => "",
            'location' => 'Irbid-Jordan',
    ]);
    DB::table('lang_academies')->insert([                
        'name' => 'Jordan Language Academy ',
        'image' => 'lan3.png',
        'description' => " www.jordanla.com",
        'location' => 'Amman-Jordan',
]);
    }
     }
}
