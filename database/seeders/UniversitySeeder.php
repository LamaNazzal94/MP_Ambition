<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $universities = [
            [
                'name' => 'Berlin University of Technology ',
                'main_image' => '2.Brandenburg University of Technology - Copy.jpg',
                'image1' => 'u1s3.png',
                'image2' => 'u1s1.png',
                'image3' => 'u1s2.png',
                'accommodation' => 'Accommodation : Home stays, Private Rentals, Student Accommodation Properties',
                'offer' => 'offer',
                'about' => 'Berlin University of Technology is a public 
                 university founded in 1946 AD. It has a ranking 
                 of No. 6 in Germany and No.
                 180 among universities in the world.
                 It is accredited by the German Ministry of Higher Education
                 and is one of the largest technical universities in Germany. 
                 Among its graduates and teachers are ten Nobel Prize winners.',
                'requirement' => 'requerment',
                'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars,
                 and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                'location' => 'location',
                'ranking'=>'rank',
                'country_id'=>1,



                // Add other fields as needed
            ],
            [
                'name' => 'Berlin University of Technology ',
                'main_image' => '2.Brandenburg University of Technology - Copy.jpg',
                'image1' => 'u1s3.png',
                'image2' => 'u1s1.png',
                'image3' => 'u1s2.png',
                'accommodation' => 'Accommodation : Home stays, Private Rentals, Student Accommodation Properties',
                'offer' => 'offer',
                'about' => 'Berlin University of Technology is a public 
                 university founded in 1946 AD. It has a ranking 
                 of No. 6 in Germany and No.
                 180 among universities in the world.
                 It is accredited by the German Ministry of Higher Education
                 and is one of the largest technical universities in Germany. 
                 Among its graduates and teachers are ten Nobel Prize winners.',
                'requirement' => 'requerment',
                'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars,
                 and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                'location' => 'location',
                'ranking'=>'rank',
                'country_id'=>1,



                // Add other fields as needed
            ],
            [
              
                'name' => 'Berlin University of Technology ',
                'main_image' => '2.Brandenburg University of Technology - Copy.jpg',
                'image1' => 'u1s3.png',
                'image2' => 'u1s1.png',
                'image3' => 'u1s2.png',
                'accommodation' => 'Accommodation : Home stays, Private Rentals, Student Accommodation Properties',
                'offer' => 'offer',
                'about' => 'Berlin University of Technology is a public 
                 university founded in 1946 AD. It has a ranking 
                 of No. 6 in Germany and No.
                 180 among universities in the world.
                 It is accredited by the German Ministry of Higher Education
                 and is one of the largest technical universities in Germany. 
                 Among its graduates and teachers are ten Nobel Prize winners.',
                'requirement' => 'requerment',
                'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars,
                 and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                'location' => 'location',
                'ranking'=>'rank',
                'country_id'=>1,



                // Add other fields as needed
            ],

            // Add more universities as needed
        ];

        // Insert the universities into the database
        DB::table('universities')->insert($universities);
    }
}
