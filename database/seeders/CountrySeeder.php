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
                ,
                [
                    'name' => 'Canada',
                    'image' => 'canda.png',
                    'description' => "Studying in Canada offers a transformative educational
                     experience in a welcoming and diverse environment. Renowned for its high academic 
                     standards and cutting-edge research, Canadian universities and colleges provide 
                     a wide range of programs for international students. Beyond academics, Canada's inclusive
                      society, stunning natural landscapes, and vibrant cities make it an ideal destination for 
                      those seeking a well-rounded and enriching study abroad experience. With opportunities for
                       part-time work during studies, post-graduation work permits, and a clear path to permanent residency, 
                       Canada opens doors to a promising future for students from around the world. ",
                    'quote' => 'Why Canada is the Perfect Place to Study Abroad '
                ],
                [
                    'name' => 'USA',
                    'image' => 'usa1.jpg',
                    'description' => "Studying in the USA offers a
                     dynamic and globally recognized education system with 
                     a diverse range of academic programs and renowned institutions.
                      Known for fostering innovation and research, U.S. universities provide 
                      students with access to cutting-edge facilities and opportunities for 
                      hands-on learning. Beyond academics, students can immerse themselves 
                      in the rich cultural tapestry of the United States, experiencing a
                       melting pot of traditions, arts, and lifestyles. The USA's extensive network of 
                       industries and businesses also creates pathways for internships and post-graduate
                        employment. With a reputation for academic excellence and a multicultural environment, 
                        studying in the USA opens doors to a world of possibilities for personal and professional growth.
                    ",
                    'quote' => 'Why USA is the Perfect Place to Study Abroad '
                ],
                [
                    'name' => 'France',
                    'image' => 'france.png',
                    'description' => "Studying in France offers a unique blend of 
                    rich cultural experiences and high-quality education. Renowned 
                    for its historic universities and avant-garde academic programs,
                     France attracts students from around the world. The country's 
                     emphasis on research and innovation is reflected in its diverse 
                     range of disciplines, from the arts and humanities to science and
                      technology. Students can enjoy a vibrant lifestyle, savoring French 
                      cuisine, exploring art and architecture, and engaging in cultural events.
                       Additionally, France's central location in Europe provides easy access
                        to travel and a gateway to different cultures. With a focus on academic
                         rigor and a captivating lifestyle, studying in France offers an 
                         enriching and transformative educational journey.
                    ",
                    'quote' => 'Why France is the Perfect Place to Study Abroad '
                ]
                ,
                [
                    'name' => 'Jordan',
                    'image' => 'jordan.png',
                    'description' => "Studying in Jordan provides a
                     unique opportunity to experience the intersection
                      of rich history, diverse culture, and modern education. 
                      The country is home to well-established universities that offer
                       a range of academic programs in various fields. Jordan's educational
                        institutions emphasize a blend of traditional values and contemporary
                         learning, fostering an environment that encourages critical thinking and 
                         innovation. Students can immerse themselves in the country's historical 
                         sites, vibrant cities, and warm hospitality. With a focus on Arab culture
                          and the Arabic language, studying in Jordan offers a distinct educational 
                          experience in the heart of the Middle East. ",
                    'quote' => 'Why Jordan is the Perfect Place to Study Abroad '
                ]

            ];

            // Insert data into the 'categories' table
            foreach ($countries as $country) {
                DB::table('countries')->insert($country);

            }
        }
    }
}
