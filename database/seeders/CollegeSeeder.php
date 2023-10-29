<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CollegeSeeder extends Seeder
{
    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */{
            $colleges = [
                [
                    'name' => 'College of Electrical Engineering and Computer Science',
                    'image' => 'collegepic1.png',
                    'uni_id' => 1,  
                ]

            ];

            // Insert data into the 'categories' table
            foreach ($colleges as $college) {
                DB::table('colleges')->insert($college);

            }
        }
    }
}
